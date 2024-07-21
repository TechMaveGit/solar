<!DOCTYPE html>
<html>
<head>
    <title>Images</title>
</head>
<body>
    <h1>Images</h1>
    @if (isset($base_documents))
        @foreach ($base_documents as $document)
            @if ($document->document_name == 'image')
                <img src="{{ config('envoirment.IMAGE_API_PATH') . $document->document }}" alt="Certificate Image" style="width: 20%; max-width: 20%;">
            @endif
        @endforeach
    @endif
    {{-- @foreach ($images as $field => $path)
        <h2>{{ ucfirst(str_replace('_', ' ', $field)) }}</h2>
        <img src="{{ config('envoirment.IMAGE_API_PATH') . $path }}" alt="{{ $field }}" style="width: 20%; max-width: 20%;"> --}}
        {{-- <img src="{{ config('envoirment.IMAGE_API_PATH') . 'base_document/image_20240718100333291872.jpg' }}" alt="" style="width: 20%; max-width: 20%;"> --}}
    {{-- @endforeach --}}

</body>
</html>
