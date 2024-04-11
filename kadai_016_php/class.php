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
  echo $this->price;
  }
}

//インスタンス化する
$potato = new Food('potato',250);


print_r($potato);
echo '<br>';
$potato_price;
// echo '<br>';

class Animal{
  private $name;
  private $height;
  private $weight;

  function show_height(){
    echo $this->height;
  }
  function __construct(string $name, int $height, int $weight){
    $this->name = $name;
    $this->height= $height;
    $this->weight=$weight;
  }
}

$dog = new Animal('dog', 60, 5000);


print_r($dog);
echo '<br>';

// 「Food」クラスには「price」プロパティの値を出力する「show_price」メソッドを、「Animal」クラスには「height」 プロパティの値を出力する
// 「show_height」メソッドをそれぞれ作成
// ⇨出力するメソッドなのでreturnを使用せずに実装をしましょう！

$potato_price = $potato->show_price();
echo '<br>';

$dog_height = $dog->show_height();
echo '<br>';
