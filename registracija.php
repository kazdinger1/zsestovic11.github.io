<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
</head>
<body>
    
<?php

$konekcija = mysqli_connect("localhost", "root", "", "login");

if(!$konekcija){
    die("Konekcija nije uspela.." . mysqli_connect_error());
}

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$email = $_POST['email'];
$sifra = $_POST['sifra'];

$upit = "INSERT INTO loginform (ime,prezime,email,sifra) VALUES('$ime','$prezime','$email','$sifra')";

if(mysqli_query($konekcija,$upit)){
    echo"Uspesno kreirano!";
}
else{ 
    echo "Greska..";
}
?>
</body>
</html>

