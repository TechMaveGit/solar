<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munster Solar Images</title>
</head>

<body>
    <div class="wrapper" style="width:675px;  margin:0 auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="text-align: right;">
                    <img src="{{ config('envoirment.SITE_LOGO')}}" alt="" style="width:250px">
                </td>
            </tr>
            <tr>
                <th>
                    <h1 style="text-align: left;"><u>Images</u></h1>
                </th>
            </tr>
            @if (isset($base_documents))
                @foreach ($base_documents->chunk(2) as $chunk)
                <tr>
                    @foreach ($chunk as $document)
                        @if ($document->document_name == 'image')
                            <td style="border: 2px solid; font-weight:500; line-height:30px; padding-left:8pt;">
                                {{ ucfirst(str_replace('_', ' ', $document->document_type)) }}
                            </td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($chunk as $document)
                        @if ($document->document_name == 'image')
                            <td style="border: 2px solid;">
                                <img src="{{ config('envoirment.IMAGE_API_PATH') . $document->document }}" alt="" style="width:100%; height:250px; object-fit:contain">
                            </td>
                        @endif
                    @endforeach
                </tr>
                @endforeach

            @endif
        </table>
    </div>
</body>

</html>

