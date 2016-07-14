<?php
function pageController() {
var_dump($_GET);
    $data = array();
    if(isset($_GET['number'])) {
        $data['number'] = $_GET['number'];
    } else {
        $data['number'] = 0;
    };

    return $data;
};

extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>Come Get Some</title>
</head>
<body>
    <h1>Counter: <?= $number ?></h1>
    <p>
        <a href="?number=<?= $number + 1 ?>"  name="Up">Up</a>
    </p>
    <p>
        <a href="?number=<?= $number - 1 ?>" name="Down">Down</a>
    </p>

</body>
</html>

