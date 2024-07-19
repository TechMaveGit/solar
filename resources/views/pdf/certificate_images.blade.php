<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Certificate Images</h1>
    @foreach ($certificate_images as $path)
        <img src="{{ config('envoirment.IMAGE_API_PATH') . $path }}" alt="Certificate Image" style="width: 100%; max-width: 600px;">
        {{-- <img src="{{ config('envoirment.IMAGE_API_PATH') . 'base_document/image_20240718100333291872.jpg' }}" alt="" style="width: 20%; max-width: 20%;"> --}}
    @endforeach
</body>
</html>
