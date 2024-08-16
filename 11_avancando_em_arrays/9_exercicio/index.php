<?php
//descontruindo elementos do array em variaveis
$pessoa = ["Victor", 24, "programador", "castanho"];

list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

echo $nome . PHP_EOL;
echo $idade . PHP_EOL;
echo $profissao . PHP_EOL;
echo $corDosOlhos . PHP_EOL;
