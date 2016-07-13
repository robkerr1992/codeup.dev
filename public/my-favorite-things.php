<?php
    $favoriteThings = ['Money', 'Girls', 'Food', 'Music', 'Autonomy'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
<h1>My Favorite Things</h1>
<table>
    <?php foreach ($favoriteThings as $thing) : ?>
        <tr><td><?= $thing; ?></td></tr>
    <?php endforeach; ?>
</table>
</body>
</html>
