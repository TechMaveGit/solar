<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->unique()->nullable();
            $table->string('dial_code')->nullable();
            $table->string('address')->nullable();
            $table->enum('status', ['1', '2'])->default('1')->comment('1=>Active, 2=>Inactive');
            $table->enum('user_type', ['1', '2'])->default('2')->comment('1=>Admin, 2=>Staff');
            $table->enum('gender', ['male', 'female','others'])->default('male');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('otp')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
