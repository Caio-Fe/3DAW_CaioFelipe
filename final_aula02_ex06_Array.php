<?php

    $nomes = array("nome1", "nome2", "nome3", "nome4", "nome5", "nome6", "nome7", "nome8");
    $notas = array(1.1,2.2,3.3,4.4,5.5,6.6,7.7,8.8);
    /*
    // for each para imprimir array;
    foreach ($nomes as $nome) {
        echo "$nome <br>";
      }
      echo "<br><br><br>";
    
    // for para imprimir array; 
    for ($i=0; $i<sizeof($nomes);$i++)
    {
        echo "$nomes[$i] <br>";
        echo "$notas[$i] <br>";
    }

    */
    // Exercício passado no final da aula;
    echo   
    "
    <table>
            <tr>
                <th>Nomes</th>
                <th>Notas</th>
            </tr>
    ";

    for ($i=0; $i<sizeof($nomes);$i++)
    {
        echo
        "
        <tr>
            <td>$nomes[$i]</td>
            <td>$notas[$i]</td>
        </tr>
    ";
    }
    echo
    "
    </table>
    ";
?>