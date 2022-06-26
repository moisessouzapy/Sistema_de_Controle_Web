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
    <script src="https://kit.fontawesome.com/8411fef42f.js" crossorigin="anonymous"></script>

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
                <h1>Cadastro de produtos</h1>
                <hr>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@cadastrar">Cadastrar produto</button>


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cadastrar produto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="?r=add">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nome:</label>
                                        <input type="text" class="form-control" id="nome" name="nome" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Fornecedor:</label>
                                        <input type="text" class="form-control" id="fornecedor" name="fornecedor" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Custo do Produto:</label>
                                        <input type="number" step="0.01" min="0.01" class="form-control" id="custoProduto" name="custoProduto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Valor de venda:</label>
                                        <input type="number" step="0.01" min="0.01" class="form-control" id="valorVenda" name="valorVenda" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Estoque:</label>
                                        <input type="number" min="1" value="1" class="form-control" id="Estoque" name="estoque" required>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Fechar">
                                        <input type="submit" class="btn btn-primary" value="Enviar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cadModalLabel">Editar Produto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="?r=update">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nome: </label>
                                        <input type="text" class="form-control nome" id="nome" name="nome" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Fornecedor:</label>
                                        <input type="text" class="form-control fornecedor" id="fornecedor" name="fornecedor" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Custo do Produto:</label>
                                        <input type="number" step="0.01" class="form-control custoProduto" id="custoProduto" name="custoProduto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Valor de venda:</label>
                                        <input type="number" step="0.01" class="form-control valorVenda" id="valorVenda" name="valorVenda" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Estoque:</label>
                                        <input type="number" min="1" class="form-control estoque" id="Estoque" name="estoque" required>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Fechar">
                                        <input type="submit" class="btn btn-primary" value="Enviar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
                include '../../db/conexao_produtos.php';
                $result = $db->find()->toArray();

                ?>
                <table class="table_cadastrar">
                    <thead>
                        <tr id="header">
                            <th>id</th>
                            <th>Produto</th>
                            <th>Fornecedor</th>
                            <th>Custo do Produto</th>
                            <th>Valor de Venda</th>
                            <th>Quantidade</th>
                            <th>Data do cadastro</th>
                            <th>Editar</th>
                            <th>Apagar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $value) :
                        ?>
                            <tr>
                                <td><?php echo substr($value->_id, -5); ?></td>
                                <td><?php echo $value->nome; ?></td>
                                <td><?php echo $value->fornecedor; ?></td>
                                <td><?php echo "R$ " . number_format(floatval(str_replace(",", ".", $value->custoProduto)), 2, ',', ''); ?> </td>
                                <td><?php echo "R$ " . number_format(floatval(str_replace(",", ".", $value->valorVenda)), 2, ',', ''); ?></td>
                                <td><?php echo $value->estoque; ?></td>
                                <td><?php echo $value->data; ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#editModal" data-nome="<?php echo $value->nome; ?>" data-fornecedor="<?php echo $value->fornecedor; ?>" data-custoproduto="<?php echo number_format(floatval(str_replace(",", ".", $value->custoProduto)), 2, ',', ''); ?>" data-valorvenda="<?php echo number_format(floatval(str_replace(",", ".", $value->valorVenda)), 2, ',', ''); ?>" data-estoque="<?php echo $value->estoque; ?>" class="btn btn-info">
                                        EDITAR
                                    </button>
                                </td>
                                <td>
                                    <a class=" btn btn-danger" href="?delete=<?php echo $value->nome ?>">APAGAR</a>
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
        switch ($_GET['r']) {
            case 'add':
                if (!empty($_POST['nome'])) {

                    if (cadastrarProdutos($_POST)) { ?>

                        <script language='javascript'>
                            swal.fire({
                                icon: "success",
                                text: "Feito com Sucesso!",
                                type: "success"
                            }).then(okay => {
                                if (okay) {
                                    window.location.href = "cadastrar_produto.php";
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
                                    window.location.href = "cadastrar_produto.php";
                                }
                            });
                        </script>
                    <?php }
                }
                break;

            case 'update':
                if (!empty($_POST['nome'])) {

                    if (editarProdutos($_POST)) { ?>

                        <script language='javascript'>
                            swal.fire({
                                icon: "success",
                                text: "Feito com Sucesso!",
                                type: "success"
                            }).then(okay => {
                                if (okay) {
                                    window.location.href = "cadastrar_produto.php";
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
                                    window.location.href = "cadastrar_produto.php";
                                }
                            });
                        </script>
            <?php }
                }
                break;
            default:
                # code...
                break;
        }
    }
    if (isset($_GET['delete'])) {
        if (apagarProduto($_GET['delete'])) {
            ?>

            <script language='javascript'>
                swal.fire({
                    icon: "success",
                    text: "Feito com Sucesso!",
                    type: "success"
                }).then(okay => {
                    if (okay) {
                        window.location.href = "cadastrar_produto.php";
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
                        window.location.href = "cadastrar_produto.php";
                    }
                });
            </script>
    <?php }
    };
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script language="javascript">
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var nome = button.data('nome')
            var fornecedor = button.data('fornecedor')
            var custoProduto = button.data('custoproduto')
            var valorVenda = button.data('valorvenda')
            var estoque = button.data('estoque')
            console.log(valorVenda)
            // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body .nome').val(nome)
            modal.find('.modal-body .fornecedor').val(fornecedor)
            modal.find('.modal-body .custoProduto').val(custoProduto)
            modal.find('.modal-body .valorVenda').val(valorVenda)
            modal.find('.modal-body .estoque').val(estoque)
        })
    </script>

    </body>


</html>