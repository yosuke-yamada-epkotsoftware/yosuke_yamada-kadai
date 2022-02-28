<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai5</title>
</head>
<body>
  <?php
  echo '関数課題1<br/>';
  include('./php_kadai5_function.php');
  $sum = add(3, 5);
  echo $sum;
  echo '<br/>';
  $sum = sub(3, 5);
  echo $sum;
  echo '<br/>';
  $sum = mul(3, 5);
  echo $sum;
  echo '<br/>';
  $sum = div(15, 3);
  echo $sum;
  echo '<br/>';

  echo '関数課題2<br/>';
  $a = 30;
  $b = 20;

  echo add1($a, $b);
  echo '<br/>';

  echo sub1($a, $b);
  echo '<br/>';

  echo mul1($a, $b);
  echo '<br/>';

  echo div1($a, $b);
  echo '<br/>';
  ?>
</body>
</html>