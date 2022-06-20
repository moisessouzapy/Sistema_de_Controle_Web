<?php 
session_start();
include ('conexao_vendedor.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../view_vendedor/vendedor.php');
	exit();
}
 
//$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
//$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$result = $db->findOne([
	'usuario' => "{$usuario}",
	'senha' => "{$senha}"
]);
 
//$query = "select vendedor_id, usuario from vendedor where usuario = '{$usuario}' and senha = md5('{$senha}')";
 
//$result = mysqli_query($conexao, $query);
 
//$row = mysqli_num_rows($result);
 
if(empty($result)) {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../view_vendedor/vendedor.php');
	exit();

} else {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../view_vendedor/painel_vendedor.php');
	exit();

}