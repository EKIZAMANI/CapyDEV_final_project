<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CapyType Login</title>
    <link href="{{ asset('assets/img/logocapy.png') }}" rel="icon">

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
            <div class="py-5 text-center col-12 align-self-center">
                <div class="pt-5 pb-5 text-center section pt-sm-2">
                                            <h6 class="pb-3 mb-0"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox"  id="reg-log"
                               name="reg-log"/>
                                        <label for="reg-log"></label>
                    <div class="mx-auto card-3d-wrap">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="text-center section">
                                        <h4 class="pb-3 mb-4">Log In</h4> <!-- login + auth -->
                                        <form action="/login" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-style form-control"
                                                       placeholder="Your Email" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="mt-2 form-group">
                                                <input type="password" name="password" class="form-style form-control"
                                                       placeholder="Your Password" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <input type="submit" class="mt-4 btn"/>
                                        </form>
                                        <br>
                                        <a href="https://capytype.com/forgot-password" style="color: #526777 ">Forgot Password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="text-center section">
                                        <h4 class="pb-3 mb-4">Sign Up</h4>
                                        <form action="/register" method="post"> <!-- register -->
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name"
                                                       class="form-style form-control "
                                                       placeholder="Your Full Name" autocomplete="off">
                                                <i class="input-icon uil uil-user"></i>
                                                                                                </div>
                                            <div class="mt-2 form-group">
                                                <input type="email" name="email"
                                                       class="form-style form-control "
                                                       placeholder="Your Email" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                                                                                </div>
                                            <div class="mt-2 form-group">
                                                <input type="email" name="Confregemail"
                                                       class="form-style form-control "
                                                       placeholder="Confirm Your Email" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                                                                                </div>
                                            <div class="mt-2 form-group">
                                                <input type="password" name="password"
                                                       class="form-style form-control "
                                                       placeholder="Your Password" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                                                                                </div>
                                            <input type="submit" class="mt-4 btn"/>
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
