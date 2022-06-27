<?php 
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];


    //Base de données | Connexion
    $conn = new mysqli('localhost', 'root','','test');
    
?>