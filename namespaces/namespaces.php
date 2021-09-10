<?php
// namespaces servem para evitar o conflito entre classes com o mesmo nome
require 'classes/Produto.php';
require 'models/Produto.php';

// Da para usar o namespaces dessa maneira tambem
# use classes\Produto; => da para usar apelidos => use classes\Produto as ProductClass;
# $produto = new Produto();


// Instanciando classes, utilizando os namespaces
$produto = new \classes\Produto();
# $produto = new \models\Produto();
$produto->mostrarDetalhes();
?>