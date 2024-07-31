<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->middleware('auth:api', ['except' => ['login','refresh']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors(),
            ], 422);
        } elseif (!User::where(['user_type' => '2', 'email' => $request->email])->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'User Not Found.',
            ], 422);
        }elseif (!User::where(['user_type' => '2', 'email' => $request->email, 'status' =>'1'])->exists()) {
            return response()->json([
                'status' => false,
                'message' => "Your account has been deactivated",
            ], 422);
        }

        $user = User::where('email', $request->input('email'))->where('user_type', '2')->first();
        // Attempt to authenticate the user
        try {
            if (!$token = JWTAuth::attempt($validator->validated())) {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid Credentials.',
                ], 422);
            }
        } catch (\JWTException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create token.',
            ], 500);
        }

        // Authentication successful, respond with JWT token
        // return $this->respondWithToken($token, $user);
        return $this->respondWithToken($token, [
            'user' => $user,
            'image_root' => config('envoirment.IMAGE_API_PATH')
        ]);
    }

    public function updateProfile(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'password' => 'nullable|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = auth()->user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Profile updated successfully.',
            'user' => $user,
        ]);
    }

    private function respondWithToken($token, $user = "")
    {
        return response()->json([
            'status' => true,
            'access_token' => $token,
            'user_data' => $user,
            'token_type' => 'bearer',
            'expires_in' => JWTAuth::factory()->getTTL() * 60, // Token expiry time in minutes
            // 'expires_in' => JWTAuth::factory()->getTTL() * 5, // Token expiry time in minutes
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // public function profile()
    // {

    //     return response()->json(auth()->user());
    // }

    public function profile()
    {
        try {
            $user = auth()->user();
            if (!$user) {
                return  response()->json([
                    'status' => false,
                    'message'=>'user not found'
                ],200);
            }
        } catch (JWTException $e) {
            return  response()->json([
                'status' => false,
                'message'=>$e->getMessage()
            ],500);
        }

        return  response()->json([
            'status' => true,
            'user'=>$user,
            'image_root' => config('envoirment.IMAGE_API_PATH')
        ]);
    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = User::where(['email'=>$request->email,'user_type'=>'2'])->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        try {
            // Invalidate the old token if it exists
            // $currentToken = JWTAuth::getToken();
            // if ($currentToken) {
            //     JWTAuth::invalidate($currentToken);
            // }

            // Generate a new token for the user
            $token = JWTAuth::fromUser($user);

            return $this->respondWithToken($token, $user);

        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not refresh token'], 500);
        }

        // return $this->respondWithToken(auth()->refresh());
    }


    public function uploadProfile(Request $request)
    {
        $folderName = 'Profile_image';
        if($request->hasFile('profile_image')){
            $profile_images = $request->file('profile_image');
            $profile_image = $this->upload($profile_images,$folderName);
        }
        User::whereId(auth()->user()->id)->update(['profile_image' => $profile_image]);
        return response()->json([
            'status' => true,
            'success' => 'Image uploaded successfully'
        ]);
    }

    public static function upload($image,$folderName)
    {
        $fileName = 'image_' . now()->format('YmdHisu') . '.' . $image->getClientOriginalExtension();
        $image->storeAs($folderName, $fileName, 'public');
        return $folderName.'/'.$fileName;
    }


    public function forgotPassword(Request $request)
    {
        try {
            $request->validate(['email' => 'required']);
            $otp = $this->generateOTP();
            $this->storeOTP($request->email, $otp);
            $this->sendOTPByEmail($request->email, $otp);
            return response()->json([
                'status' => true,
                'success' => 'OTP sent to your email',
                'opt' => $otp
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error' =>'Something went Wrong!',
            ], 503);
        }
    }

    public function verifyOtp(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'otp' => 'required',
            ]);

            if ($this->validateOTP($request->email, $request->otp)) {
                return response()->json([
                    'status' => true,
                    'success' => 'OTP verified successfully',
                ]);
            }

            return response()->json([
                'status' => false,
                'error' => 'Invalid OTP',
            ],400);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error' =>'Something went Wrong!',
            ], 503);
        }
    }

    public function resetPassword(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required|min:6',
            ]);

            $user = User::where('email', $request->email)->first();
            $user->password = Hash::make($request->password);
            $user->otp = null;
            $user->save();
            return response()->json([
                'status' => true,
                'success' =>'Password updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error' =>'Something went Wrong!',
            ], 503);
        }
    }

    private function generateOTP()
    {
        return str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
    }

    private function storeOTP($email, $otp)
    {
        // Store OTP in database or cache
        User::where('email', $email)->update(['otp' => $otp]);
    }

    private function sendOTPByEmail($email, $otp)
    {

        Mail::raw("Your OTP is: $otp", function ($message) use ($email) {
            $message->to($email)
                ->subject('OTP for Verification');
        });
    }

    private function validateOTP($email, $otp)
    {
        // Validate OTP against stored OTP
        $storedOTP = User::where('email', $email)->first();

        return $storedOTP && $storedOTP->otp === $otp;

        return true; // For demonstration purposes
    }



}
