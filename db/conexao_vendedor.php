<?php
define('HOST', '127.0.0.1');
define('VENDEDOR', 'root');
define('SENHA', '');#vendedor123
define('DB', 'login');
 
$conexao = mysqli_connect(HOST, VENDEDOR, SENHA, DB) or die ('Não foi possível conectar');