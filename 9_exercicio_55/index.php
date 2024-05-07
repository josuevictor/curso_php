<?php

class Carro{
    public  $cor = 'branco';
    public $modelo = '320i';
    public $velocidadeMaxima = 240;

    public function setVelocidade($velocidade)
    {
        $this->velocidadeMaxima = $velocidade;
    }

    public function getVelocidadeMaxima()
    {
        return $this->velocidadeMaxima;
    }
}

$bmw = new Carro;

echo $bmw->velocidadeMaxima  . PHP_EOL;

$bmw->setVelocidade(180);

echo "Reduziu para:" . $bmw->getVelocidadeMaxima();
