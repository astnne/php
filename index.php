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
      require 'test.php';
      $newInstance = new Austin();
      echo $newInstance->name;
    ?>
  </h1>
</body>
</html>