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
        <h1>Tela de vendas</h1>
        <hr>

        <?php
        include '../../db/conexao_produtos.php';
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

        <table id="tabela-venda">
          <thead>
            <tr id="tabela_venda">
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
          <div class="d-grid gap-2 col-6 mx-auto">
            <form id="finalizar-compra">
              <input class="btn btn-success btn-finalizar" id="btn-finalizar" form="finalizar-compra" type="submit" value="Finalizar Pedido">
            </form>
          </div>
        </table>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script language="javascript">
    pedidos = {
      'total': 0.0,
      'pedido': []
    }

    function adicionarProduto() {
      var prodList = document.getElementById('produto')
      var prod = prodList.options[prodList.selectedIndex].value

      var quant = document.getElementById('quantidade').value

      var valueList = document.getElementById('valor')
      var value = valueList.options[valueList.selectedIndex].value

      var total = parseFloat(value) * quant;
      pedidos.total += total;
      pedidos.pedido.push({
        'prod_nome': prod,
        'qnt': quant,
        'valor': value
      })

      console.log(pedidos)
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

      for (var i = 0; 0 < data.pedido.length; i++) {

        var row =
          `<tr>
            <td>${data.pedido[i].prod_nome}</td>
            <td>${data.pedido[i].qnt}</td> 
            <td>R$ ${data.pedido[i].valor}</td> 
            <td>R$ ${(data.pedido[i].qnt * parseFloat(data.pedido[i].valor)).toFixed(2).replace(".", ",")}</td>
        </tr>
        `

        table.innerHTML += row
        document.getElementById('valor-total').value = "R$ " + (data.total).toFixed(2).replace(".", ",")
      }
    }

    $("#finalizar-compra").submit(function(e) {
      if (!pedidos.pedido.length == 0) {
        e.preventDefault();
        console.log(pedidos)
        $.ajax({
          url: '/view_vendedor/rota/inserir.php',
          type: 'POST',
          data: {
            pedidos
          },

        }).done(function(result) {
          console.log(result);
          swal.fire({
            icon: "success",
            text: "Feito com Sucesso!",
            type: "success"
          }).then(okay => {
            if (okay) {
              window.location.href = "tela_vendas.php";
            }
          });
        }).fail(function(result) {
          swal.fire({
            icon: "error",
            text: "Ops! Ouve um erro.",
            type: "success"
          }).then(okay => {
            if (okay) {
              window.location.href = "tela_vendas.php";
            }
          });
        });
      } else {
        e.preventDefault();
        swal.fire({
          icon: "error",
          text: "Ops! Ouve um erro.",
          type: "success"

        }).then(okay => {
          if (okay) {
            window.location.href = "tela_vendas.php";
          }
        });
      }
    })
  </script>
  </body>
</html>