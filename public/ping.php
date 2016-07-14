<?php
function pageController()
{
    var_dump($_GET);
    $data = array();
    if (isset($_GET['count'])) {
        $data['count'] = $_GET['count'];
    } else {
        $data['count'] = 0;
    };

    return $data;
};
extract(pageController());
?>


<!DOCTYPE html>
<head>
    <title>Ping</title>
</head>
<body>
<h1>Number of Hits:<?= $count ?></h1>
<p>
    <a href="pong.php?count=<?= $count + 1 ?>">Hit</a>
</p>
<p>
    <a href="ping.php?count=0">Miss</a>
</p>

</body>
