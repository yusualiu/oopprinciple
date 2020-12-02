<?php

class Collection
{
  protected  $items;
  public function __construct( $items)
  {
    $this->items = $items;
  }

  public function sum($key){
    // return array_sum(array_map(function($item) use ($key){
    //   return $item->$key;
    // },$this->items)) ;

    return array_sum(array_column($this->items,$key));
  }





}

class Video{

  public $title;
  public $length;

  public function __construct($title,$length){
    $this->title = $title;
    $this->length = $length;

  }
}
class VideoCollection extends Collection{
  public function length(){
    return $this->sum('length');
  }
}

$videos = new VideoCollection([
  new Video('Some Video',100),
  new Video('Some Video 2',120),
  new Video('Some Video 3',300)
]);

echo $videos->length();
// echo $collection->sum('length');

