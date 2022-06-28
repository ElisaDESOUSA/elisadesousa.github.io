<?php 

// Vérifie qu'il provient d'un formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST")

{
    //Mes identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "retour_users";

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];
    
    if(!isset($nom)){
        die("Veuillez entrer votre nom");
    }

    if(!isset($prenom)){
        die("Veuillez entrer votre prénom");
    }
    if(!isset($email) || 
    !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        die("Veuillez entrer votre adresse mail");
    }
    if(!isset($sujet)){
        die("Veuillez préciser le sujet")
    }
    if(!isset($message)){
        die("Veuillez écrire votre message")
    }

    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);

    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_error.') '. $mysqli-->connect_error);
    }

    $statement = $mysqli->prepare
}

?>