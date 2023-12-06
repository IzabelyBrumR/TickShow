<?php

if ($_POST) {

    require_once '../model/usrModel.php';
    $usr = new usrModel();
    $usr->nome = $_POST['nome'];
    $usr->email = $_POST['email'];
    $usr->senha = $_POST['senha'];
    $usr->telefone = $_POST['telefone'];

    if(isset($_POST['cadastrar'])){
        $usr->cadastro();
  
    } 
    
} else if ($_REQUEST) {
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {

        require_once '../model/usrModel.php';
        $usr = new usrModel();

    }
} else {
    loadAll();
}

function loadAll() {
    require_once './model/usrModel.php';
    $usr = new usrModel();
    $usrList = $usr->loadAll();

    return $usrList;
}

function loadById($id) {
    require_once './model/usrModel.php';
    $usr = new usrModel();

    $usr->loadById($id);

    return $usr;
}
?>