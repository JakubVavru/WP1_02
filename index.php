<?php
//název proměnné
/*
$name = "Jakub Vávrů";
$gender = "Muž";
$school = "Základní škola Zásmuky";
$email = "jakub.vavru@student.ossp.cz";
$phone = "+420 776 542 345";
$hobby = "počítače, příroda, tůry, kreslení";
$birth = "6.1.2004"
*/

$name = "Michal Plaček";
$gender = "Muž";
$school = "Základní škola Kolín";
$email = "michal.placek@student.ossp.cz";
$phone = "+420 792 307 704";
$hobby = "počítače, motocross,";
$birth = "11.11.2003"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?= $name; ?></h1>

<li>Pohlaví</li>
<?= $gender; ?>

<li>Škola</li>
<?= $school; ?>

<li>email</li>
<?= $email; ?>

<li>Tel. Číslo</li>
<?= $phone; ?>

<li>Koníčky</li>
<?= $hobby; ?>

<li>Narození</li>
<?= $birth; ?>

</body>
</html>