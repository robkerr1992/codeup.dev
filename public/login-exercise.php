<?php
function authorization ($username, $password) {
    if ($username === 'guest' && $password === 'password' ) {
        header('Location: authorized.php');
        exit('Authorized');
    } else {
        header('Location: nope.php');
        exit('Nice try, hombre.');
    }

}
var_dump($_POST);


if ($_POST) {
    authorization($_POST['username'], $_POST['password']);
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

    <form method="POST" action="login-exercise.php">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <input type="submit">
    </form>

</body>
</html>