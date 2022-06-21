<?php 
class Pedidos {

    private $_produtos;
    private $_quantidade;

    public function __construct($produtos, $quantidade)
    {
        $this->_produtos = $produtos;
        $this->_quantidade = $quantidade;
    }
}



?>