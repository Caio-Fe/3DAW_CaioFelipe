<?php
/**/
$servidor = "localhost";
$user = "root";
$pass = "";
$banco = "av1js";
$mensagem = "";
if($_SERVER["REQUEST_METHOD"]=="POST") {

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
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrar Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Cadastrar Usuarios</h1>
<pre>
    Documento de texto: dados separados por ponto-e-virgula, ultimo dado do arquivo sem ponto-e-virgula.
        exemplo: nome1;email1;senha1;tipo1;perfil1;
                 nome2;email1;senha1;tipo1;perfil2
</pre>
<br>
<ul>
    <li><a href="cadastrarDisciplina.html">Cadastrar disciplina</a></li>
    <li><a href="listarDisciplinas.html">Listar todas as disciplinas</a></li>
    <li><a href="listarDisciplina.html">Listar uma Disciplina</a></li>
    <li><a href="cadastrarUsuarios.php">Cadastrar Usuarios por arquivo</a></li>
    <li><a href="listarUsuarios.html">Listar todos os usuarios</a></li>
    <li><a href="listarUsuario.html">Listar um usuario</a></li>
</ul>
<br>
<form enctype="multipart/form-data" action="cadastrarUsuarios.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input type="file" name="filename">
    <input type="submit" value="Enviar Usuarios do Arquivo">
</form>
<!-- javascript puro, sem framework não lida com arquivo diretamente, aparentemente. -->
</body>
</html>
