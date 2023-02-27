<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>
<form method='POST'>
   <h2>Please input your number:</h2>
 <input type="number" name="number">
 <input type="submit" value="Submit Number">
 </form>

 <?php
    $number = $_POST['number'];
    for($i=1;$i<=10;$i++){
        $mul = $i * $number;
        echo $number ."*". $i ."=". $mul ."<br>";
}

echo "<h3>  $fact </h3>";
?>
</body>
</html>