<?php
/**/
$servidor = "localhost";
$user = "root";
$pass = "";
$banco = "avdois3daw";
$retorno = "";
if($_SERVER["REQUEST_METHOD"]=="GET")
{

    $id = $_GET["id"];
    $estadoDeAluguel= "Alugado";
    $cliente = $_GET["cliente"];
    $aluguel =$_GET["aluguel"];

    $conn = new mysqli ($servidor, $user, $pass, $banco);
    $sql= "UPDATE veiculos SET estadoDeAluguel = '" .$estadoDeAluguel. "', cliente = '" .$cliente. "', aluguel = '" .$aluguel. "' WHERE id = '" . $id. "' ";

    $result=$conn->query($sql);

    $i = 0;

    if ($result=true){
        $retorno=json_encode("Alugado com Sucesso");

    } else {
        $retorno=json_encode("DEU RUIM!😭😭");
    }
}
echo $retorno;
?>