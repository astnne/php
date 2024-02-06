<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?php 
      $name = 'austin';
      echo $name." was echoed at ".date('Y-m-d H:i:s').'<br>';
      $list = [1,2,3];
      foreach ($list as $value) {
        echo $value.'<br>';
      }
    ?>
  </h1>
</body>
</html>