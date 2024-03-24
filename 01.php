<?php
$nome = "José";
$sobrenome = "Penha";
$idade = 43;
$numero = 10;
$mediaIdade = 30;

//echo $idade . "<br>";
echo $nome . " ".$sobrenome. "e a sua idade é ".$idade;

$total = $idade + $numero;
echo "<p>".$total;

//Tomadas de Decisão IF
if($idade > $mediaIdade){
  echo "<p> Idade maior que $mediaIdade";
  }else {
    echo "<p> Idade menor que $mediaIdade";
  }

?>
