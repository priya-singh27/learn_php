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
        <input type="submit" name="submit" value="submit"/>
    </form>
</body>
</html>

<?php 
  $nums= array(1,2,3,4);
  // foreach($nums as $num){
  //   echo "The num is: {$num} <br>";
  // }

  $capitals = array(
    "USA"=>"Washington D.C.",
   "Japan"=>"Kyoto", 
   "India"=>"New Delhi"
  );

  // foreach($capitals as $key => $value){
  //   echo"{$key} = {$value} <br>";
  // }

  echo $capitals["USA"];

  if(isset($_POST["submit"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];

    echo"You entered {$num1} and {$num2}<br>";
    echo"You tried to login";
  }

  /*  */
?>