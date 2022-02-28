<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>php_kadai2</title>
</head>
<body>
  <?php
  echo '(1)<br/>';
  echo 2 + 4 - 5 . '<br/>';
  echo 4 - 5 + 2 . '<br/>';
  echo '<br/>';
  echo 4 * 5 / 2 . '<br/>';
  echo 5 / 2 * 4;

  echo '<br/>';
  echo '<br/>';

  echo '(2)<br/>';
  echo 2 * 3 + 4 + 1 . '<br/>';
  echo 2 * (3 + 4 + 1);

  echo '<br/>';
  echo '<br/>';

  echo '(3)<br/>';
  echo '①<br/>';
  $username = "Admin";

  if ($username == "Admin") {
    echo ("Welcome to the admin page.");
  } else {
    echo ("Welcome to the user page.");
  }

  echo '<br/>';
  echo '②<br/>';
  echo '変数$usernameにAdmin以外を代入する。';

  echo '<br/>';
  echo '<br/>';

  echo '(4)<br/>';
  $arr = [200, 100, 150, 300, 500];
  $num = count($arr);
  for ($i = 0; $i < $num; $i++) {
    $value = $arr[$i];
    echo $value;
    echo '<br/>';
  }
  echo '<br/>';
  echo '<br/>';

  echo '(5)<br/>';
  $arr = [200, 100, 150, 300, 500];
  $num = count($arr);
  sort($arr);

  for ($i = 0; $i < $num; $i++) {
    $value = $arr[$i];
    echo $value;
    echo '<br/>';
  }

  echo '<br/>';
  echo '<br/>';

  echo '(6)<br/>';
 $student = [
    [
      'name' => '国語好き男',
      'age' => '10',
    ],
    [
      'name' => '理科好き子',
      'age' => '11',
    ],
    [
      'name' => '算数好き太郎',
      'age' => '15',
    ]
  ];
 //foreach文
  foreach($student as $key => $value) {
    echo $value['name'] . '、' .  $value['age'] . '歳です。' . '<br/>' ;
  }
  echo '<br/>';

  //while文
  $count = count($student);
  $i = 0;
   while($i < $count) {
     $value = $student[$i];
    echo  $value['name'] . '、' .  $value['age'] . '歳です。' . '<br/>' ;
    $i++;
   }
  ?>
</body>
</html>