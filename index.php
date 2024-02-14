<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naslovna stranica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

    </header>
    
    <main>

        <div>
        <img src="logo.svg" alt="Logo">
        
        </div>
        

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

        ?>


        

        

        <a  href="unos.php"><button class="posebni">Novi klijent</button></a>

        <table>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Datum/vrijeme</th>
                <th>e-mail</th>
                <th>Broj mobitela</th>
                <th>Adresa</th>
                <th></th>
            </tr>

            <?php

        $sql = NULL;
        $sql = "SELECT * FROM klijent";
        if($sql != NULL){
            $result = mysqli_query($link, $sql);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else{
            die("Nije uspjelo dohvaćanje iz baze");
        }

        foreach($rows as $row):?>
            <tr>
                <td><?=$row['id']  ?></td>
                <td><?=$row['ime']  ?></td>
                <td><?=$row['prezime']  ?></td>
                <td><?= date("d.m.Y G:i", strtotime($row['datum_vrijeme']))   ?></td>
                <td><?=$row['email']  ?></td>
                <td><?=$row['broj_mobitela']  ?></td>
                <td><?=$row['adresa']  ?></td>
                <td>
                    <!--<form id="uredivanje" action='uredi.php?id="<?php echo $row['id']; ?>"' method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        </form>
                        <button type="submit" value="submit" name="submit" form="uredivanje" id="uredibutton">Uredi</button>-->
                        <a href="uredi.php?id=<?php echo $row['id']; ?>"><button id="uredibutton">Uredi</button></a>
                    <form id="brisanjee" action='obrisi.php?id="<?php echo $row['id']; ?>"' method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        </form>
                        <button type="submit" form="brisanjee" id="obrisibutton" name="button">Obriši</button>
                </td>
            </tr>

            
            <?php endforeach; ?>
        </table>
    </main>

    <footer>

    </footer>

</body>
</html>