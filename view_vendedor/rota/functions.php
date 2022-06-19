<?php

function cadastrarProdutos($dados){
    include '../../db/conexao_produtos.php';
    require '../../vendor/autoload.php';

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
        'estoque' => $estoque,
    ]);

    return $result;
};

function apagarProduto($nome) {
    include '../../db/conexao_produtos.php';

    $result = $db->deleteOne([
        'nome' => $nome
    ]);
    return $result;
};
