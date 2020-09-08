<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

/*Start - CONEXÃO MySQLi PROCEDURAL*/
$servername = "localhost";
$username = "root";
$password = "caio1234";
$dbname = "medico_php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){die('Falha na conexão: '.mysqli_connect_error());}

mysqli_set_charset($conn,"utf8");
/*End - CONEXÃO MySQLi PROCEDURAL*/

?>