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
                                                                                align="center">Dear {{ $data->name ?? '' }}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td height="20">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td
                                                                                style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 22px;">
                                                                                We hope this email finds you well. We are excited to have you on board and look forward to working together.
                                                                                <br>
                                                                                <br>

                                                                                Below are your login credentials to access Munster solar app:<br><br>
                                                                                <strong>Email:</strong> {{ $data->email ?? '' }}<br>
                                                                                <strong>Password:</strong> {{ $password ?? '' }}<br>
                                                                                <br>
                                                                                Please follow these steps to access your app account:
                                                                                <br>
                                                                                <br>
                                                                                Go to the play store/apple store & install the Munster solar app. <br>
                                                                                Enter your username & password as mentioned above.
                                                                                <br>
                                                                                <br>
                                                                                If you encounter any issues or have any questions, feel free to contact our support team at {{ env('mail_from_address') }}
                                                                                <br>
                                                                                <br>
                                                                                Thank you for being a part of Munster solar. We look forward to your active participation and success on our platform.
                                                                                <br>
                                                                                <br>
                                                                                Best regards,<br>
                                                                                Team Munster solar
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
                                                                                <a href="mailto:info@solar.com">info@solar.com</a>
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
