<?php
include('verificar_login_vendedor.php');
include('../view/header.php');
?>

<body id="vendedor">
<div class="topo_vendedor">
    <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
    <h2><a href="logout_vendedor.php">Sair</a></h2>
</div>
</body>
</html>
