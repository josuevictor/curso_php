<?php

class Pessoa{

    public $idade = 24;

    public function falar()
    {
        echo "Olá Mundo!" . PHP_EOL;
    }

    private function gritar()
    {
        echo "PHP É MASSA!" . PHP_EOL;
    }

    /**
     * @return int
     */
    public function acessaGritar()
    {
        $this->gritar();
    }

    protected function falarBaixo()
    {
        echo  "lalalala";
    }
}

class  Programador extends Pessoa{
    public function acessaFalarBaixoProgramador()
    {
        return $this->falarBaixo();
    }
}

$alfredo = new Pessoa;

$alfredo->falar();
$alfredo->acessaGritar();

$victor = new Programador;

echo $victor->idade;
echo  $victor->acessaGritar();
echo $victor->acessaFalarBaixoProgramador();