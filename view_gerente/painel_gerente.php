<?php
include('verificar_login_gerente.php');
include('../view/header.php');
?>

<body id="gerente">
<div class="carrosel container-fluid px-0">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <span class="fs-5 d-none d-sm-inline">Menu</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
              <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                <i class="fas fa-address-card"></i> <span class="ms-1 d-none d-sm-inline">Perfis</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="/view_gerente/gerente.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Gerente</span></a>
                  </li>
                  <li>
                    <a href="/view_vendedor/vendedor.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Vendedor</span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fas fa-compass"></i> <span class="ms-1 d-none d-sm-inline">Navegação</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
              <li>
                <a href="/view_gerente/rota/consulta_pedidos_gerente.php" class="nav-link px-0 align-middle">
                <i class="fas fa-search-dollar"></i> <span class="ms-1 d-none d-sm-inline">Página de Consulta</span> </a>
                  <a href="/view_gerente/rota/controle_produtos_gerente.php" class="nav-link px-0 align-middle">
                  <i class="fas fa-file-invoice"></i> <span class="ms-1 d-none d-sm-inline">Página de Controle</span> </a>
                  <a href="/view_gerente/rota/tela_gerencial_gerente.php" class="nav-link px-0 align-middle">
                  <i class="fas fa-user-cog"></i> <span class="ms-1 d-none d-sm-inline">Página do Gerente</span> </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown pb-4">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://lh3.googleusercontent.com/a-/AOh14GiJuTO7JX-UzOh_WAmUB99IScqGRFqH1UExnbOD=s75-c" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">Gerente</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="logout_gerente.php">Sair</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col py-3">
        <div class="topo_gerente">
        <h2 style="color:#fff;">Olá, <?php echo $_SESSION['usuario']; ?></h2>
    </div>
    
    <div class="card_block">
        <div class="hvr-float-shadow card bg-transparent" style="width: 18rem;">
            <a href="/view_gerente/rota/controle_produtos_gerente.php">
                <h5 class="card-title center">Controle de produtos</h5>
                <img src="../img/sell.png" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        <div class="hvr-float-shadow card bg-transparent" style="width: 20rem;">
            <a href="/view_gerente/rota/tela_gerencial_gerente.php">
                <h5 class="card-title center">Tela Gerencial</h5>
                <img src="../img/gerencia.png" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        <div class="hvr-float-shadow card bg-transparent" style="width: 18rem;">
            <a href="/view_gerente/rota/consulta_pedidos_gerente.php">
                <h5 class="card-title center">Consulta de Pedidos</h5>
                <img src="../img/pedido.png" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        </div>
    </div>
        </div>
    </div>
</div>
    
</body>

</html>