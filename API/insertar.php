<?php  

include 'conn.php';

$depart = $_POST["departamentos"];   
$ciud = $_POST["minucipios"];   
$nomb = $_POST["nombre"];   
$emai = $_POST["email"]; 

if (isset($_POST['enviar'])) {
	


//echo "$depart";
//echo "$ciud";
//echo "$nomb";
//echo "$emai";

$insertar = mysqli_query($conn, "INSERT INTO contacts (name, email, state, city) VALUES ('".$nomb."','".$emai."','".$depart."','".$ciud."')");

$consulta = "SELECT  * FROM contacts";
    $resultado = mysqli_query($conn,$consulta);
    $table = mysqli_fetch_all($resultado);

 //print_r($table);

}





?>
