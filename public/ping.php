<?php
require_once '../src/Input.php';
function pageController()
{
    var_dump($_GET);
    $data = array();
    $data['count'] = Input::get('count', 0);
    return $data;
};
extract(pageController());
?>

<!DOCTYPE html>
<head>
    <title>Ping</title>
</head>
<body>
<h1>Number of Hits:<?= (int)$count; ?></h1>
<a href="pong.php?count=<?= (int)($count + 1); ?>">Hit</a>
<a href="ping.php?count=0">Miss</a>
</body>

