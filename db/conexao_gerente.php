<?php
define('HOST', '127.0.0.1');
define('GERENTE', 'root');
define('SENHA', '');#gerente123 ou moises123
define('DB', 'login');
 
$conexao = mysqli_connect(HOST, GERENTE, SENHA, DB) or die ('Não foi possível conectar');