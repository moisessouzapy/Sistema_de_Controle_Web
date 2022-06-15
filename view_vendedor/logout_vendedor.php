<?php
session_start();
session_destroy();
header('Location: vendedor.php');
exit();
?>