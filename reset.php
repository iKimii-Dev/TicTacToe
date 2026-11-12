<?php
session_start();
$_SESSION["board"] = array_fill(0, 9, "");
$_SESSION["turn"] = "X";
header("Location: game.php");
exit;
?>