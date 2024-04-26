<?php
class Vertebrates{
    public function __construct(){
        $this->printSpecialization();
    }

    protected function printSpecialization(){
        echo "Sono un animale Vertebrato\n";
    }
   
}

class ColdBlooded extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->printSpecialization1();
    }

    protected function printSpecialization1(){
        echo "Sono un animale a Sangue Freddo\n";
    }
   
}

class WarmBlooded extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->printSpecialization1();
    }

    protected function printSpecialization1(){
        echo "Sono un animale a Sangue Caldo\n";
    }
   
}

class Bird extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        $this->printSpecialization2();
    }

    protected function printSpecialization2(){
        echo "Sono un uccello\n";
    }
   
}

class Mammals extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        $this->printSpecialization2();
    }

    protected function printSpecialization2(){
        echo "Sono un mammifero\n";
    }
   
}

class Fish extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        $this->printSpecialization2();
    }

    protected function printSpecialization2(){
        echo "Sono un pesce\n";
    }
   
}

class Reptiles extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        $this->printSpecialization2();
    }

    protected function printSpecialization2(){
        echo "Sono un rettile\n";
    }
   
}

class Amphibians extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        $this->printSpecialization2();
    }

    protected function printSpecialization2(){
        echo "Sono un anfibio\n";
    }
   
}

$magikarp = new Fish();