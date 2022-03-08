<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create New Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/images/l-images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset ('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/login-cssutil.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login-css/main.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('/images/l-images/bg2.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form method="post" class="login100-form validate-form">
                    <span class="login100-form-title p-b-49">
                        Create Password
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="New Password is reauired">
                        <span class="label-input100">Create New Password</span>
                        <input class="input100" type="password" name="new password" id="newpasss" placeholder="Type new password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>

                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Match Password is reauired">
                        <span class="label-input100">Re-Enter New Password</span>
                        <input class="input100" type="password" name="new password" id="cpass" placeholder="Re-Enter new password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>

                    </div>
                    <script type="text/javascript">
                            function validate(){
                                var password = document.getElementById('newpass').value;
                                var confirmPassword = document.getElementById('cpass').value;

                                if(password != confirmPassword){
                                    alert('password do not match');
                                    return false;
                                }
                                return true;
                            }
                        </script>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Send OTP
                            </button>
                        </div>
                    </div>
                    <br>

                    <a href="{{url('signup')}}" class="txt2">
                        Sign Up
                    </a>
            </div>

            </form>
        </div>
    </div>
    </div>


    <!--===============================================================================================-->
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>