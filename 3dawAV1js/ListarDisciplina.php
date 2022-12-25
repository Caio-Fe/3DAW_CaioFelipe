<?php
/**/
$servidor = "localhost";
$user = "root";
$pass = "";
$banco = "av1js";
$retorno = "";
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $id= $_GET["id"];

    $conn = new mysqli ($servidor, $user, $pass, $banco);
    $sql="SELECT * FROM `disciplinas` WHERE id = '" . $id. "' ";
    $result=$conn->query($sql);
    $arrDisciplina[] = array();
    $i = 0;
    while ($linha = $result->fetch_assoc()){
        $arrDisciplina[$i] = $linha;
        $i++;
    }

    if ($result=true){
        $retorno=json_encode($arrDisciplina);
    }
    else {
        $retorno=json_encode("DEU RUIM!😭😭");
    }
}
echo $retorno;
?>
