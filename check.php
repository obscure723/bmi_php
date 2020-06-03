<?php

$height = $_POST['height'];
$weight = $_POST['weight'];

$bmi = $weight / ($height * $height);

$result = '';

if ($bmi < 18.5) {
  $result = '痩せ型';
} elseif ($bmi < 25) {
  $result = '普通';
} else {
  $result = '肥満';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>あなたのBMIは、<?= $bmi; ?></p>
  <p>あなたは、<?= $result; ?> です。</p>
</body>
</html>