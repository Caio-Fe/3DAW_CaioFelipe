<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idDisciplina = $_POST["idDisciplina"];

    $ehPost = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "daw20222manha";
    
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }
    $conn->query("DELETE FROM disciplina WHERE idDisciplina = ".$idDisciplina);
    }
?>
<h1>Excluir Disciplina</h1>
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
<form action="excluirDisciplina.php" method=POST>
    idDisciplina: <input type=text name="idDisciplina" ><br>
    <br><br>
    <input type="submit" value="Excluir">
</form>


</body>
</html>
