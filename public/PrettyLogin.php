<?php
session_start();
require_once '../src/Auth.php';
require_once '../Logger/Log.php';
require_once '../src/Input.php';

if(Auth::check()) {
    header('Location: authorized.php');
    exit();
};

if ($_POST) {
    Auth::attempt(Input::get('username'), Input::get('password'));
    if (Auth::check()) {
        header('Location: authorized.php');
        exit();
    } else {
        header('Location: nope.php');
        exit();
    }

};

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="site.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid login parallax-window" data-parallax="scroll" data-image-src="/img/moon2cropped.png">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-6">
            <div class="panel panel-login" id="blackpanel1">
                <div class="panel-heading" id="blackpanel2">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#"  style="color: green;" id="login-form-link">LogIn</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" style="color: green;" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="PrettyLogin.php" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input style="border: none;" type="text" name="username" id="username" tabindex="1" class="form-control greenInput" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input style="border: none;" type="password" name="password" id="password" tabindex="2" class="form-control greenInput" placeholder="Password">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label id="remember" for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="LogIn">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a style="color: green;" href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" action="PrettyLogin.php" method="post" role="form" style="display: none;">
                                <div class="form-group">
                                    <input style="border: none;" type="text" name="reg-username" id="username" tabindex="1" class="form-control greenInput" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input style="border: none;" type="email" name="reg-email" id="email" tabindex="1" class="form-control greenInput" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input style="border: none;" type="password" name="reg-password" id="password" tabindex="2" class="form-control greenInput" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input style="border: none;" type="password" name="reg-confirm-password" id="confirm-password" tabindex="2" class="form-control greenInput" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"
>
</script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/parallax.js-1.4.2/parallax.min.js"></script>
<script type="text/javascript" src="/js/homepage.js"></script>

</body>
</html>
