<?php

if ($_POST) {
    require_once '../model/eventosModel.php';
    $evento = new eventosModel();

    $nome= $_POST['nome'];
    $img= $_POST['img'];
    $valor = $_POST['valor'];
    $quant_ing = $_POS['quant_ing'];
    $categoria_id = '6';
    
    if(isset($_POST['cadastroEvento'])){
        $evento->cadastroEvento($nome,$img,$valor,$quant_ing,$categoria_id);
    }
    
} else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {

        require_once '../model/eventosModel.php';
        $evento = new eventosModel();

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
