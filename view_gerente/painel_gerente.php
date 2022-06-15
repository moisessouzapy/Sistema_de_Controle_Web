<?php
include('verificar_login_gerente.php');
include('../view/header.php');
?>

<body id="gerente">
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout_gerente.php">Sair</a></h2>
</body>
</html>
