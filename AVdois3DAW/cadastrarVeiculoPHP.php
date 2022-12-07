<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "avdois3daw";
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $grupo = $_GET["grupo"];
        $modelo= $_GET["modelo"];
        $localizacao= $_GET["localizacao"];
        $valor= $_GET["valor"];
        $estadoDeAluguel="Livre";
        $cliente = "Nenhum";
        $aluguel ="0";

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `veiculos`(`grupo`, `modelo`, `localizacao`,`valor`,`estadoDeAluguel`,`cliente`,`aluguel`) VALUES ('$grupo', '$modelo', '$localizacao','$valor','$estadoDeAluguel','$cliente','$aluguel')";
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
