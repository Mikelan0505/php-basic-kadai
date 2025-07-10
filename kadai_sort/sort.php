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

    //Step2: 配列のソートに使える標準関数
    //昇順⇒sort、降順⇒rsortを使用。

    // Step3: ソート関数を定義
    function sort_2way($array, $order) {
      if ($order) {
        echo '昇順にソートします。<br>';
        sort($array); // 昇順
      } else {
        echo '降順にソートします。<br>';
        rsort($array); // 降順
      }

      // 結果を1行ずつ表示
      foreach ($array as $value) {
        echo $value . '<br>';
      }
    }

    // Step5: 関数を呼び出し（TRUEなら昇順）
    sort_2way($nums, true);
    echo '<hr>';
    sort_2way($nums, false);
  ?>
</body>
</html>
