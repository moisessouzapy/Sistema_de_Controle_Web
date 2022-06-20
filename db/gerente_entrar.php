<?php 
session_start();
include ('conexao_gerente.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../view_gerente/gerente.php');
	exit();
}
 
//$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
//$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
 
//$query = "select gerente_id, usuario from gerente where usuario = '{$usuario}' and senha = md5('{$senha}')";
$result = $db->findOne([
	'usuario' => "{$usuario}",
	'senha' => "{$senha}"
]);
//$result = mysqli_query($conexao, $query);
 
//$row = mysqli_num_rows($result);

 
if(empty($result)) {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../view_gerente/gerente.php');
	exit();
} else {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../view_gerente/painel_gerente.php');
	exit();
}