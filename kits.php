<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    <form action="res.php" method="POST" >
        
        <input type="text" name="Adresas"> Įveskite adresą: <br>
<input type="radio" name="Lytis" value ="Moteris"> Moteris <br>
<input type="radio"name="Lytis" value ="Vyras"> Vyras <br>
<input type="radio" name="Seimos_Statusas" value ="Vedęs (-usi)"> Vedęs (-usi) <br>
<input type ="radio" name ="Seimos_Statusas" value ="Nevedęs (-usi)"> Nevedęs (-usi) <br>
<input type ="radio" name ="Seimos_Statusas" value ="Našlys (-ė)"> Našlys (-ė) <br>
               
        <input type="hidden" name="slaptukas" value=<?php echo "slapta info" ?>>
        <input type="submit" name="submit" value="Toliau">
        <input type="reset" name="reset" value="Išvalyti ŠIĄ VISĄ FORMĄ">
    </form>

 


<?php              
print_r($_POST);
// duomenu ikelimas i db.
$link=mysqli_connect("localhost","root","","vart_reg");
$sql="INSERT INTO pagr (Vardas, Pavarde, E_P, Tel_Nr) VALUES  ('".$_POST["Vardas"]."', '".$_POST['Pavarde']."', '".$_POST["E_P"]."', '".$_POST["Tel_Nr"]."')"; 
mysqli_query($link, $sql);
if (mysqli_errno($link)) {
    echo mysqli_error($link);
}
?>
        
        
    </body>
</html>
