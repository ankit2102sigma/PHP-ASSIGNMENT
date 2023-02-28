<?php
function Palindrome($string){
     
    if ((strlen($string) == 1) || (strlen($string) == 0)){
        echo "Palindrome";
    }
 
    else{
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)){
            return Palindrome(substr($string,1,strlen($string) -2));
        }
        else{
            echo " Not a Palindrome"; }
    }
}
 
$string = "MEEM";
Palindrome($string);
?> 