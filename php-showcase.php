<?php
interface IBarkable {
    public function Bark();
}

trait SmartDog {
    public function Think() {
        echo "If 2 + 2 equals 4, then I can get more bones just not hiding them.<br>";
    }
}

trait AverageDog {
    public function Think() {
        echo "I like bones.<br>";
    }
}

trait TotallyNotSmartDog {
    public function Think() {
        echo "I can hide all of my bones!<br>";
    }
}

class Dog implements IBarkable {
    use AverageDog;
    public function Bark() {
        echo "Bark-bark. ";
    }
}

class TemmyDog extends Dog {
    use TotallyNotSmartDog {
        TotallyNotSmartDog::Think as Think;
    }
    public function Bark() {
        echo "Hoi iM TeM. ";
    }
}

class JackDog extends Dog {
    use SmartDog {
        SmartDog::Think as Think;
    }
    public function Bark() {
        echo "Hello there! ";
    }
}

$DOGTYPES = ["TemmyDog", "Dog", "JackDog"];

$dogs = array();
for($i = 0; $i < 5; $i++){
    $dogname = $DOGTYPES[rand(0, count($DOGTYPES) - 1)];
    $dogs[] = new $dogname();
}

foreach($dogs as $dog) {
    $dog->Bark();
    $dog->Think();
}

?>