<?php
session_start();
require_once '../src/Auth.php';
require_once '../Logger/Log.php';
require_once '../src/Input.php';


if(Auth::check()) {
    Auth::logout();
    header("Location: PrettyLogin.php");
    exit();
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
</head>
<body>

<h1>You're not logged in yet.</h1>

</body>
</html>