<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$ehPost = true;
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "daw20222manha";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arquivo = $_POST["filename"];
    
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }

    $usuariosArquivo = fopen("$arquivo.txt", "r") or die("Erro na abertura do arquivo");
    while (!feof($usuariosArquivo)) {
        $linhas[] = fgets($usuariosArquivo);
    }
    fclose($usuariosArquivo);
    foreach ($linhas as $linha) {
            $coluna = explode(";", $linha);
            //$txt = "$nome;$email;$senha;$tipo;$perfil\n";
            $sql = "Insert into usuario (`nome`, `email`, `senha`,`tipo`,`perfil`) VALUES ('$coluna[0]','$coluna[1]','$coluna[2]','$coluna[3]','$coluna[4]')";

    }
        $result = $conn->query($sql);
} else {
    $ehPost = false;
}
?>
<h1>Criar Usuarios</h1>
<br>
<a href="homeAV1.html">Pagina Inicial</a><br>
<a href="criarDisciplina.php">Criar Disciplina</a><br> <!-- formulario-->
<a href="alterarDisciplina.php">Alterar Disciplina</a><br> <!-- formulario-->
<a href="listarTodasDisciplinas.php">Listar todas as Disciplinas</a><br> <!-- formulario-->
<a href="listarUmaDisciplina.php">Listar uma Disciplina</a><br> <!-- formulario-->
<a href="excluirDisciplina.php">Excluir Disciplina</a><br> <!-- formulario-->
<a href="criarUsuarios.php">Criar Usuarios</a><br> <!-- a partir de arquivo, inserir no banco o conteúdo do arquivo-->
<a href="listarTodosUsuarios.php">Listar todos os Usuarios</a><br>
<br>
<form action="criarUsuarios.php" method=POST>
  <input type="file" id="myFile" name="filename">
  <input type="submit" value="Enviar Usuarios do Arquivo">
</form>

<br>
</body>
</html>