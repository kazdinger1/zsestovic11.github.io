<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocetna</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/skripta.js"></script>

</head>
<body>

<div class = "slikaPrijava">

    <div class="container">
        <div class="topnav">     
          <a class="navi" href="index.php"> << Nazad na pocetnu</a>
        </div>   
      </div>

    <div class="stranicaLog">
        <div class=omotac>
            <p class="naslovPrijava">PRIJAVA</p>
            <form action="prijava.php" method="POST">
                <div class="forma">
                    <label for="email" >Email:</label>
                    <input type="email" name="email" placeholder="Unesite email">
                    <label for="sifra">Sifra:</label>
                    <input type="password" name="sifra" placeholder="Unesite sifru">
                    <br>
                    <input type="submit" id="dugmic" value="Potvrdi">
                </div>
            </form>
            <?php

            $konekcija = mysqli_connect("localhost","root", "", "login");

            if(!$konekcija){
                die("Konekcija nije uspela.." . mysqli_connect_error());
            }
            
            if(isset($_POST['email']) && isset($_POST['sifra'])){
            $email = $_POST['email'];
            $sifra = $_POST['sifra'];
            
            $upit = "SELECT * FROM loginform";
            
            $rezultat = mysqli_query($konekcija,$upit);
            
            while($red = mysqli_fetch_assoc($rezultat)){
                if($email==$red['email'] && $sifra==$red['sifra']){
                    echo "POGODAK!";
                    $_SESSION['ime']     = $red['ime'];
                    $_SESSION['prezime'] = $red['prezime'];
                    $_SESSION['ulogovan'] = true;
                    header("Location: indexKorisnik.php");
                }

            }
            echo "<script>alert('Nepostojeci korisnik!');</script>";
        }            
            ?>
        </div>
        
        <div class="omotac">
            <p class="naslovPrijava">REGISTRACIJA</p>
            <form action="registracija.php" method="POST">
                <div class="forma">
                    <label for="ime">Ime:</label>
                    <input type="text" name="ime" placeholder="Unesite ime">
                    <label for="prezime">Prezime:</label>
                    <input type="text" name="prezime" placeholder="Unesite prezime">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Unesite email">
                    
                    <label for="sifra">Sifra:</label>
                    <input type="password" name="sifra" placeholder="Unesite sifru"> 
                    <br>
                    <input type="submit" id="dugmic" value="Potvrdi">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>