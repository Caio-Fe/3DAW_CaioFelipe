<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av1js";
    $retorno = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {
        $id = $_GET["id"];
        $nome = $_GET["nome"];
        $periodo= $_GET["periodo"];
        $idPreRequisito= $_GET["idPreRequisito"];
        $creditos= $_GET["creditos"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql= "UPDATE disciplinas SET nome = '". $nome ."', periodo = '" .$periodo. "', idPreRequisito = '" .$idPreRequisito. "', creditos = '" .$creditos. "' WHERE id = '" . $id. "' ";

        $result=$conn->query($sql);

        $i = 0;

        if ($result=true){
            $retorno=json_encode("Disciplina foi Alterada");

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>