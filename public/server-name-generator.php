<?php

    $adjectives = ['Angry', 'Steadfast', 'Draconian', 'Belligerent', 'Trustworthy', 'Depressed', 'Bamboozled', 'Persistent', 'Majestic', 'Scrawny'];
    $nouns = ['Silverback', 'Penguin', 'Goose', 'Lion', 'Berserker', 'Oracle', 'Warlock', 'Jester', 'Ruler', 'Accountant' ];
    function randomElement($array) {
        $number = mt_rand(0,9);
        return $array[$number];
    }
//    randomElement($adjectives);
//    randomElement($nouns);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Random Name Generator</title>
</head>
<body>
<h1>Look it's your new name!</h1>
<ol>
    <h1><?= randomElement($adjectives) . " " . randomElement($nouns) ?></h1>

</ol>
</body>
</html>
