<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題：クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>
<body>
<?php
// Foodクラスの定義
class Food {
  private $name;
  private $price;

  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function show_price() {
    echo $this->price . "<br>";
  }
}

// Animalクラスの定義
class Animal {
  private $name;
  private $height;
  private $weight;

  public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function show_height() {
    echo $this->height . "<br>";
  }
}

// インスタンスの作成
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

// オブジェクト出力
print_r($food);
echo "<br>";
print_r($animal);
echo "<br>";

// メソッドの呼び出し
$food->show_price();
$animal->show_height();
?>

</body>
</html>