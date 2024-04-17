<?php
session_start();

session_destroy();

header("Location: page_au_defaut.php");

exit();
?>
