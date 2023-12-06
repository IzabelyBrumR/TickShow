<?php

session_start();
//inicializa carrinho e faz com que ele seja igual ao cookie que já existe
if(!isset($_SESSION['carrinho'])){
$_SESSION['carrinho'] = array();
}

if(isset($_REQUEST['delete'])){ //em caso de delete
    $location = array_search($_REQUEST['delete'], $_SESSION['carrinho']);
    
    unset($_SESSION['carrinho'][$location]);
    
}
if(isset($_REQUEST['id'])){ //em caso de adicionar
echo('DESGRAÇAAA');    
array_push($_SESSION['carrinho'], $_REQUEST['id']);
}

var_dump($_SESSION['carrinho']);
//var_dump($_COOKIE['carrinho']);
header('location:../carrinho.php');
?>

