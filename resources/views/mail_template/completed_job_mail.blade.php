<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on Munster Solar</title>
</head>
<body style="background: #f4f4f4;">

<!--module-->
<table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody>
        <tr>
            <td bgcolor="#F4F4F4" align="center">
                <!--container-->
                <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0"
                    cellpadding="0" border="0" align="center">
                    <tbody>
                        <tr>
                            <td bgcolor="#ffffff" align="center">
                                <!--wrapper-->
                                <table class="row" style="width:540px;max-width:540px;" width="540"
                                    cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td class="container-padding" align="center">
                                                <!-- content container -->
                                                <table class="row" style="width:540px;max-width:540px;"
                                                    width="540" cellspacing="0" cellpadding="0" border="0"
                                                    align="center">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center">
                                                                <!-- content -->
                                                                <table style="width:100%; max-width:100%;"
                                                                    width="100%" cellspacing="0" cellpadding="0"
                                                                    border="0" align="center">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td height="40">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 20px;color: #282828;font-weight: 500;"
                                                                                align="center">Dear Admin</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td height="20">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td
                                                                                style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 22px;">
                                                                                I hope this message finds you well.
                                                                                <br>
                                                                                <br>
                                                                                We are pleased to inform you that Job Order {{ $jobOrder->order_id ?? '' }} has been successfully completed by @if(isset($jobOrder->staff))[{{ $jobOrder->staff->name }} {{ $jobOrder->staff->staff_id }}] @endif. <br>
                                                                                Below are the details of the completed job order:
                                                                                <br>
                                                                                <br>
                                                                                Job Order Details: <br>
                                                                                <strong>Job Order ID:</strong> {{ $jobOrder->order_id ?? '' }}<br>
                                                                                <strong>Client Name:</strong> @if(isset($jobOrder->client->name)){{ $jobOrder->client->name }} @endif<br>
                                                                                <strong>Assigned Staff:</strong> @if(isset($jobOrder->staff->name)) {{ $jobOrder->staff->name }} @endif<br>
                                                                                <strong>Assigned Date:</strong> {{ $jobOrder->date ?? '' }}<br>
                                                                                <strong>Date Completed:</strong> {{ $jobOrder->completed_date ?? '' }}<br>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="20">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>

                                                                        </tr>
                                                                        <tr>
                                                                            <td height="40">&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0"align="center">
    <tbody>
        <tr>
            <td bgcolor="#F4F4F4" align="center">
                <!--container-->
                <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0"
                    cellpadding="0" border="0" align="center">
                    <tbody>
                        <tr>
                            <td bgcolor="#589af3" align="center">
                                <!--wrapper-->
                                <table class="row" style="width:540px;max-width:540px;" width="540"
                                    cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td class="container-padding" align="center">
                                                <!-- content container -->
                                                <table class="row" style="width:540px;max-width:540px;"
                                                    width="540" cellspacing="0" cellpadding="0"
                                                    border="0" align="center">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center">
                                                                <!-- content -->
                                                                <table style="width:100%; max-width:100%;"
                                                                    width="100%" cellspacing="0"
                                                                    cellpadding="0" border="0"
                                                                    align="center">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td height="40">&nbsp;</td>
                                                                        </tr>



                                                                        <tr>
                                                                            <td height="20">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #fff;line-height: 19px"
                                                                                align="center">
                                                                                <br>
                                                                                For any questions please send to
                                                                                <a href="mailto:{{ env('mail_from_address') ?? '' }}">{{ env('mail_from_address') ?? '' }}</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>&nbsp;</td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
