<?php

class Team{
 protected $name;
 protected $members = [];
  public function __construct($name,$members=[]){
    $this->name = $name; 
    $this->members = $members; 
  }
  public static function start(...$params){
    return new Static(...$params);
  }
  public function add($name){
    $this->members[] = $name;
  }
  public function cancel(){

  }
  public function name(){
    return $this->name;
  }
  public function members(){
    return $this->members;
  }
}

class CoffeeMaker{
  public function brew(){
    var_dump('Brewing the coffee');
  }
}
class SpecialtyCoffeeMaker extends CoffeeMaker{
  public function brewLatte(){
    var_dump('Brewing a Latte');
  }
}

(new SpecialtyCoffeeMaker())->brew();


// $acme = new Team('Acme',[
// 'Frank','Desmond'
// ]);
$acme= Team::start('Acme',[
  'Frank','Desmond']);
$acme->add('John Doe');
$acme->add('Jefferey Way');

var_dump($acme->members());