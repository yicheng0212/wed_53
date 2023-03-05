<?php
session_start();
$_SESSION["veri"]=rand(10000,99999);
echo $_SESSION["veri"];
?>