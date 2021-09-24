<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 
  function add_five(&$value) {
    $value += 5;
   }
 
   $num = 2;
   add_five($num);
   echo $num;
  ?>
</body>
</html>