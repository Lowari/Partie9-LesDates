<?php

setlocale(LC_TIME, ['fr']);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>

<body>

    <p>Nous sommes le : <?php echo strftime("%A %d %B %Y"); ?></p>

</body>

</html>