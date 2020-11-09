<?php
setcookie('rating','php',time()+5);
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>