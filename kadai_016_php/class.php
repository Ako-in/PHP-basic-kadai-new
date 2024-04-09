<?php
class Food{
  // プロパティを定義する
  private $name;
  private $price;
  
  // コンストラクタで定義する
  function __construct(string $name, int $price){
    $this->name = $name;
    $this->price =$price;
  }
  // メソッドを定義する
  function show_price(){
  return $this->price;
  }
}

//インスタンス化する
$potato = new Food('potato',250);
$potato_price = $potato->show_price();

print_r($potato);
echo '<br>';
// echo $potato_price;
// echo '<br>';

class Animal{
  private $name;
  private $height;
  private $weight;

  function show_height(){
    return $this->height;
  }
  function __construct(string $name, int $height, int $weight){
    $this->name = $name;
    $this->height= $height;
    $this->weight=$weight;
  }
}

$dog = new Animal('dog', 60, 5000);
$dog_height = $dog->show_height();

print_r($dog);
echo '<br>';

echo $potato_price;
echo '<br>';

echo $dog_height;
echo '<br>';
