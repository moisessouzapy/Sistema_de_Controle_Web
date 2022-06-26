<?php

$dados = $_POST["pedidos"];
include '../../db/conexao_pedidos.php';

$data = new DateTime("now", new DateTimeZone('America/Bahia'));
$dt = $data->format('d/m/Y H:i:s');

print_r($dados['pedido']);

$db->insertOne(
    [
        'valor' => $dados['total'],
        'data' => $dt,
        'venda' => $dados['pedido']
    ],
);
decrementarEstoque($dados['pedido']);

function decrementarEstoque($dados)
{
    include '../../db/conexao_produtos.php';
    foreach ($dados as $value) {
        $db->updateOne(
            ['nome' => $value['prod_nome']],
            [
                '$inc' => [
                    'estoque' => -$value['qnt'],
                    'qnt_vendida' => +$value['qnt']
                ]
            ]
        );
    }
}
