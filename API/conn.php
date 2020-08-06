
<?php
$servername = "178.128.146.252";
$database = "admin_sigmatest";
$username = "admin_sigmauser";
$password = "pfaDKIJyPF";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo '<script language="javascript">alert("FALLO AL INTENTAR CONECTAR");</script>';
}
echo '<script language="javascript">alert("Bienvenido a SIGMA usuario: '. $username.' Sigma");</script>';



