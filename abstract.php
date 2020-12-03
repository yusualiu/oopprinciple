<?php

// Abstract class provides a template or base for any subclass.
//abstract means no actual code, only signature no implementation
//You cannot instantiate an object from it.
abstract class AchievementType{
  public function name(){
    $class = (new ReflectionClass($this))->getShortName();
    return trim(preg_replace('/[A-Z]/',' $0',$class));
  }
  public function icon(){
    return strtolower(str_replace(' ','-',$this->name())).'.png';
  }

  abstract public function qualifier($user);
}

class FirstThousandPoint extends AchievementType{


  public function qualifier($user){

  }

}

class FirstBestAnswer extends AchievementType{
 

  public function qualifier($user){

  }
}

class ReachTop50 extends AchievementType{
  
}

$achievement = new ReachTop50();
// var_dump($achievement->name());
echo $achievement->qualifier('user');