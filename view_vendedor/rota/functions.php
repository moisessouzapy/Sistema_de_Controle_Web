<?php

function cadastrarProdutos($dados)
{
    include '../../db/conexao_produtos.php';
    require '../../vendor/autoload.php';

    $nome = $dados['nome'];
    $data = new DateTime("now", new DateTimeZone('America/Bahia'));
    $dt = $data->format('Y-m-d\TH:i:sO');
    $fornecedor = $dados['fornecedor'];
    $custoProduto = $dados['custoProduto'];
    $valorVenda = $dados['valorVenda'];
    $estoque = $dados['estoque'];
    var_dump($data);
    var_dump($dt);

    $result = $db->insertOne([
        'nome' => $nome,
        'data' =>  $dt,
        'fornecedor' => $fornecedor,
        'custoProduto' => $custoProduto,
        'valorVenda' => $valorVenda,
        'estoque' => $estoque,
    ]);
}
