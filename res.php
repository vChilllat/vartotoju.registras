<?php
if (isset($_POST["slaptukas"])) {
print_r($_POST);
echo $_POST["Adresas"],
        $_POST["Lytis"],
        $_POST["Lytis"],
$_POST["Seimos_Statusas"],
$_POST["Seimos_Statusas"],
$_POST["Seimos_Statusas"];


} else {
echo "formos duomenys neivesti";
}
?>



<?php
print_r($_POST);
// duomenu ikelimas i db.
$link=mysqli_connect("localhost","root","","vart_reg");
$sql="INSERT INTO papild (Adresas, Lytis, Seimos_Statusas) VALUES ('".$_POST["Adresas"]."', '".$_POST["Lytis"]."', '".$_POST["Seimos_Statusas"]."')";     
mysqli_query($link, $sql);
if (mysqli_errno($link)) {
    echo mysqli_error($link);
}

$sql ="SELECT * from Pagr";

        // rezultatu spausdinimo budai
$resultSet=mysqli_query($link, $sql);

if ($resultSet) {
    while ($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC)) {
//        echo "<pre>";
//        print_r($row);
//        echo "</pre>";
        echo " vardas - " . $row["Vardas"] . " ir pavarde - " . $row["Pavarde"] . " . Toliau - el. pastas - " . $row["E_P"] . " , telefono numeris " . $row["Tel_Nr"];
        echo "<br>";
    }
}





$sql1="SELECT * from Papild";

$resultSet=mysqli_query($link, $sql1);

if ($resultSet) {
    while ($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC)) {
//        echo "<pre>";
//        print_r($row);
//        echo "</pre>";
        echo " Sekantys duom. - Adresas - " . $row["Adresas"] . " Lytis - " . $row["Lytis"] . " . Na, ir paskutiniai duomenys - Seimos statusas -   " . $row["Seimos_Statusas"];
        echo "<br>";
    }
}


        ?>