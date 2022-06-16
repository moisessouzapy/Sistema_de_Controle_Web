<?php
include('verificar_login_gerente.php');
include('../view/header.php');
?>

<body id="gerente">
    <div class="topo_gerente">
        <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
    </div>
    <div class="card_block row col-md-12">
        <div class="card bg-black" style="width: 18rem;">
            <a href="/view_gerente/rota/controle_vendas_gerente.php">
                <h5 class="card-title center">Controle de Venda</h5>
                <img src="https://images.unsplash.com/photo-1543286386-2e659306cd6c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        <div class="card bg-black" style="width: 18rem;">
            <a href="/view_gerente/rota/tela_gerencial_gerente.php">
                <h5 class="card-title center">Tela Gerencial</h5>
                <img src="https://images.unsplash.com/photo-1543286386-2e659306cd6c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        <div class="card bg-black" style="width: 18rem;">
            <a href="/view_gerente/rota/consulta_vendas_gerente.php">
                <h5 class="card-title center">Consulta de Vendas</h5>
                <img src="https://images.unsplash.com/photo-1543286386-2e659306cd6c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-center" alt="...">
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