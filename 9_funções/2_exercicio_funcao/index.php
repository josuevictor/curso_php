<?php

function contaVogais($palavra)
{
    $arrayPalavra = str_split($palavra);
    for($cont = 0 ; $cont <= count($arrayPalavra) ; $cont++)
    {

    }

    if($arrayPalavra[$cont] = 'a')
    {
        echo '1 vogal';
    }
}

contaVogais("casa");

?>