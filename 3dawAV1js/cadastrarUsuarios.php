<?php
/**/
$servidor = "localhost";
$user = "root";
$pass = "";
$banco = "av1js";
$mensagem = "";
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $usuarios = $_POST["usuarios"];

    $conn = new mysqli ($servidor, $user, $pass, $banco);

    $coluna = explode(";", file_get_contents($_FILES['filename']['tmp_name']));
    for ($x = 0; $x < sizeof($coluna); $x += 5) {
        $y = $x + 1;
        $z = $x + 2;
        $w = $x + 3;
        $a = $x + 4;
        $sql = "INSERT INTO `usuarios` (`nome`, `email`, `senha`,`tipo`,`perfil`) VALUES ('$coluna[$x]','$coluna[$y]','$coluna[$z]','$coluna[$w]','$coluna[$a]')";
        $result = $conn->query($sql);

        echo $result;
        echo $sql;
        if ($result = true) {
            $mensagem = "Usuarios Cadastrados";
        } else {
            $mensagem = "DEU RUIM!😭😭";
        }
    }
    echo $mensagem;
}
?>