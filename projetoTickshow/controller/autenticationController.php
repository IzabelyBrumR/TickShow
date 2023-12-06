<?php

session_start();

if(!isset($_SESSION['login'])){
    header('location:index.php?cod=172');
}  //se nao tiver session login, volta ao index com cod=172

?>
