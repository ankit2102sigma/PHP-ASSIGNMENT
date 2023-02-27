<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify Email</title>
</head>
<body>

<form method='POST'>
   <h2>Please Enter your email:</h2>
 <input type="text" name="email">
 <input type="submit" value="Submit Email">
 </form>
<?php
// pass valid/invalid emails
$email = $_POST['email'];

// Filter vaildate use to verify email ..  ..
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
     echo '"' . $email . '" = Valid'."\n";
}
else 
{
     echo '"' . $email . '" = Invalid'."\n";
}
?>
</body>
</html>