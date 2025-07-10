<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <?php
    // Step4: ソート対象の配列
    $nums = [15, 4, 18, 23, 10];

    // Step2: PHPマニュアルで調べた sort / rsort を使う

    // Step3: ソート関数（第2引数で昇順/降順を切り替え）
    function sort_2way(array $array, bool $order): void {
      if ($order === true) {
        echo "昇順にソートします。<br>";
        sort($array); 
      } else {
        echo "降順にソートします。<br>";
        rsort($array); 
      }

      // 結果を表示
      foreach ($array as $value) {
        echo $value . "<br>";
      }
    }

    // Step5: 関数を呼び出す
    sort_2way($nums, true);  // 昇順
    echo "<hr>";
    sort_2way($nums, false); // 降順
  ?>
</body>
</html>



