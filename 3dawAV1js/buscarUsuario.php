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
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `usuarios` where id='$id'";
        $result=$conn->query($sql);
        $linha = $result->fetch_assoc();
        $i = 0;

        if ($result=true){
            $retorno=json_encode($linha);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>