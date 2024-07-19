<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Images</h1>
    @foreach ($images as $field => $path)
        <h2>{{ ucfirst(str_replace('_', ' ', $field)) }}</h2>
        <img src="{{ config('envoirment.IMAGE_API_PATH') . $path }}" alt="{{ $field }}" style="width: 20%; max-width: 20%;">
        {{-- <img src="{{ config('envoirment.IMAGE_API_PATH') . 'base_document/image_20240718100333291872.jpg' }}" alt="" style="width: 20%; max-width: 20%;"> --}}
    @endforeach

</body>
</html>
