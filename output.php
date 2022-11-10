<?php
print_r($_POST);
// duomenu ikelimas i db.
$link=mysqli_connect("localhost","root","","vart_reg");
$sql="INSERT INTO pagr VALUES ('".$_POST["Vardas"]."', '".$_POST['Pavarde']."', ('".$_POST["E. paštas"]."', ('".$_POST["Telefonas"]."')"; 
    mysqli_query($link, $sql);

$link=mysqli_connect("localhost","root","","vart_reg");
$sql="INSERT INTO papild VALUES ('".$_POST["address"]."', '".$_POST["Lytis"]."', '".$_POST["Lytis"]."', '".$_POST["Šeimyninis statusas"]."', '".$_POST["Šeimyninis stasusas"]."', '".$_POST["Šeimyninis statusas"]."')";     
mysqli_query($link, $sql);

