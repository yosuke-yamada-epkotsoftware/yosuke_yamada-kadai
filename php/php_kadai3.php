<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>php_kadai3</title>
</head>
<body>
  <?php
  echo '(1)<br/>';
  $i = rand(0, 2);
  echo 'じゃんけん<br/>';
  if($i === 0) {
    echo 'グー';
  } elseif($i === 1) {
   echo 'チョキ';
  } else {
    echo 'パー';
  }
  echo '<br/>';
  echo '<br/>';

  echo '(2)<br/>';
  $i = rand(0,100);
  $score = $i <50 ? '50以下ですよ' : '50以上ですよ';
  echo $score;

  echo '<br/>';
  echo '<br/>';

  echo '(3)<br/>';
  $num = rand(1, 4);
  switch($num){
    case 1:
      echo '1です';
      break;
    case 2:
      echo '2です';
      break;
    case 3:
      echo '3です';
      break;
    case 4:
      echo '4です';
  }

  echo '<br/>';
  echo '<br/>';

  echo '(4)<br/>';
  $num = rand(1, 4);
  switch($num){
    case 1:
      echo '1です';
    case 2:
      echo '2です';
    case 3:
      echo '3です';
    case 4:
      echo '4です';
  }

  echo '<br/>';
  echo '<br/>';

  echo '(5)<br/>';
  $num = rand(1, 6);
  switch($num){
    case 1:
      echo '1です';
      break;
    case 2:
      echo '2です';
      break;
    case 3:
      echo '3です';
      break;
    case 4:
      echo '4です';
      break;
    default:
    echo 'エラーです';
  }
  echo '<br/>';
  echo '<br/>';

  echo '(6)<br/>';
  ?>
  <?php
  $num = rand(1, 4);
  switch($num):
  case 1: ?><p>1です</p><?php break; ?>
    <?php case 2: ?><p>2です</p><?php break; ?>
    <?php case 3: ?><p>3です</p><?php break; ?>
    <?php case 4: ?><p>4です</p><?php break; ?>
    <?php endswitch; ?>
  <?php
  echo '<br/>';

  echo '(7)<br/>';
  $num = 0;
  while($num <=10) {
    echo $num . '回目のループです。<br/>';
    $num++;
  }

  echo '<br/>';
  echo '<br/>';

  echo '(8)<br/>';
  $num = 0;
  do{
    echo $num . '回目のループです。<br/>';
    $num++;
  } while($num <= 10);

  echo '<br/>';
  echo '<br/>';

  echo '(9)<br/>';
  for ($counter = -3; $counter < 10; $counter++) {
    if ($counter === 0) {
      break;
    }
    echo 100 / $counter;
  }

  echo '<br/>';
  echo '<br/>';

  echo '(10)<br/>';
  for ($counter = -3; $counter < 10; $counter++) {
    if ($counter === 0) {
      continue;
    }
    echo 100 / $counter;
  }
  ?>
</body>
</html>