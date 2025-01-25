<?php

//function parent child
class car{
    public $model="";
    public function setModel($newval){
        $this->model=$newval;
    }

    public function getModel(){
        return "The car model is ".$this->model."<br>";
    }
}

class compact extends car{
    private $seat="0";
    public function setSeat($newval){
        $this->seat=$newval;
    }

    public function getSeat(){
        return"Number of seats is ".$this->seat."<br>";
    }
}

class mpv extends car{
    private $minSeat="0";
    private $maxSeat="7";
    public function setSeat($min,$max){
        $this->minSeat=$min;
        $this->maxSeat=$max;
    }

    public function getSeat(){
        return "Number of the seat is between ".$this->minSeat. " and ".$this->maxSeat."<br>";
    }
}

//car1
$car1=new compact;
$car1->setModel("Supra");
echo $car1->getModel();
$car1->setSeat("2");
$car1->getSeat();
echo $car1->getSeat();

//car2
$car2=new mpv;
$car2->setModel("Vios");
echo $car2->getModel();
$car2->setSeat(5,7);
echo $car2->getSeat();
?>