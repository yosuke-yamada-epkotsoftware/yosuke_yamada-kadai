<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>php_課題1</title>
</head>
<body>
  <?php
    echo '(1)<br/>';
    $string1 = 'ABC';
    $string2 = 'ABc';
    if(strcasecmp($string1,$string2)==0) {
      echo '一致しています。';
    }else{
      echo '一致していません。';
    }

    echo '<br/>';
    echo '<br/>';

    echo '(2)<br/>';
    echo 'こんにちは' . '山田陽亮です。';

    echo '<br/>';
    echo '<br/>';

    echo '(3)<br/>';
    echo 'こんにちは' . 4;

    echo '<br/>';
    echo '<br/>';

    echo '(4)<br/>';
    define('STRING', 'こんばんは');
    echo STRING . '<br/>';

    const STRING2 = 'こんにちは';
    echo STRING2;

    echo '<br/>';
    echo '<br/>';

    echo '(5)<br/>';
    echo '行番号は' . __LINE__ . 'です。' . '<br/>';
    echo 'ファイル名は' . __FILE__ . 'です。';

    echo '<br/>';
    echo '<br/>';

    echo '(6)<br/>';
    $num = 300;
    echo $num / 365;

    echo '<br/>';
    echo '<br/>';

    echo '(7)<br/>';
    $num = 100;
    $num++;
    echo $num;

    echo '<br/>';
    echo '<br/>';

    echo '(8)<br/>';
    $num = 100;
    $num--;
    echo $num;

    echo '<br/>';
    echo '<br/>';

    echo '(9)<br/>';
    //前置演算子
    $num = 10;
    echo ++$num . '<br/>';
    echo $num . '<br/>';
    echo '<br/>';

    //後置演算子
    $num = 10;
    echo $num++ . '<br/>';
    echo $num . '<br/>';

    echo '<br/>';
    echo '<br/>';

    echo '(10)<br/>';
    $x = 3;
    $y = 2;
    echo $x + $y;

    echo '<br/>';
    echo '<br/>';

    echo '(11)<br/>';
    $z = (string) 1234;
    var_dump($z);

    echo '<br/>';
    echo '<br/>';

    echo '(12)<br/>';
    $locations = 3 ;
    $c = 2 + $locations;
    print ($c);
  ?>
</body>
</html>