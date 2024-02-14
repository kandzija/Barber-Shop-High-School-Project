<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ažuriranje</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	defined('DB_HOST') or define('DB_HOST', 'localhost');
    defined('DB_USER') or define('DB_USER', 'root');
    defined('DB_PASS') or define('DB_PASS', '');
    defined('DB_NAME') or define('DB_NAME', 'marko_sokcevic');
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $charset = mysqli_set_charset($link, 'utf8');

    if(!$link){
        echo "<h2>Neuspjesno povezivanje</h2>";
    }
	$id=$_GET['id'];
 
	$ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $datum_vrijeme = $_POST['datum_vrijeme'];
    $email = $_POST['email'];
    $broj_mobitela = $_POST['broj_mobitela'];
    $adresa = $_POST['adresa'];
 
	mysqli_query($link,"UPDATE `klijent` SET `ime`='$ime',`prezime`='$prezime',`datum_vrijeme`='$datum_vrijeme',`email`='$email',`broj_mobitela`='$broj_mobitela',`adresa`='$adresa' WHERE id = $id");
	header('location:index.php');
?>
</body>
</html>