<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Listar Uma Disciplina</h1>
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

<form action="listarUmaDisciplina.php" method=POST>
    idDisciplina: <input type=text name="idDisciplina" ><br>
    <br><br>
    <input type="submit" value="BuscarUmaDisciplina">
</form>

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
    $result = $conn->query("SELECT * FROM disciplina WHERE idDisciplina = ".$idDisciplina);
    
    $linha = $result->fetch_assoc();
    echo "<table>";
    echo"<tr><th>nome</th><th>idDisciplina</th><th>periodo</th><th>idPreRequisito</th><th>creditos</th></tr>";
    echo "<tr>";
    echo "<td>". $linha ["nome"]."</td>";
    echo "<td>". $linha ["idDisciplina"]."</td>";
    echo "<td>". $linha ["periodo"]."</td>";
    echo "<td>". $linha ["idPreRequisito"]."</td>";
    echo "<td>". $linha ["creditos"]."</td>";
    echo "</tr>";
    echo "</table>";
}
    
?>
<br>
</body>
</html>
