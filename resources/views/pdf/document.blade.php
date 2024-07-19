<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
        piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
        McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the
        more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of
        the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
        1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first
        line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section</p>
        <div>

            {{-- <img src="{{ env('STORE_FILE_URL').'base_document/c1.jpg' }}" alt="" style="width: 20%; max-width: 20%;"> --}}
            <img src="{{ config('envoirment.IMAGE_API_PATH') . 'base_document/image_20240718100333291872.jpg' }}" alt="" style="width: 20%; max-width: 20%;">

            {{-- <img src="https://techmavedev.com/solar/public/storage/base_document/image_20240718100333291872.jpg" alt="" style="width: 100%; max-width: 600px;"> --}}
        </div>
        {{-- C:\projects\solar\storage\app\public\base_document\c1.jpg --}}
        {{-- {{ dd(asset('http://localhost:8000/storage/base_document/c1.jpg')) }} --}}
</body>
</html>
