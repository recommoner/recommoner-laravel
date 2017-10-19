<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body class=""
      style="background-color: #f6f6f6;font-family: sans-serif;-webkit-font-smoothing: antialiased;font-size: 14px;line-height: 1.4;margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
<table border="0" cellpadding="0" cellspacing="0" class="body"
       style="margin-top:20px;border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;background-color: #f6f6f6;">
    <tr>
        <td style="font-family: sans-serif;font-size: 16px !important;vertical-align: top;">&nbsp;</td>
        <td class="container"
            style="font-family: sans-serif;font-size: 16px !important;vertical-align: top;display: block;max-width: 580px;padding: 0 !important;width: 100% !important;margin: 0 auto !important;">
            <div class="content"
                 style="box-sizing: border-box;display: block;margin: 0 auto;max-width: 580px;padding: 0 !important;">

                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader"
                      style="color: transparent;display: none;height: 0;max-height: 0;max-width: 0;opacity: 0;overflow: hidden;mso-hide: all;visibility: hidden;width: 0;font-size: 16px !important;">{{$name}} has submitted a new Article '{{$title}}'. Please click on button
                                            below to approve the article.</span>
                <table class="main"
                       style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;background: #ffffff;border-radius: 0 !important;border-left-width: 0 !important;border-right-width: 0 !important;">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper"
                            style="font-family: sans-serif;font-size: 16px !important;vertical-align: top;box-sizing: border-box;padding: 10px !important;">
                            <table border="0" cellpadding="0" cellspacing="0"
                                   style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;">
                                <tr>
                                    <td style="font-family: sans-serif;font-size: 16px !important;vertical-align: top;">
                                        <p style="font-family: sans-serif;font-size: 16px !important;font-weight: normal;margin: 0;margin-bottom: 15px;">
                                            Hi,</p>
                                        <p style="font-family: sans-serif;font-size: 16px !important;font-weight: normal;margin: 0;margin-bottom: 15px;">
                                            {{$name}} has submitted a new Article '{{$title}}'. Please click on button
                                            below to approve the article.</p>
                                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary"
                                               style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;box-sizing: border-box;">
                                            <tbody>
                                            <tr>
                                                <td align="left"
                                                    style="font-family: sans-serif;font-size: 16px !important;vertical-align: top;padding-bottom: 15px;">
                                                    <table border="0" cellpadding="0" cellspacing="0"
                                                           style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100% !important;">
                                                        <tbody>
                                                        <tr>
                                                            <td style="font-family: sans-serif;font-size: 16px !important;vertical-align: top;background-color: #ff6600;border-radius: 5px;text-align: center;">
                                                                <a href="{{url('articles/'.$id . '/0')}}"
                                                                   target="_blank"
                                                                   style="color: #ffffff;text-decoration: none;background-color: #ff6600;border: solid 1px #ff6600;border-radius: 5px;box-sizing: border-box;cursor: pointer;display: inline-block;font-size: 16px !important;font-weight: bold;margin: 0;padding: 12px 25px;text-transform: capitalize;border-color: #ff6600;width: 100% !important;">Click
                                                                    to Approve</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p style="font-family: sans-serif;font-size: 16px !important;font-weight: normal;margin: 0;margin-bottom: 15px;">
                                            Good luck! Hope it works.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>

</body>
</html>