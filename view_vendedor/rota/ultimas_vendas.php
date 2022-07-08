<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/controle_table_vendedor.css">
  <title>Olhar ultimas vendas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8411fef42f.js" crossorigin="anonymous"></script>


  <!-- DATATABLES -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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
            <li class="nav-item">
              <a href="../painel_vendedor.php" class="nav-link align-middle px-0">
              <i class="fab fa-500px"></i> <span class="ms-1 d-none d-sm-inline">Home vendedor</span>
              </a>
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
                <a href="cadastrar_produto.php" class="nav-link px-0 align-middle">
                <i class="fa fa-clipboard"></i> <span class="ms-1 d-none d-sm-inline">Página de Cadastrar</span> </a>
                  <a href="tela_vendas.php" class="nav-link px-0 align-middle">
                  <i class="fa fa-basket-shopping"></i><span class="ms-1 d-none d-sm-inline">Página de Vendas</span> </a>
                  <a href="ultimas_vendas.php" class="nav-link px-0 align-middle">
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
                  <li><a class="dropdown-item" href="../logout_vendedor.php">Sair</a></li>
                </ul>
              </div>
        </div>
      </div>
      <div class="col py-3">
        <h1>Ultimas vendas</h1>
        <hr>
        <?php
        include '../../db/conexao_pedidos.php';
        include '../../db/functions.php';
        $result = $db->find()->toArray();
        ?>

        <table class="table_ultimas">
          <thead>

            <tr id="header_ultimas">
              <th>Código do Pedido</th>
              <th>Produtos</th>
              <th>Valor</th>
              <th>Data</th>
              <th>Apagar</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($result as $value) : ?>
              <tr>
                <td> <?php echo substr($value->_id, -5); ?> </td>
                <td>
                  <?php foreach ($value->venda as $infoVenda) : echo "{$infoVenda->qnt} x {$infoVenda->prod_nome} <br>";
                  endforeach; ?>
                </td>
                <td><?php echo "R$ " . number_format(floatval($value->valor), 2, ',', ''); ?></td>
                <td><?php echo $value->data ?></td>
                <td>
                  <a class=" btn btn-danger" href="?delete=<?php echo $value->data; ?>">APAGAR</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>

  <?php
  if (!empty($_GET)) {
    if (!empty($_GET['delete'])) {
      if (apagarPedido($_GET['delete'])) { ?>

        <script language='javascript'>
          swal.fire({
            icon: "success",
            text: "Feito com Sucesso!",
            type: "success"
          }).then(okay => {
            if (okay) {
              window.location.href = "ultimas_vendas.php";
            }
          });
        </script>
      <?php } else { ?>
        <script language='javascript'>
          swal.fire({
            icon: "error",
            text: "Ops! Ouve um erro.",
            type: "success"
          }).then(okay => {
            if (okay) {
              window.location.href = "ultimas_vendas.php";
            }
          });
        </script>
  <?php }
    }
  } ?>
</body>

</html>