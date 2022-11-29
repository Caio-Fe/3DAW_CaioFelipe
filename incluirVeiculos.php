<?php
$localizacao = $_GET["localizacao"];
$modelo = $_GET["modelo"];
$categoria = $_GET["categoria"];
$estado = $_GET["estado"];
$aluguel = $_GET["aluguel"];
$valor = $_GET["valor"];

$servidor = "localhost";
$user = 'root';
$pass = '';
$banco = 'av23daw';
//$conn = new PDO('mysql:host=localhost;dbname=av23daw', $user, $pass);
$conn = new mysqli ($servidor, $user, $pass, $banco);
//$sql = "INSERT INTO carros VALUES ('$localizacao', '$modelo', '$categoria', '$estado', '$aluguel', '$valor')";
$sql="INSERT INTO `carros`(`localizazao`, `modelo`, `categoria`,`estado`,`aluguel`,`valor`) VALUES ('1', '1', '1','1','1','1')";

//$conn->query($sql);
$result=$conn->query($sql);
echo $result;
echo $sql;
if ($result=true){
    $mensagem="JOINHA!👍";
} else {
    $mensagem="DEU RUIM!😭😭";
}
?>