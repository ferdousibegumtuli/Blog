<?php
    include('../layout/header.php');
    if($_SESSION['user'])
    unset($_SESSION['user']);

    {
        header("location:../../index.php");
    }
?>