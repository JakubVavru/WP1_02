<?php
//název proměnné
$name = "Jakub Vávrů";
$gender = "Muž";
$school = "Základní škola Zásmuky";
$email = "jakub.vavru@student.ossp.cz";
$phone = "+420 776 542 345";
$hobby = "počítače, příroda, tůry, kreslení";
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
<h1><?php echo $name; ?></h1>

<li>Pohlaví</li>
<?php echo $gender; ?>

<li>Škola</li>
<?php echo $school; ?>

<li>email</li>
<?php echo $email; ?>

<li>Tel. Číslo</li>
<?php echo $phone; ?>

<li>Koníčky</li>
<?php echo $hobby; ?>

</body>
</html>