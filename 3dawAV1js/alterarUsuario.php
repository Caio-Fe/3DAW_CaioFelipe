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
        $email= $_GET["email"];
        $senha= $_GET["senha"];
        $tipo= $_GET["tipo"];
        $perfil= $_GET["perfil"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql= "UPDATE usuarios SET nome = '". $nome ."', email = '" .$email. "', senha = '" .$senha. "', tipo = '" .$tipo. "', perfil = '" .$perfil. "' WHERE id = '" . $id. "' ";

        $result=$conn->query($sql);

        $i = 0;

        if ($result=true){
            $retorno=json_encode("Usuario foi Alterado");

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>