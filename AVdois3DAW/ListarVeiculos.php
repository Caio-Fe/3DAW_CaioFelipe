<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "avdois3daw";
    $retorno = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `veiculos`";
        $result=$conn->query($sql);
        $arrVeiculos[] = array();
        $i = 0;
        While ($linha = $result->fetch_assoc()){
            $arrVeiculos[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($arrVeiculos);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>
