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
        $grupo = $_GET["grupo"];
        $modelo= $_GET["modelo"];
        $localizacao= $_GET["localizacao"];
        $estadoDeAluguel= $_GET["estadoDeAluguel"];
        $valor= $_GET["valor"];
        $cliente = $_GET["cliente"];
        $aluguel =$_GET["aluguel"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql= "UPDATE veiculos SET grupo = '". $grupo ."', modelo = '" .$modelo. "', localizacao = '" .$localizacao. "', estadoDeAluguel = '" .$estadoDeAluguel. "', valor = '" .$valor. "', cliente = '" .$cliente. "', aluguel = '" .$aluguel. "' WHERE id = '" . $id. "' ";


        $result=$conn->query($sql);

        $i = 0;

        if ($result=true){
            $retorno=json_encode("FUNCIONOU");

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>