<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/controle_table_vendedor.css">
    <title>Cadastrar produtos</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/8411fef42f.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body">
    <?php
    include '../../db/functions.php';

    ?>
    <div class="carrosel container-fluid px-0">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <span class="fs-5 d-none d-sm-inline">Menu</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
              <li class="nav-item">
                <a href="/" class="nav-link align-middle px-0">
                  <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
              </li>
              <li>
                <a href="/" class="nav-link px-0 align-middle">
                  <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Não sei</span></a>
              </li>
              <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                  <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Perfis</span></a>
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
                  <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Informações</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
              <li>
                <a href="https://www.invertexto.com/levi" class="nav-link px-0 align-middle">
                  <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Contato</span> </a>
                  <a href="https://www.invertexto.com/levi" class="nav-link px-0 align-middle">
                  <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Quem somos</span> </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown pb-4">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">Perfis</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="../logout_vendedor.php">Sair</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col py-3">
                <h1>Tela de vendas</h1>
                <hr>
                <input value="Adicionar" class="btn btn-lg btn-primary center" type="button"></input>
                <input value="Excluir" class="btn btn-lg btn-primary center" type="button"></input>
                <hr>
                <table class="table_vendas">
                    <tr id="header">
                        <th>Produto</th>
                        <th>Codigo</th>
                        <th>Data</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                    </tr>
                    <tr>
                        <td><?php echo 'levi'; ?> </td>
                        <td>123 </td>
                        <td>01/22 </td>
                        <td>10R$ </td>
                        <td>1 </td>

                    </tr>
                    <tr>
                        <td>cleber </td>
                        <td>321 </td>
                        <td>01/22 </td>
                        <td>10R$ </td>
                        <td>2 </td>

                    </tr>
                    <tr>
                        <td>janael </td>
                        <td>123 </td>
                        <td>01/22 </td>
                        <td>10R$ </td>
                        <td>3 </td>

                    </tr>
                    <tr>
                        <td>vini </td>
                        <td>123 </td>
                        <td>01/22 </td>
                        <td>10R$ </td>
                        <td>4 </td>

                    </tr>
                    <tr>
                        <td>gustavo </td>
                        <td>123 </td>
                        <td>01/22 </td>
                        <td>10R$ </td>
                        <td>5 </td>

                    </tr>
                    <tr>
                        <td>erik </td>
                        <td>123 </td>
                        <td>01/22 </td>
                        <td>10R$ </td>
                        <td>6 </td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="col py-3">
            <h1>Tela de vendas</h1>
        <hr>
        <?php
                include '../../db/conexao_pedidos.php';
                $result = $db->find()->toArray();
                ?>
        <table>
                    <thead>
                        <tr id="header">
                            <th>Código do Pedido</th>
                            <th>Produtos</th>
                            <th>Valor</th>
                            <th>Data</th>
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
                                <td><?php echo $value->data?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
</body>


</html>