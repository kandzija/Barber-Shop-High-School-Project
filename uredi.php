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
	$query=mysqli_query($link,"select * from `klijent` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uređivanje klijenta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Uređivanje</h1>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
                <div>
                    <input id="ime" type="text" name="ime" value="<?=$row['ime']  ?>" required placeholder="Ime">                  
                </div>
                <div>
                    <input id="prezime" type="text" name="prezime" value="<?=$row['prezime']  ?>" required placeholder="Prezime">                  
                </div>
                <div>
                    <input type="datetime-local" name="datum_vrijeme" id="datum_vrijeme" value="<?=$row['datum_vrijeme']  ?>" required placeholder="Datum/vrijeme">
                </div>
                <div>
                    <input type="email" name="email" id="email" value="<?=$row['email']  ?>" required placeholder="E-mail">
                </div>
                <div>
                    <input type="text" name="broj_mobitela" id="broj_mobitela" value="<?=$row['broj_mobitela']  ?>" required placeholder="Broj mobitela">
                </div>
                <div>
                    <input id="adresa" type="text" name="adresa" value="<?=$row['adresa']  ?>" required placeholder="Adresa">                  
                </div>  

        <button type="submit" name="submit">Unos</button>

		
	</form>
    <a href="index.php"><button class="povratakButton">Povratak</button></a>
</body>
</html>