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
    $nome = $_POST["nome"];
    $idDisciplina = $_POST["idDisciplina"];
    $periodo = $_POST["periodo"];
    $idPreRequisito = $_POST["idPreRequisito"];
    $creditos = $_POST["creditos"];

    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }
    $sql = "UPDATE disciplina SET nome = ' $nome ', idDisciplina = $idDisciplina, periodo = $periodo, idPreRequisito = $idPreRequisito, creditos = $creditos WHERE idDisciplina = ".$idDisciplina;
    $conn->query($sql);
    if (!$conn->query($sql)) {
        echo("Error description: " . $conn->error);
        
      }
}
    
?>
<h1>Alterar Disciplina</h1>
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
<form action="alterarDisciplina.php" method=POST>
    nome: <input type="text" name="nome" ><br>
    idDisciplina: <input type="text" name="idDisciplina" ><br>
    periodo: <input type="number" name="periodo" ><br>
    idPreRequisito: <input type="text" name="idPreRequisito" ><br>
    creditos: <input type="text" name="creditos" ><br>
    <br><br>
    <input type="submit" value="Alterar">
</form>
</body>
</html>