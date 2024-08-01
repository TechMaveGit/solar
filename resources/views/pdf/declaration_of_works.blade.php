<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Declaration of Works</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        h1 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 16pt;
        }

        h2 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s1 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s2 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s3 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s5 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s6 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s8 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s9 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s10 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        p {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
            margin: 0 auto;

        }

        h3 {
            color: black;
            font-family: "Segoe UI", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 10pt;
        }

        li {
            display: block;
        }

        #l1 {
            padding-left: 0pt;
        }

        table,
        tbody {
            vertical-align: top;
            overflow: visible;
            width: 100%;
        }

        td {
            border-width: 2px !important;
        }
    </style>
</head>
@php
    $system = json_decode($data['system_components']);
@endphp
<body>
    <div class="wrapper" style="width:675px; margin:0 auto;">
        <table>
            <tr>
                <td style="text-align: right; ">
                    <img src="{{ config('envoirment.SITE_LOGO')}}" alt="" style="width:250px">
                </td>
            </tr>
            <tr>
                <th>
                    <h2 style="text-align: left; font-size:24px"><u>Part 1 – @if($data['client_type']=='2') NDMG @endif Declaration of Works</u></h2>
                </th>
            </tr>
        </table>

        <table style="border-collapse:collapse; margin:0 auto" cellspacing="0">
            <tr>
                <th style="text-indent: 0pt;text-align: left;">Installation Details:</th>
            </tr>
            <tr style="height:15pt">
                <td style="width:212pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;line-height: 13pt;text-align: left;">Applicant Name*</p>
                </td>
                <td
                    style="width:210pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $data['applicant_name'] ?? '' }}<br /></p>
                </td>
            </tr>
            <tr style="height:55pt">
                <td style="width:212pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Installation Address</p>
                </td>
                <td
                    style="width:210pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $data['installation_address'] ?? '' }}<br /></p>
                </td>
            </tr>
            <tr style="height:15pt">
                <td style="width:212pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;line-height: 13pt;text-align: left;">Installation Eircode</p>
                </td>
                <td
                    style="width:210pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $data['installation_eircode'] ?? '' }}<br /></p>
                </td>
            </tr>
            <tr style="height:15pt">
                <td style="width:212pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;line-height: 13pt;text-align: left;">Installation MPRN</p>
                </td>
                <td
                    style="width:210pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $data['installation_mprn'] ?? '' }}<br /></p>
                </td>
            </tr>
        </table>
        <p class="s2" style="padding-left: 0pt;text-indent: 0pt;text-align: left;">*This will be the person claiming the
            SEAI NDMG grant</p>
        <p style="padding-top: 1pt;text-indent: 0pt;text-align: left;"><br /></p>
        <h2 style="padding-left: 0pt;text-indent: 0pt;text-align: left;">System Details</h2>
        <table style="border-collapse:collapse; margin:0 auto;" cellspacing="0">
            <tr style="height:29pt">
                <td style="width:132pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Solar PV System Size</p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">{{ $data['solar_pv_system_size'] ?? '' }}</p>
                </td>
                <td style="width:108pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="padding-right: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Battery
                        Storage (if applicable)</p>
                </td>
                <td
                    style="width:101pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1"
                        style="padding-left: 75pt;padding-right: 4pt;text-indent: 4pt;line-height: 13pt;text-align: right;">
                        {{ $data['battery_storage'] ?? '' }}</p>
                </td>
            </tr>
            <tr style="height:42pt">
                <td style="width:132pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Solar PV System Annual Estimated Yield</p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1" style="padding-right: 5pt;text-indent: 0pt;text-align: right;">{{ $data['annual_estimated_yield'] ?? '' }}</p>
                </td>
                <td style="width:108pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="padding-right: 2pt;text-indent: 2pt;line-height: 13pt;text-align: left;">Method
                        of
                        Yield Calculation (e.g., PV Syst)</p>
                </td>
                <td
                    style="width:101pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $data['yield_calculation'] ?? '' }}<br /></p>
                </td>
            </tr>
            <tr style="height:22pt">
                <td style="width:132pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Hot Water Diverter Installed?</p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1" style="padding-right: 8pt;text-indent: 0pt;text-align: right;">{{ $data['water_diverter'] ?? '' }}</p>
                </td>
                <td style="width:209pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt"
                    colspan="2">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
            </tr>
        </table>
        <p class="s2" style="padding-left: 0pt;text-indent: 0pt;line-height: 13pt;text-align: left;">* Total DC
            Installed
            Capacity at STC – (Nameplate Capacity, NOT Flash Test)</p>
        <p class="s2" style="padding-left: 0pt;text-indent: 0pt;line-height: 13pt;text-align: left;">** AC kWh based on
            estimated calculation</p>
        <p style="padding-top: 1pt;text-indent: 0pt;text-align: left;"><br /></p>
        <h2 style="padding-left: 0pt;text-indent: 0pt;text-align: left;">Solar PV Registered Company (<span
                class="s3">MUST
                BE ON THE NDMG SEAI SOLAR PV </span><u>COMPANY</u></h2>
        <p class="s3" style="padding-left: 0pt;text-indent: 0pt;text-align: left;">REGISTER<b>)</b></p>
        <table style="border-collapse:collapse; margin:0 auto; width:100%;" cellspacing="0">
            <tr style="height:27pt">
                <td colspan="2" style="width:50%;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#E7E6E6">
                    <p class="s1" style="padding-top: 6pt;text-indent: 0pt;text-align: left;">Company name</p>
                </td>
                <td colspan="2" style="width:50%;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $data['company_name'] ?? '' }}</p>
                </td>
            </tr>
            <tr style="height:27pt">
                <td colspan="2" style="width:50%;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#E7E6E6">
                    <p class="s1" style="padding-top: 6pt;text-indent: 0pt;text-align: left;">Company Identification Number</p>
                </td>
                <td colspan="2" style="width:50%;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $data['company_number'] ?? '' }}<br /></p>
                </td>
            </tr>
        </table>

        <p style="padding-top: 1pt;text-indent: 0pt;text-align: left;"><br /></p>
        <table style="border-collapse:collapse; margin:0 auto;" cellspacing="0">
            <tr style="height:15pt">
                <td style="width:202pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;line-height: 13pt;text-align: left;">Property year of
                        Construction
                    </p>
                </td>
                <td
                    style="width:220pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $data['property_year_construction'] ?? '' }}<br /></p>
                </td>
            </tr>
            <tr style="height:29pt">
                <td style="width:202pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;line-height: 13pt;text-align: left;">Total cost of
                        installation
                        (including parts, labour and VAT)</p>
                </td>
                <td
                    style="width:220pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">{{ $data['cost_installation'] ?? '' }}</p>
                </td>
            </tr>
        </table>
        <h2 style="padding-top: 12pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">System Components</h2>
        <table style="border-collapse:collapse; margin:0 auto;" cellspacing="0">
            <tr style="height:20pt">
                <td
                    style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="text-indent: 0pt;text-align: left;">Component</p>
                </td>
                <td
                    style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="text-indent: 0pt;text-align: left;">Make</p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="text-indent: 0pt;text-align: left;">Model</p>
                </td>
                <td
                    style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="text-indent: 0pt;text-align: left;">Rating</p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s6" style="text-indent: 0pt;text-align: left;">Quantity</p>
                </td>
            </tr>
            <tr style="height:16pt">
                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Solar PV Modules</p>
                </td>
                <td
                    style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->pv_make ?? ''}}<br /></p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->pv_model ?? ''}}<br /></p>
                </td>
                <td
                    style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1" style="padding-right: 2pt;text-indent: 0pt; text-align: right;">{{ $system->pv_rating ?? 'N/A'}}</p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->pv_quantity ?? ''}}<br /></p>
                </td>
            </tr>
            <tr style="height:16pt">
                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Mounting System</p>
                </td>
                <td
                    style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->ms_make ?? '' }}<br /></p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->ms_model ?? '' }}<br /></p>
                </td>
                <td style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="padding-right: 1pt;text-indent: 0pt;text-align: center;">{{ $system->ms_rating ?? 'N/A' }}</p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->ms_quantity ?? '' }}<br /></p>
                </td>
            </tr>
            <tr style="height:16pt">
                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Inverter @if($data['client_type']=='2') 1 @endif</p>
                </td>
                <td
                    style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_make ?? ''}}<br /></p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_model ?? ''}}<br /></p>
                </td>
                <td
                    style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1" style="padding-right: 2pt;text-indent: 0pt;text-align: right;">{{ $system->inverter_rating ?? 'N/A'}}</p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_quantity ?? ''}}<br /></p>
                </td>
            </tr>
            @if($data['client_type']=='2')
            <tr style="height:16pt">
                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Inverter 2 <i>(If App.)</i></p>
                </td>
                <td
                    style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_make2 ?? ''}}<br /></p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_model2 ?? ''}}<br /></p>
                </td>
                <td style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: right;">{{ $system->inverter_rating2 ?? 'N/A'}}</p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_quantity2 ?? ''}}<br /></p>
                </td>
            </tr>
            <tr style="height:16pt">
                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Inverter 3 <i>(If App.)</i></p>
                </td>
                <td
                    style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_make3 ?? ''}}<br /></p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_model3 ?? ''}}<br /></p>
                </td>
                <td
                    style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1" style="text-indent: 0pt;text-align: right;">{{ $system->inverter_rating3 ?? '' }}</p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->inverter_quantity3 ?? '' }}<br /></p>
                </td>
            </tr>
            @endif
            <tr style="height:16pt">
                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">Energy Meter</p>
                </td>
                <td
                    style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->energy_make ?? ''}}<br /></p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->energy_model ?? ''}}<br /></p>
                </td>
                <td style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="padding-right: 1pt;text-indent: 0pt;text-align: center;">{{ $system->energy_rating ?? 'N/A' }}</p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->energy_quantity ?? ''}}<br /></p>
                </td>
            </tr>
            <tr style="height:55pt">
                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s1" style="padding-right: 19pt;text-indent: 0pt;text-align: left;">Battery Energy Storage
                        System</p>
                </td>
                <td
                    style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->battery_make ?? ''}}<br /></p>
                </td>
                <td
                    style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    <p class="s1" style="text-indent: 0pt;text-align: left;">DC Connected <input type="checkbox" @checked($system->battery_dc ?? false) name="" id=""></p>
                    <p class="s1" style="text-indent: 0pt;line-height: 13pt;text-align: left;">AC Connected <input type="checkbox" @checked($system->battery_ac ?? false) name="" id=""></p>
                </td>
                <td
                    style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s1" style="padding-left: 94pt;padding-right: 2pt;text-indent: 5pt;text-align: right;">{{ isset($system->battery_rating_kw) ? $system->battery_rating_kw . ' (kw)' : '(kw)' }}<br/>{{ isset($system->battery_rating_kwh) ? $system->battery_rating_kwh . ' (kwh)' : '(kwh)' }}</p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;">{{ $system->battery_quantity ?? ''}}<br /></p>
                </td>
            </tr>
        </table>
        @if($data['client_type']=='2')
        <h2 style="padding-top: 4pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">Installer Declaration <span
                class="s3">MUST BE ON THE SEAI  NDMG  SOLAR PV </span><u>INSTALLER</u></h2>
        @else
        <h2 style="padding-top: 4pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">Installer Declaration <span
            class="s3">MUST BE ON THE SEAI SOLAR PV </span><u>INSTALLER</u></h2>
        @endif
        <p class="s9" style="padding-bottom: 2pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">REGISTER<b>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
        </p>
        <table style="border-collapse:collapse; margin:0 auto;" cellspacing="0">
            <tr style="height:211pt">
                <td style="border-top-style:solid;border-top-width:2pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    colspan="18">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">By signing this Declaration of Works, the
                        undersigned declares that;</p>
                    <ul style="list-style: disc; color:black;">
                        <li>
                            <span
                                style="width: 6px; height:6px; background-color:black; border-radius: 50px; display:inline-block; margin:3px;"></span>
                            <span class="s1"
                                style="padding-top: 6pt;padding-right: 45pt;text-indent: 0pt;text-align: left;">
                                The Solar PV system (and, if applicable, battery system) has been installed and
                                commissioned
                                at the above Installation Address on the Date of Works Completion.</span>
                        </li>
                        <li>
                            <span
                                style="width: 6px; height:6px; background-color:black; border-radius: 50px; display:inline-block; margin:3px;"></span>
                            <span class="s1"
                                style="padding-top: 5pt;padding-right: 3pt;text-indent: 0pt;text-align: left; ">
                                All works indicated are fully compliant with SEAI Non-Domestic Microgen Scheme- Code of
                                Practice for Installers, SEAI Renewable Installer Register Terms and Conditions and SEAI
                                Solar PV Installer Register Terms and Conditions.</span>
                        </li>
                        <li>
                            <span
                                style="width: 6px; height:6px; background-color:black; border-radius: 50px; display:inline-block; margin:3px;"></span>
                            <span class="s1" style="padding-top: 6pt;text-indent: 0pt;text-align: left;">The
                                electrical installation has been installed in accordance with I.S. 10101:2020 and a Safe
                                Electric certificate (‘RECI cert’) has been issued by a Registered Electrical Contractor
                                for
                                the electrical installation.</span>
                        </li>
                        <li>
                            <span
                                style="width: 6px; height:6px; background-color:black; border-radius: 50px; display:inline-block; margin:3px;"></span>
                            <span class="s1"
                                style="padding-top: 5pt;padding-right: 2pt;text-indent: 0pt;text-align: left;">
                                I have completed an Inspection, Test and Commissioning Report for this solar
                                installation
                                and have given it to the applicant.</span>
                        </li>
                        <li>
                            <span
                                style="width: 6px; height:6px; background-color:black; border-radius: 50px; display:inline-block; margin:3px;"></span>

                            <span class="s1"
                                style="padding-top: 6pt;padding-right: 12pt;text-indent: 0pt;text-align: left;">
                                I have provided the applicant with the required documentation to complete their claim
                                application.</span>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:29pt">
                <td colspan="1"
                style= "border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#D9D9D9">
                    <p class="s1" style="padding-top: 1.5pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Name
                        (CAPITALS)</p>
                </td>
                <td colspan="9"
                    style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br />{{ $data['installer_name'] ?? '' }}</p>
                </td>
                <td colspan="2"
                style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#D9D9D9">
                    <p class="s1" style="padding-top: 8pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Date</p>
                </td>
                <td colspan="6"
                    style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br />{{ $data['installer_date'] ?? '' }}</p>

                </td>
            </tr>
            <tr style="height:34pt">
                <td colspan="1"style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#D9D9D9">
                    <p class="s1" style="padding-top: 10pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Signed:
                    </p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    colspan="17">
                    @if(isset($data['installer_sign']) && strpos($data['installer_sign'], 'base_document') !== false)
                    <img src="{{ config('envoirment.IMAGE_API_PATH') . $data['installer_sign'] }}" alt="">
                    @else
                    <p style="text-indent: 0pt;text-align: left; font-size:16px; padding-bottom:2pt"><br />{{ $data['installer_sign'] ?? '' }}</p>
                    @endif

                </td>
            </tr>
            <tr style="height:29pt">
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#D9D9D9" colspan="14">
                    <p class="s1" style="padding-top: 6pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">DATE THE
                        GRANT WORK WAS COMPLETED</p>
                </td>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br />{{ $data['installer_completed_date'] ?? '' }}</p>
                </td>
            </tr>
        </table>
        <p style="padding-top: 10pt;text-indent: 0pt;text-align: left;"><br /></p>
        <p style="padding-left: 8pt;text-indent: 0pt;line-height: 1pt;text-align: left;" />
        @if($data['client_type']=='2')
        <h2 style="padding-top: 5pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">
            Section to be completed by the Applicant:</h2>
        @else
        <h2 style="padding-top: 5pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">
            Section to be completed by the Homeowner:</h2>
        @endif
        <p style="padding-left: 0pt;text-indent: 0pt;text-align: left;">(Please note this declaration must be signed by
            the
            applicant)</p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <h2 style="padding-left: 0pt;text-indent: 0pt;text-align: left;">
            @if($data['client_type']=='2') {{ 'Applicant Declaration'  }}
            @else
            {{ 'Homeowner Declaration'  }}
            @endif
        </h2>
        <table style="border-collapse:collapse; margin:0 auto; width:100%" cellspacing="0">
            <tr style="height:80pt">
                <td
                style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt; padding:5pt"
                    colspan="18">
                    <p class="s1" style="text-indent: 0pt;text-align: left;">I declare that I am the owner of this
                        premises
                        and that the works detailed overleaf have been completed to my satisfaction. I confirm that I
                        have
                        paid the contractor in full or entered an agreed payment schedule contract for the works
                        described.
                        I understand that where my total expenditure is less than the fixed grant amount then the lower
                        amount will be the grant payment.</p>
                    <p class="s1" style="text-indent: 0pt;line-height: 13pt;text-align: left;">I understand that all
                        works
                        may be inspected by SEAI or its agents. I undertake to facilitate any reasonable request to
                        conduct
                        the inspection / audit process.</p>
                </td>
            </tr>
            <tr style="height:29pt">
                <td colspan="1"
                style= "border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#D9D9D9">
                    <p class="s1" style="padding-top: 1.5pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Name
                        (CAPITALS)</p>
                </td>
                <td colspan="9"
                    style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br />{{ $data['owner_name'] ?? '' }}</p>
                </td>
                <td colspan="2"
                style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#D9D9D9">
                    <p class="s1" style="padding-top: 8pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Date</p>
                </td>
                <td colspan="6"
                    style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br />{{ $data['owner_date'] ?? '' }}</p>

                </td>
            </tr>
            <tr style="height:34pt">
                <td colspan="1"style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#D9D9D9">
                    <p class="s1" style="padding-top: 10pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Signed:
                    </p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    colspan="17">
                    @if(isset($data['owner_sign']) && strpos($data['owner_sign'], 'base_document') !== false)
                    <img src="{{ config('envoirment.IMAGE_API_PATH') . $data['owner_sign'] }}" alt="">
                    @else
                    <p style="text-indent: 0pt;text-align: left; font-size:16px; padding-bottom:2pt"><br />{{ $data['owner_sign'] ?? '' }}</p>
                    @endif
                </td>
            </tr>
        </table>
        <h3 style="padding-top: 13pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">NOTE:</h3>
        <p style="padding-left: 0pt;text-indent: 0pt;text-align: left;">This Declaration of Works form should be
            returned
            with all other completed documents relating to this application. If any form is incomplete or missing, then
            the
            request for payment will be returned.</p>
    </div>

</body>

</html>

