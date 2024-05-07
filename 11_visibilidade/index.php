<?php

class Car {

    public $rodas = 4;
    private $vidro = "sem película";
    protected $portas = 4;

    public function getVidro()
    {
        return $this->vidro . "<br>";
    }

    public function getportas()
    {
        return $this->portas;
    }

}

class Mecanico{
    public function alteraRodas($carro)
    {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula)
    {
        $carro->vidro = $pelicula;
    }

}

$carro = new Car;

echo $carro->rodas . "<br>"; 

$victor = new Mecanico;

$victor->alteraRodas($carro);

echo $carro->rodas . "<br>"; 

//Nao pode alterar pq é privado 
//$victor->colocarPelicula($carro, "G20 ");

echo $carro->getVidro();
echo $carro->getportas();