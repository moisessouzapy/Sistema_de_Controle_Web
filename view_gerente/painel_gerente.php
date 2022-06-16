<?php
include('verificar_login_gerente.php');
include('../view/header.php');
?>

<body id="gerente">
    <div class="topo_gerente">
        <h2 style="color:#fff;">Olá, <?php echo $_SESSION['usuario']; ?></h2>
    </div>
    <div class="card_block row col-md-12">
        <div class="hvr-float-shadow card bg-transparent" style="width: 20rem;">
            <a href="/view_gerente/rota/controle_vendas_gerente.php">
                <h5 class="card-title center">Controle de Venda</h5>
                <img src="../img/sell.png" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        <div class="hvr-float-shadow card bg-transparent" style="width: 23rem;">
            <a href="/view_gerente/rota/tela_gerencial_gerente.php">
                <h5 class="card-title center">Tela Gerencial</h5>
                <img src="../img/gerencia.png" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        <div class="hvr-float-shadow card bg-transparent" style="width: 20rem;">
            <a href="/view_gerente/rota/consulta_pedidos_gerente.php">
                <h5 class="card-title center">Consulta de Pedidos</h5>
                <img src="../img/pedido.png" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        </div>
    </div>
    <div class="sair center">
        <h2><a href="logout_gerente.php">Sair</a></h2>
    </div>
</body>

</html>