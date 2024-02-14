<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unos klijenta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Unos klijenta</h1>
    </header>

    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div>
                    <input id="ime" type="text" name="ime" placeholder="Ime" required>                  
                </div>
                <div>
                    <input id="prezime" type="text" name="prezime" placeholder="Prezime" required>                  
                </div>
                <div>
                    <input type="datetime-local" name="datum_vrijeme" id="datum_vrijeme" required>
                </div>
                <div>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                </div>
                <div>
                    <input type="text" name="broj_mobitela" id="broj_mobitela" placeholder="Broj mobitela" required>
                </div>
                <div>
                    <input id="adresa" type="text" name="adresa" placeholder="Adresa" required>                  
                </div>    

                <button type="submit" name="submit">Unos</button>

                       
        </form>
        
        <a  href="index.php"><button class="povratakButton">Povratak</button></a>         

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

        mysqli_select_db($link, 'klijent');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $pohrana ="INSERT INTO `klijent`(`ime`, `prezime`, `datum_vrijeme`, `email`, `broj_mobitela`, `adresa`) VALUES ('$_POST[ime]','$_POST[prezime]','$_POST[datum_vrijeme]','$_POST[email]','$_POST[broj_mobitela]','$_POST[adresa]')";

            if(!mysqli_query($link, $pohrana)){
                echo "<h2>Podaci nisu pohranjeni</h2>";
            }
            else{
                echo "<h2>Klijent je unesen.</h2>";
                header('location:index.php');
            }   

        }
        
        
        mysqli_close($link);
        ?>
        

    </main>
    
</body>
</html>