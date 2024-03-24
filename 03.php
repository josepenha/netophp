<?php
$nome = "José";
$sobrenome = "Penha";
$idade = 13;
$numero = 10;
$mediaIdade = 30;

//echo $idade . "<br>";
echo $nome . " ".$sobrenome. "e a sua idade é ".$idade;

$total = $idade + $numero;
echo "<p>".$total;

//Tomadas de Decisão IF
if($idade > $mediaIdade){
  echo "<p> Idade maior que $mediaIdade";
  }else if ($idade == 27) { 
    echo "<p> Idade igual a 27 anos";
    }else{
      echo "<p> Idade não é maior que ".$mediaIdade." e também não é igual a 27 anos. <p>";
    }
  //aula 9 do curso de PHP 8.0


  //aula 10 Laços de Repetição

  for($i=0;$i < $numero; $i++){
    echo "<br> o valor de i é ".$i;
  }
 //i = initial. Poderia ser x, contador, etc.
?>
