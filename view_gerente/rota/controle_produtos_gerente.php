<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/controle_table_gerente.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/8411fef42f.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>

<body>
<div class="carrosel container-fluid px-0">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <span class="fs-5 d-none d-sm-inline">Menu</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
              <li>
                <a href="../painel_gerente.php" class="nav-link px-0 align-middle">
                <i class="fab fa-500px"></i> <span class="ms-1 d-none d-sm-inline">Home gerente</span></a>
              </li>
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
                <a href="consulta_pedidos_gerente.php" class="nav-link px-0 align-middle">
                <i class="fas fa-search-dollar"></i> <span class="ms-1 d-none d-sm-inline">Página de Consulta</span> </a>
                  <a href="controle_produtos_gerente.php" class="nav-link px-0 align-middle">
                  <i class="fas fa-file-invoice"></i> <span class="ms-1 d-none d-sm-inline">Página de Controle</span> </a>
                  <a href="tela_gerencial_gerente.php" class="nav-link px-0 align-middle">
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
                <li><a class="dropdown-item" href="../logout_gerente.php">Sair</a></li>
              </ul>
            </div>
          </div>
        </div>
            <div class="col py-3">
                <h1>Controle de Produtos</h1>
                <hr>
                <?php
                include '../../db/conexao_produtos.php';
                $result = $db->find()->toArray();
                ?>
                <table class="table_controle">
                    <thead>
                        <tr id="header">
                            <th>id</th>
                            <th>Produto</th>
                            <th>Fornecedor</th>
                            <th>Custo do Produto</th>
                            <th>Valor de Venda</th>
                            <th>Quantidade</th>
                            <th>Data do cadastro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $value) : ?>

                            <tr>
                                <td><?php echo substr($value->_id, -5); ?></td>
                                <td><?php echo $value->nome; ?></td>
                                <td><?php echo $value->fornecedor; ?></td>
                                <td><?php echo "R$ " . number_format(floatval(str_replace(",", ".", $value->custoProduto)), 2, ',', ''); ?> </td>
                                <td><?php echo "R$ " . number_format(floatval(str_replace(",", ".", $value->valorVenda)), 2, ',', ''); ?></td>
                                <td><?php echo $value->estoque; ?></td>
                                <td><?php echo $value->data ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>