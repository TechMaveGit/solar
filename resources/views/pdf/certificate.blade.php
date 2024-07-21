<!DOCTYPE html>
<html>
<head>
    <title>Certificate Images</title>
</head>
<body>
    <h1>Certificate Images</h1>
    @if (isset($base_documents))
        @foreach ($base_documents as $document)
            @if ($document->document_type == 'certificate_image')
                <img src="{{ config('envoirment.IMAGE_API_PATH') . $document->document }}" alt="Certificate Image" style="width: 20%; max-width: 20%;">
            @endif
        @endforeach
    @endif
    {{-- @if(isset($data->base_documents))
        @foreach ($data->base_documents as $path)
            <img src="{{ config('envoirment.IMAGE_API_PATH') . $path }}" alt="Certificate Image" style="width: 100%; max-width: 600px;">
        @endforeach
    @endif     --}}
    {{-- <img src="{{ config('envoirment.IMAGE_API_PATH') . 'base_document/image_20240718100333291872.jpg' }}" alt="" style="width: 20%; max-width: 20%;"> --}}
</body>
</html>
