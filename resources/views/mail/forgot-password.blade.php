<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('web/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('web/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('web/images/favicon/favicon-16x16.png') }}">

    <link rel="manifest" href="{{ asset('assets/media/logos/logo-2.svg') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,800&display=swap" rel="stylesheet">
    <title>Email Forgot Password</title>
</head>

<body style="font-family: 'Open Sans', sans-serif;margin: 0px;padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0;background-color: #ebeef3; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;">
    <table style="width: 600px; margin: 0px auto;">
        <tbody>
            <tr>
                <td style="padding-top: 50px; padding-bottom: 50px;">
                    <table style="width: 100%; ">
                        <tbody>
                            <tr>
                                <td style="padding: 20px;box-shadow: 0px 2px 4px rgba(0,0,0,0.16);background-color: #fff;">
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td style="padding-top: 0;padding-bottom: 20px;">
                                                    <div style="display: block; text-align: center;">
                                                        <h1 style="font-family: 'Signika', sans-serif;font-size:20px;font-weight: 500;color: #000000;margin:0;">
                                                            Change Password</h1>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 20px;background-color: #ecedef; ">
                                                    <table style="width: 100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-top: 0px;padding-bottom: 20px; width: 100%;">
                                                                    <table style="width: 100%;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="index.html" target="_blank" style="text-decoration:none;display: block; text-align: center;"><img src="{{ asset('images/3.png') }}" alt="" width="150" height="106" style="height: auto; display:block; border:none; outline:none; text-decoration:none; display: inline-block;"></a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table style="width: 100%;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="padding: 20px; background-color: #fff;border-left: 3px solid #f67611;border-radius: 4px;margin-bottom: 15px;">
                                                                                    <div style="display: block">
                                                                                        <p style="font-size:0.83rem;font-weight: 400;line-height: 20px;color: #637b96;margin:0;margin-bottom: 10px; letter-spacing: 0.5px;">
                                                                                            Dear, <strong> {{ $data->name }}
                                                                                            </strong></p>
                                                                                        <p style="font-size:0.83rem;font-weight: 400;line-height: 20px;color: #637b96;margin:0;margin-bottom: 10px; letter-spacing: 0.5px;">
                                                                                            Email: <a href="javascript:void(0);" target="_blank" style="display: inline-block;  color: #f67611; font-size:0.83rem;font-weight: 600;letter-spacing: 0.3px;">{{ $data->email }}</a>
                                                                                        </p>
                                                                                        <p style="font-size:0.83rem;font-weight: 400;line-height: 20px;color: #637b96;margin:0;margin-bottom: 10px; letter-spacing: 0.5px;">
                                                                                           Hiii {{ $data->name }} </p>
                                                                                           <p>There was a request to forgot your password!!
                                                                                               <br>
                                                                                               If you did not make this request then please ignore this email.
                                                                                               <br>
                                                                                               otherwise, please Enter below otp.
                                                                                           </p>
                                                                                        
                                                                                        <div>
                                                                                            <div style="text-align: center;">
                                                                                                <p style="font-size:0.90rem;font-weight: 600;line-height: 20px;color: #637b96;margin:0;margin-bottom: 10px; letter-spacing: 0.5px;">
                                                                                                    Change your email or forgot your password:
                                                                                                </p>
                                                                                                <label for="button-otp"></label>
                                                                                                <a id="button-otp" href="#" style="text-align: center;font-size: 14px;padding: 10px 30px;
                                                                                                    text-decoration: none; background-color: #f78125; border-radius: 6px;display: inline-block;margin: 0 auto;font-weight: 600;color: #fff;">OTP -
                                                                                                    {{$data->reset_token}}</a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <p style="font-size:0.90rem;font-weight: 600;line-height: 20px;color: #637b96;margin:0;margin-bottom: 5px; margin-top: 20px; letter-spacing: 0.5px;">
                                                                                            Regards, </p>
                                                                                        <p style="font-size:0.83rem;font-weight: 400;line-height: 20px;color: #637b96;margin:0;margin-bottom: 10px; letter-spacing: 0.5px;">
                                                                                            FASTER</p>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 100%; text-align: center;">
                                                                    <p style="font-size:14px;font-weight: 500;line-height: 20px;color: #292929;margin:0;margin-top: 10px;margin-bottom: 0px;">
                                                                        Copyright &copy; 2022. FASTER Logistics. All right
                                                                        reserved</p>
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