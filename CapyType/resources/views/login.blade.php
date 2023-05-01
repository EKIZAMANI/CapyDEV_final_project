<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CapyType Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    </head>
<body style="background-color: #262A33;" class="font-mono">

<!-- awal navbar -->
@include('layouts.navbar')
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
 <!-- awal footer -->
 <div style="font-size: 20px">
    @include('layouts.footer')
 </div>
 
 <!-- akhir footer -->
</div>
</div>
</body>
</html>