<?php

if ( isset($_POST['id']) && !empty($_POST['id']))
{
    $x = $_POST['id'];
    $reqsql = "DELETE FROM clients WHERE id=$x";

    include '../inc/connect.php';
    $auth->query($reqsql);
}

header('Location:../../pages/apropos.php');