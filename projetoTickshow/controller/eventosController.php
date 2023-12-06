<?php

if ($_POST) {
    require_once '../model/eventosModel.php';
    $evento = new eventosModel();
    $evento->setNome($_POST['nome']);
    $evento->setImg($_POST['img']);
    $evento->setValor($_POST['valor']);    
    $evento->setCategoria_id($_POST['categoria_id']);
    $evento->setId($_POST['id']); 

    
} else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {

        require_once '../model/eventosModel.php';
        $usr = new eventosModel();

    }
} else {
    loadAllEventos();
}

function loadAllEventos() {
    require_once './model/eventosModel.php';
    $evento = new eventosModel();
    $eventosList = $evento->loadAllEventos();

    return $eventosList;
}


function loadByCat($categoria_id){
    require_once './model/eventosModel.php';
    $evento = new eventosModel();
    
   $result =  $evento->loadByCat($categoria_id);

    return $result;
}
