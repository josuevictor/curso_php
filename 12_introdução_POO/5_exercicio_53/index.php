 <?php
 class Cachorro{

    function latir()
    {
        echo "Au Au";
    }

    function andar($metros)
    {
        echo "O cachorro andou $metros metros <br>";
    }

 }

 $caramelo = new Cachorro;
 $pug = new Cachorro;

 $caramelo->latir();
 $pug->latir();

 $caramelo->andar(1000);
 $pug->andar(50);