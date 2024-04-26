<?php


class Car {
    protected $targa;
    private $num_telaio;

    public function __construct($_targa,$_num_telaio){
        $this->targa=$_targa;
        $this->num_telaio=$_num_telaio;
    }

    protected function getNumTelatio()
    {
        return $this->num_telaio;
    }
}
    
class Fiat extends Car {
    protected $nome;
    protected $license;
    protected $color;
    public function __construct($_targa,$_num_telaio,$_name){
        parent::__construct($_targa,$_num_telaio);
        $this->nome=$_name;
    }
    public function printFinal(){
        echo "La mia macchina è {$this->nome}, con targa {$this->targa} e numero di {$this->getNumTelatio()}.\n";
    }
}

$myAuto= new Fiat("ND 123 OJ","1234","Opel");
$myAuto->printFinal();

