<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av1js";
    $retorno = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `disciplinas`";
        $result=$conn->query($sql);
        $arrDisciplinas[] = array();
        $i = 0;
        While ($linha = $result->fetch_assoc()){
            $arrDisciplinas[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($arrDisciplinas);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>
