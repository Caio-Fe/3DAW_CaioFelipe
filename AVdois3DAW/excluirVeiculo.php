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

    $conn = new mysqli ($servidor, $user, $pass, $banco);

    $sql = "DELETE FROM veiculos WHERE id = '" .$id. "' ";

    $result=$conn->query($sql);

    $i = 0;

    if ($result=true){
        $retorno=json_encode("Veiculo Apagado");

    } else {
        $retorno=json_encode("DEU RUIM!😭😭");
    }
}
echo $retorno;
?>