<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/controle.css">
    <title>Cadastrar produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="/index.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Gerente</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="logout_gerente.php">Sair</a></li>
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
                                <form method="post" action="">
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
                                        <input type="text" class="form-control" id="custoProduto" name="custoProduto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Valor de venda:</label>
                                        <input type="text" class="form-control" id="valorVenda" name="valorVenda" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Estoque:</label>
                                        <input type="text" class="form-control" id="Estoque" name="estoque" required>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Fechar">
                                        <input type="submit" class="btn btn-primary" value="Enviar" onclick="cadastrarProdutos();">
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
                <table>
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
                        <?php foreach ($result as $value) : 
                            //echo $value->valorVenda . "<br>";
                            echo floatval($value->custoProduto->replace) . "<br>";
                            ?>
                            <tr>
                                <td><?php echo substr($value->_id, -5); ?></td>
                                <td><?php echo $value->nome; ?></td>
                                <td><?php echo $value->fornecedor; ?></td>
                                <td><?php echo "R$ " . number_format(floatval($value->custoProduto), 2, ',', ''); ?> </td>
                                <td><?php echo "R$ " . number_format(floatval($value->valorVenda), 2, ",", ""); ?></td>
                                <td><?php echo $value->estoque; ?></td>
                                <td><?php echo $value->data; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    include 'functions.php';

    if (!empty($_POST['nome'])) {

        if (cadastrarProdutos($_POST)) { ?>

            <script language='javascript'>
                swal.fire({
                    icon: "success",
                    text: "Feito com Sucesso!",
                    type: "success"
                }).then(okay => {
                    if (okay) {
                        window.location.href = "painel.php?r=";
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
                        window.location.href = "painel.php?r=";
                    }
                });
            </script>
    <?php }
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>

    </script>

</body>


</html>