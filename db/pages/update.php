<?php

include '../inc/connect.php';

$email = htmlspecialchars($_POST['email']);
$nom = htmlspecialchars($_POST['nom']);
$ville = htmlspecialchars($_POST['ville']);
$prenom = htmlspecialchars($_POST['prenom']);
$adresse = htmlspecialchars($_POST['adresse']);
$zip = htmlspecialchars($_POST['zip']);
$id = $_POST['id'];

$reqsql = "UPDATE clients SET prenom = '$prenom', nom = '$nom', email = '$email', ville = '$ville', adresse = '$adresse', zip = '$zip' WHERE id=$id";

if($auth->query($reqsql)) {
    header('Location:../../pages/apropos.php');
}