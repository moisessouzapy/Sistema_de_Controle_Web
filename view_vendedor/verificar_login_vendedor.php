<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: vendedor.php');
	exit();
}