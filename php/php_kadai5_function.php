<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai5_function</title>
</head>
<body>
  <?php
  function add($num1, $num2) {
    $total_add = $num1 + $num2;
    $num1 = $total_add;
    return $num1;
  }

  function sub($num1, $num2) {
    $total_sub = $num1 - $num2;
    $num1 = $total_sub;
    return $num1;
  }

  function mul($num1, $num2) {
    $total_mul = $num1 * $num2;
    $num1 = $total_mul;
    return $num1;
  }

  function div($num1, $num2) {
    $total_div = $num1 / $num2;
    $num1 = $total_div;
    return $num1;
  }

  function add1(&$num1, &$num2) {
    $total_add1 = $num1 + $num2;
    $num1 = $total_add1;
    return $num1;
  }

  function sub1(&$num1, &$num2) {
    $total_sub1 = $num1 - $num2;
    $num1 = $total_sub1;
    return $num1;
  }
  function mul1(&$num1, &$num2) {
    $total_mul1 = $num1 * $num2;
    $num1 = $total_mul1;
    return $num1;
  }

  function div1(&$num1, &$num2) {
    $total_div1 = $num1 / $num2;
    $num1 = $total_div1;
    return $num1;
  }
  ?>
</body>
</html>