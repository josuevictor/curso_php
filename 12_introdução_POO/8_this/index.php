<?php 

class Animal{
    public $nome;

    function escolherNome($nome)
    {
        $this->nome = $nome;
    }

    function latir()
    {
        return 'Au Au';
    }

    function latirForte()
    {
        return strtoupper($this->latir());
    }
}

$cachorro = new Animal;

echo "o nome do animal é: $cachorro->nome <br>";

$cachorro->escolherNome('toto');

echo "o nome do animal é: $cachorro->nome <br>";

echo $cachorro->latir();
echo $cachorro->latirForte();

