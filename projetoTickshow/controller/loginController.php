<?php

if ($_POST) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    if(isset($_POST['login'])){
        require_once '../model/usrModel.php';
        $usr =  new usrModel();

        $usr->login($email,$senha);
        
    }

} else {
    header('location:../index.php?cod=193');
}
?>




