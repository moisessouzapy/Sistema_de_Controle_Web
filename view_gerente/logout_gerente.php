<?php
session_start();
session_destroy();
header('Location: gerente.php');
exit();
?>