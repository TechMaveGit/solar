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
            {{-- @php
                $document_pairs = array_chunk($base_documents->toArray(), 2);
            @endphp

            @foreach ($document_pairs as $pair)
                <tr>
                    @foreach ($pair as $document)
                        @if ($document['document_type'] == 'certificate_image')
                            <td style="border: 2px solid;">
                                <img src="{{ config('envoirment.IMAGE_API_PATH') . $document['document'] }}" alt="" style="width:100%; height:250px; object-fit:contain">
                            </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach --}}

            @foreach ($base_documents as $document)
                <tr>
                    @if ($document['document_type'] == 'certificate_image')
                        <td style="border: 2px solid;">
                            <img src="{{ config('envoirment.IMAGE_API_PATH') . $document['document'] }}" alt="" style="width:100%;  object-fit:contain">
                        </td>
                    @endif
                </tr>
            @endforeach
        @endif


        </table>
    </div>
</body>

</html>
