<?php
include('verificar_login_vendedor.php');
include('../view/header.php');
?>

<body id="vendedor">
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
                    <a href="/view_gerente/gerente.php" class="nav-link px-0"><i class="fas fa-user-alt"></i> <span class="d-none d-sm-inline">Gerente</span></a>
                  </li>
                  <li>
                    <a href="/view_vendedor/vendedor.php" class="nav-link px-0"><i class="far fa-user"></i> <span class="d-none d-sm-inline">Vendedor</span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fas fa-compass"></i> <span class="ms-1 d-none d-sm-inline">Navegação</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
              <li>
                <a href="rota/cadastrar_produto.php" class="nav-link px-0 align-middle">
                <i class="fa fa-clipboard"></i> <span class="ms-1 d-none d-sm-inline">Página de Cadastrar</span> </a>
                  <a href="rota/tela_vendas.php" class="nav-link px-0 align-middle">
                  <i class="fa fa-basket-shopping"></i><span class="ms-1 d-none d-sm-inline">Página de Vendas</span> </a>
                  <a href="rota/ultimas_vendas.php" class="nav-link px-0 align-middle">
                  <i class="fas fa-book"></i> <span class="ms-1 d-none d-sm-inline">Página de Últimas Vendas</span> </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown pb-4">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">Vendedor</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="logout_vendedor.php">Sair</a></li>
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
            <a href="/view_vendedor/rota/ultimas_vendas.php">
                <h5 class="card-title center">Ultimas vendas</h5>
                <img src="../img/ultimasvendas.jpg" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        <div class="hvr-float-shadow card bg-transparent" style="width: 20rem;">
            <a href="/view_vendedor/rota/cadastrar_produto.php">
                <h5 class="card-title center">Cadastrar</h5>
                <img src="../img/cadastrar.png" class="card-img-center" alt="...">
                <div class="card-body">
            </a>
            </div>
        </div>
        <div class="hvr-float-shadow card bg-transparent" style="width: 18rem;">
            <a href="/view_vendedor/rota/tela_vendas.php">
                <h5 class="card-title center">Tela de vendas</h5>
                <img src="../img/vendas.png" class="card-img-center" alt="...">
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