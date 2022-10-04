<?php
$ehPost = true;
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "daw20222manha";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nome = $_GET["nome"];
    $idDisciplina = $_GET["idDisciplina"];
    $periodo = $_GET["periodo"];
    $idPreRequisito = $_GET["idPreRequisito"];
    $creditos = $_GET["creditos"];

    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }
//INSERT INTO `alunos`(`id`, `nome`, `matricula`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4])
    $sql = "Insert into Alunos(`id`, `nome`, `matricula`, `email`) VALUES ($id, '$nome','$mat','$email')";
//    $result = $conn->query($sql);
    if (!$conn->query($sql)) {
        echo("Error description: " . $conn->error);
      }
    echo "result?: " . $result;
} else {
    $ehPost = false;
}
echo "aluno incluido";
?>

