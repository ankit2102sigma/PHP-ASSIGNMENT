<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong_check </title>
</head>
<body>
<form method="post">  
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>

  <?php  
 if($_POST)  
 {   

  $number = $_POST['number'];  
  $a = $number;  
  $sum  = 0;    
  while( $a != 0 )  
  {  
   $rem   = $a % 10; 
   $sum   = $sum + ( $rem * $rem * $rem );  
   $a   = $a / 10;   
  }  
 
  if( $number == $sum )  
  {  
   echo "Yes $number an Armstrong Number";  
  }else  
  {  
   echo "$number is not an Armstrong Number";  
  }  
 }  
?>    
</body>
</html>