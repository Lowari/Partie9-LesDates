<?php

$months = array(
   1 => 'Janvier',
   2 => 'Février',
   3 => 'Mars',
   4 => 'Avril',
   5 => 'Mai',
   6 => 'Juin',
   7 => 'Juillet',
   8 => 'Aout',
   9 => 'Septembre',
   10 => 'Octobre',
   11 => 'Novembre',
   12 => 'Décembre'
);

$startYears = 2015;
$endYears = 2025;

$numberDay = cal_days_in_month(CAL_GREGORIAN, $_GET['month'], $_GET['year']);
$startDay = strftime('%u', mktime(0, 0, 0, $_GET['month'], 1, $_GET['year']));

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Calendrier</title>
</head>

<body>

    <h1 class="text-center display-3">Calendrier</h1>

    <form action="index.php" method="GET">

        <div class="row justify-content-center mt-4">
            <div class="col-2">
                <select name="month" id="months" class="form-select">
                    <option class="text-center">Choisissez un mois</option>
                    <?php foreach ($months as $key =>$value) { ?>
                        <option value="<?= $key ?>"><?= $value ?> </option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-2">
                <select name="year" id="years" class="form-select">
                    <option>Choisissez une année</option>
                    <?php for ($startYears; $startYears <= $endYears; $startYears++) { ?>
                        <option><?= $startYears ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-1">
                <button type="submit" class="btn btn-success w-100">Valider</button>
            </div>
        </div>

    </form>

</body>

</html>