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
    
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }
        $coluna = explode(";", file_get_contents($_FILES['filename']['tmp_name']));
        for($x = 0;$x<sizeof($coluna);$x+=5){
            $y=$x+1; 
            $z=$x+2; 
            $w=$x+3; 
            $a=$x+4;
            $sql = "Insert into usuario (`nome`, `email`, `senha`,`tipo`,`perfil`) VALUES ('$coluna[$x]','$coluna[$y]','$coluna[$z]','$coluna[$w]','$coluna[$a]')";
            $conn->query($sql);
        }
    }

?>
<h1>Criar Usuarios</h1>
<pre>Documento de texto: dados separados por ponto-e-virgula, ultimo dado do arquivo sem ponto-e-virgula.
        exemplo: nome1;email1;senha1;tipo1;perfil1;
                 nome2;email1;senha1;tipo1;perfil2</pre>
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

<form enctype="multipart/form-data" action="criarUsuarios.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> 
    <input type="file" name="filename">
    <input type="submit" value="Enviar Usuarios do Arquivo">
</form>

<br>
</body>
</html>
