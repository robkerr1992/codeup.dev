<?php
    $favoriteThings = ['Money', 'Girls', 'Food', 'Music', 'Autonomy'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
<h1>My Favorite Thingss</h1>
<table>
    <?php foreach ($favoriteThings as $thing) { ?>
        <tr><td><?php echo $thing; ?></td></tr>
    <?php } ?>
</table>
</body>
</html>
