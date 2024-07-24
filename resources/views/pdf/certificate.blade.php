<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Munester certificates</title>
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
                    <h1 style="text-align: left;"><u>Certificates</u></h1>
                </th>
            </tr>
            {{-- <tr>
                <td style="border: 2px solid; font-weight:500; line-height:30px; padding-left:8pt ">
                    Certificate 1
                </td>
                <td style="border: 2px solid; font-weight:500; line-height:30px; padding-left:8pt ">
                    Certificate 2
                </td>
            </tr> --}}
            @if (isset($base_documents))
                @foreach ($base_documents as $document)
                <tr>
                    @if ($document->document_type == 'certificate_image')
                        <td style="border: 2px solid;">
                            <img src="{{ config('envoirment.IMAGE_API_PATH') . $document->document }}" alt="" style="width:100%">
                        </td>
                        {{-- <img src="{{ config('envoirment.IMAGE_API_PATH') . $document->document }}" alt="Certificate Image" style="width: 20%; max-width: 20%;"> --}}
                    @endif
                </tr>
                @endforeach
            @endif

        </table>
    </div>
</body>

</html>
