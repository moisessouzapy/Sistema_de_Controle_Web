<?php

$dados = $_POST["pedidos"];
include '../../db/conexao_pedidos.php';


$data = new DateTime("now", new DateTimeZone('America/Bahia'));
$dt = $data->format('d/m/Y H:i:s');
// $quantidade = $dados['quantidade'][0];



$db->insertOne(
    [   'valor' => $dados['total'],
        'data' => $dt,
        'venda' => $dados['pedido']
    ],
);

?>