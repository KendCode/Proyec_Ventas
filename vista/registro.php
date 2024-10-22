<?php
session_start();

/*$produc1 = $_POST['produc1'];



echo "COMPRASTE ".$produc1;*/

//$produc1 = $_POST['producto1'];
//$produc1 = isset($_POST['producto']) ? implode(', ', $_POST['producto']) : '';
//echo "tu: $produc1";
//echo " $produc1 <br>";

$intereses = isset($_POST['producto']) ? implode(', ', $_POST['producto']) : '';

echo "Intereses: $intereses <br>";
?>
