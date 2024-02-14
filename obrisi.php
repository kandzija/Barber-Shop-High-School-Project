<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisanje klijenta</title>
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


$query = "DELETE FROM klijent WHERE id={$_POST['id']}";


mysqli_query ($link, $query);

if (mysqli_affected_rows($link) == 1) { 

?>

            <h2>Klijent je obrisan.</h2><br /><br />
    
<?php
 } else { 

?>
    
            <h2>Brisanje neuspješno.</h2><br/><br/>
    

            
<?php
 } 
    ?>
    <a href="index.php"><button class="povratakButton" >Povratak</button></a>
</body>
</html>