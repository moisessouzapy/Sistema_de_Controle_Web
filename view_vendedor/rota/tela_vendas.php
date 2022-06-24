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

        <?php
        include '../../db/conexao_produtos.php';
        include '../model/pedidos.php';
        $result = $db->find()->toArray();
        ?>

        <form class="form-control" method="post" action="?r=add">
          <div class="row">
            <div class="col-8">
              <label class="col-form-label">Produto: </label>
              <select class="form-control" id="produto" name="produto" onchange="pegarValor(this.selectedIndex)">
                <?php foreach ($result as $value) : ?>
                  <option id="produto-selecionado" value="<?php echo $value->nome; ?>"><?php echo $value->nome; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-2">
              <label class=" col-form-label">Quantidade: </label>
              <input class="form-control" type="number" name="quantidade" id="quantidade" min="1" value="1">
            </div>
            <div class="col-2">
              <label class=" col-form-label">Valor: </label>
              <select class="form-control" id="valor" name="valor" disabled onchange="pegarValor(this.value)">
                <?php foreach ($result as $value) : ?>
                  <option class="form-control" type="number" name="valor" id="valor-selecionado" value="<?php echo $value->valorVenda ?>"><?php echo $value->valorVenda; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col">

              <label class="col-form-label"></label>
              <button type="button" class="btn btn-primary form-control" onclick="adicionarProduto()">Adicionar</button>
            </div>
          </div>
        </form>
        <?php

        // switch ($_POST['r']) {
        //   case 'add':
        //     $ped = new Pedidos($_POST['produto'], $_POST['quantidade']);


        //     break;

        //   default:
        //     $ped = new Pedidos($_POST['produto'], $_POST['quantidade']);
        //     break;
        // }

        // echo 'ped';
        // var_dump($ped);
        // echo 'ped';


        // //cadastarPedidos($_POST);


        // function cadastarPedidos()
        // {
        //   include '../../db/conexao_produtos.php';

        //   $produtos = array();
        //   $quantidade = array();

        //   array_push($produtos, $dados['produto']);
        //   array_push($quantidade, $dados['quantidade']);

        //   $produto = $dados['produto'];
        //   $quantidade = $dados['quantidade'];

        //   $result = $db->insetOne(
        //     ['nome' => $nome],
        //     [
        //       '$set' =>
        //       [
        //         'nome' => $nome,
        //         'fornecedor' => $fornecedor,
        //         'custoProduto' => $custoProduto,
        //         'valorVenda' => $valorVenda,
        //         'estoque' => $estoque,
        //       ]
        //     ]
        //   );
        // }

        ?>
        <table id="tabela-venda">
          <thead>
            <tr>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Valor</th>
              <th>Valor Total</th>
            </tr>
          </thead>
          <tbody id="tbody-venda">
          </tbody>
          <div class="d-flex m-4">
          <h3 class="m-1">O valor total é: </h3>
          <input type="text" disabled id="valor-total">
        </div>
        </table>


      </div>
    </div>

  </div>
  <script language="javascript">
    const pedido = new Map();
    pedidos = []

    function adicionarProduto() {
      var prodList = document.getElementById('produto')
      var prod = prodList.options[prodList.selectedIndex].value

      var quant = document.getElementById('quantidade').value

      var valueList = document.getElementById('valor')
      var value = valueList.options[valueList.selectedIndex].value

      pedidos.push({
        'produto': prod,
        'quantidade': quant,
        'valor': value
      })

      // return JSON.stringify(pedidos);
      construirTabela(pedidos)
    }

    function pegarValor(value) {
      var valueList = document.getElementById('valor')
      var valor = valueList.options[value].value
      document.getElementById('valor').value = valor
    }

    function construirTabela(data) {

      var table = document.getElementById('tbody-venda')
      table.innerHTML = ""

      var total = 0.0;
      for (var i = 0; 0 < data.length; i++) {
        total += data[i].quantidade * parseFloat(data[i].valor);
        var row =
          `<tr>
            <td>${data[i].produto}</td>
            <td>${data[i].quantidade}</td> 
            <td>R$ ${data[i].valor}</td> 
            <td>R$ ${(data[i].quantidade * parseFloat(data[i].valor)).toFixed(2).replace(".", ",")}</td>
        </tr>
        `
        table.innerHTML += row

        document.getElementById('valor-total').value = "R$ " + (total).toFixed(2).replace(".", ",")
      }
      console.log('cheguri')
      console.log(total)
    }
  </script>

  </body>

</html>