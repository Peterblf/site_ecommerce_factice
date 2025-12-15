<?php

if(
    isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['ville']) && isset($_POST['adresse']) && isset($_POST['zip'])
    &&
    !empty($_POST['prenom'])&& !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['ville']) && !empty($_POST['adresse'] && !empty($_POST['zip']))
){
    include '../inc/connect.php';
    $email = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['nom']);
    $ville = htmlspecialchars($_POST['ville']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $zip = htmlspecialchars($_POST['zip']);

    $req ="INSERT INTO clients (prenom,nom,email,ville,adresse,zip) VALUES ('$prenom', '$nom','$email','$ville','$adresse','$zip')";

    if($auth->query($req)){
        header('Location:../../pages/apropos.php');
    } else{
        header('Location:../../pages/contact.php');
    }

} else{
    header('Location:../../pages/contact.php');
}