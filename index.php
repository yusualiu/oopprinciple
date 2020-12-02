<?php

// Abstract class provides a template or base for any subclass.
class AchievementType{
  public function name(){
    $class = (new ReflectionClass())->getShortName();
  }
  public function icon(){

  }
}

class FirstThousandPoint{

  public function name(){
    return 'First Thousand Points';
  }

  public function icon(){
    return 'first-thousand-points.png';
  }

  public function qualifier($user){

  }

}

class FirstBestAnswer{
  public function name(){
    return 'First Best Answer';
  }

  public function icon(){
    return 'first-best-answer.png';
  }

  public function qualifier($user){

  }
}