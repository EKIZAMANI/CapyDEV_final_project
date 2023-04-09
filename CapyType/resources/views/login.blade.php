<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CapyType Login</title>
    <link href="{{ asset('assets/img/logocapy.png') }}" rel="icon"> 
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>
<body class="img js-fullheight" style="background-color: #262A33;">
<!-- Awal navbar -->
<header class="flex items-center justify-between mx-auto pt-5">
  <div class="flex items-center">
    <img src="{{asset('assets/img/logocapy.png')}}" class="mr-3" alt="CapyType Logo" width="65">
    <span class="text-3xl font-bold" style="color: #E5F7EF;">CapyType</span>
    <img src="{{asset('assets/img/keyboard.png')}}" class="ml-10 mr-3" alt="Keyboard Icon" width="54">
    <img src="{{asset('assets/img/crown.png')}}" class="mr-3" alt="Crown Icon" width="45">
    <img src="{{asset('assets/img/information.png')}}" class="mr-3" alt="Information Icon" width="35">
    <img src="{{asset('assets/img/setting.png')}}" class="mr-3" alt="Setting Icon" width="35">
</header>


    <!-- akhir navbar -->
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                                            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox"  id="reg-log"
                               name="reg-log"/>
                                        <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Log In</h4> <!-- login + auth -->
                                        <form action="https://capytype.com/auth" method="post">
                                            <input type="hidden" name="_token" value="">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-style form-control"
                                                       placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="password" class="form-style form-control"
                                                       placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <input type="submit" class="btn mt-4"/>
                                        </form>
                                        <br>
                                        <a href="https://capytype.com/forgot-password" style="color: #526777 ">Forgot Password ?</a>
                                    </div>
                                </div>
                            </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <form action="https://capytype.com/register" method="post"> <!-- register -->
                                                <input type="hidden" name="_token" value="">
                                                <input type="hidden" name="reeferal" value="">
                                                <div class="form-group">
                                                    <input type="text" name="reg_name"
                                                           class="form-style form-control "
                                                           placeholder="Your Full Name" id="logname" autocomplete="off">
                                                    <i class="input-icon uil uil-user"></i>
                                                                                                    </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="reg_email"
                                                           class="form-style form-control "
                                                           placeholder="Your Email" id="regemail" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                                                                    </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="Confreg_email"
                                                           class="form-style form-control "
                                                           placeholder="Confirm Your Email" id="regemail" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                                                                    </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="reg_password"
                                                           class="form-style form-control "
                                                           placeholder="Your Password" id="regpass" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                                                                    </div>
                                                <input type="submit" class="btn mt-4"/>
                                            </form>
                                        </div>
                                    </div>
                                 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
  <div class="footer-left"> <!-- Footer -->
    <a href="#" style="color: #526777 ">Contact us  <img src="{{ asset('assets/img/envelope.png') }}"></a>
    <a href="#" style="color: #526777 ">Discord  <img src="{{ asset('assets/img/discord.png') }}"></a>
    <a href="#" style="color: #526777 ">Telegram  <img src="{{ asset('assets/img/telegram.png') }}"></a>
    <a href="#" style="color: #526777 ">Support  <img src="{{ asset('assets/img/money.png') }}"></a>
  </div> 
</footer>
</div>
</div>
</body>
</html>