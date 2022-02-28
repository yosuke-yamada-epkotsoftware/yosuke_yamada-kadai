<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>php_kadai4</title>
</head>
<body>
  <?php
  echo '(1)<br/>';
  $week = array('月曜日', '火曜日', '水曜日', '木曜日', '金曜日');
  echo $week[2];

  echo '<br/>';
  echo '<br/>';

  echo '(2)<br/>';
  $x =[
    'water' => '水',
    'tea' => 'お茶',
    'coffee' => 'コーヒー',
    'juice' => 'ジュース'
  ];
  echo $x['coffee'];

  echo '<br/>';
  echo '<br/>';

  echo '(3)<br/>';
  $get_week = $week[1];
  $get_drink = $x['water'];
  echo $get_week . 'です。今' . $get_drink . 'を飲んでいます。';

  echo '<br/>';
  echo '<br/>';

  echo '(4)<br/>';
  $count_week = count($week);
  $count_x = count($x);
  echo $count_week;
  echo '<br/>';
  echo $count_x;
  echo '<br/>';
  echo '<br/>';

  echo '(5)<br/>';
  $human = [
      'taro' => [
        'age' => '17',
        'like' => 'orange',
      ],
      'hanako' => [
        'age' => '21',
        'like' => 'dog',
      ],
      'kazuo' => [
        'age' => '40',
        'like' => 'car',
      ],
    ];
    foreach($human as $key => $value) {
      echo $key . '。' . $value['age'] . '歳で、' . $value['like'] . 'が好きです。<br/>';
    }
  ?>
</body>
</html>