<?php

function cadastrarProdutos($dados)
{
    include 'conexao_produtos.php';


    $nome = $dados['nome'];
    $data = new DateTime("now", new DateTimeZone('America/Bahia'));
    $dt = $data->format('d/m/Y H:i:s');
    $fornecedor = $dados['fornecedor'];
    $custoProduto = $dados['custoProduto'];
    $valorVenda = $dados['valorVenda'];
    $estoque = $dados['estoque'];

    $result = $db->insertOne([
        'nome' => $nome,
        'data' =>  $dt,
        'fornecedor' => $fornecedor,
        'custoProduto' => $custoProduto,
        'valorVenda' => $valorVenda,
        'estoque' => intval($estoque),
        'qnt_vendida' => 0
    ]);

    return $result;
};

function apagarProduto($nome)
{
    include 'conexao_produtos.php';

    $result = $db->deleteOne([
        'nome' => $nome
    ]);
    return $result;
};

function editarProdutos($dados)
{
    include 'conexao_produtos.php';

    $nome = $dados['nome'];
    $fornecedor = $dados['fornecedor'];
    $custoProduto = $dados['custoProduto'];
    $valorVenda = $dados['valorVenda'];
    $estoque = $dados['estoque'];

    $result = $db->updateOne(
        ['nome' => $nome],
        [
            '$set' =>
            [
                'nome' => $nome,
                'fornecedor' => $fornecedor,
                'custoProduto' => $custoProduto,
                'valorVenda' => $valorVenda,
                'estoque' => $estoque,
            ]
        ]
    );

    return $result;
}

function apagarPedido($data)
{
    include 'conexao_pedidos.php';
    $dados = $db->findOne(
        ['data' => $data],
    );

    $result = $db->deleteOne([
        'data' => $data
    ]);

    incrementarEstoque($dados);
    return $result;
};

function incrementarEstoque($dados)
{
    include 'conexao_produtos.php';
    foreach ($dados->venda as $infoVenda) {
        $db->updateOne(
            ['nome' => $infoVenda['prod_nome']],
            ['$inc' => [
                'estoque' => +$infoVenda['qnt'],
                'qnt_vendida' => -$infoVenda['qnt']] ]
        );
    }
};
