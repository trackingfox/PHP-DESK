<?php

session_start();
$_SESSION['name']="SHARIF ALI";
$_SESSION['degree']="BTECH";
echo $_SESSION['username'];
echo "<br>";
echo $_SESSION['degree'];
echo "<br>";
session_destroy();
echo $_SESSION['username'];

?>