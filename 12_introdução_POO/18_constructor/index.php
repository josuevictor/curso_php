 <?php 

 class Carro {
    public $cor;
    public $marca;
    public $porta;

    function __construct($cor, $marca, $porta)
    {
        $this->cor   = $cor;
        $this->marca = $marca;
        $this->porta = $porta;
        
    }
 }

 $ferrari = new Carro('vermelha', 'f150', 4);

 echo "O carro da marca $ferrari->marca tem a cor $ferrari->cor";