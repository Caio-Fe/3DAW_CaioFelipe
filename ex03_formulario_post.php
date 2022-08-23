<?php
$matricula="";
$idade="";
$funcao="";
if($_SERVER["REQUEST_METHOD"]=="POST")
    {

	$matricula = $_POST["matricula"];
    $idade = $_POST["idade"];
    $funcao = $_POST["funcao"];
    }
    //echo $nome;
    //echo $idade;
    //echo $funcao;
    
?>

<!doctype html>
<html>
<head>
    <title>Ex03_Formulario_Post</title>
</head>
    <body>
        <h1>Ex03_Formulario_Post</h1>
    
        <form action="ex03_formulario_post.php" method="POST">
            matricula: <input type="text" name="matricula"> <br>
            idade: <input type="text" name="idade"> <br>
            funcao: <input type="text" name="funcao"> <br>
            <input type="submit" value="enviar">
            <br>
        </form>
    
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            echo 
            "
            matricula = $matricula
            <br>
            idade =   $idade
            <br>
            funcao =   $funcao
            ";
        }
        ?>

</body>
</html>

