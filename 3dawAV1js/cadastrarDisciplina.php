<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av1js";
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $periodo= $_GET["periodo"];
        $idPreRequisito= $_GET["idPreRequisito"];
        $creditos= $_GET["creditos"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `disciplinas`(`nome`, `periodo`, `idPreRequisito`,`creditos`) VALUES ('$nome', '$periodo', '$idPreRequisito','$creditos')";
        $result=$conn->query($sql);
        echo $result;
        echo $sql;
        if ($result=true){
            $mensagem="JOINHA!👍";
        } else {
            $mensagem="DEU RUIM!😭😭";
        }
    }
echo $mensagem;
?>
