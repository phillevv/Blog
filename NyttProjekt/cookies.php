
<?php
//Sätter cookie för att acceptera cookies

$cookie_name = "user";
$cookie_value = "userse";
setcookie($cookie_name, $cookie_value, 2147483647, "/");

header("location:index.php");
?>