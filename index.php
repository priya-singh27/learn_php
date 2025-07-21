<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter number:</label><br>
        <input type="number" name="num1"/><br>
        <label>Enter number:</label><br>
        <input type="number" name="num2"/><br>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>

<?php 
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $total = $num1 + $num2;

  echo "Sum is {$total}"
?>