<?php

 if (isset($_POST['accept']) && !empty($_POST['accept'])) {

   if (isset($_POST['nom']) && !empty($_POST['nom'])) { 
      $nom = trim(strip_tags($_POST["nom"]));
      } else {
         die('Erreur de ....');
      }
      
   if (isset($_POST['prenom']) && !empty($_POST['prenom'])) { 
      $prenom = trim(strip_tags($_POST["prenom"]));
      } else {
         die('Erreur de ....');
      }

    if (isset($_POST['email']) && !empty($_POST['email'])) { 
        $email = trim(strip_tags($_POST["email"]));
        } else {
            die('Erreur de ....');
        }

    if (isset($_POST['sujet']) && !empty($_POST['sujet'])) { 
        $email = trim(strip_tags($_POST["sujet"]));
        } else {
            die('Erreur de ....');
        }

    if (isset($_POST['message']) && !empty($_POST['message'])) { 
        $email = trim(strip_tags($_POST["message"]));
        } else {
            die('Erreur de ....');
        }
    if ($mysqlconnection = new PDO('mysql:host=localhost;dbname=my_personal_site;charset=utf8;', 'root' , "" )) {
        $request = "INSERT INTO `retour_formulaire`(`nom`, `prenom`, `email`, `sujet`, `message`) VALUES ('$nom','$prenom','$email','$sujet','$message')";
        $query = $mysqlconnection->query($request);
        $data = $query->fetchAll();

        } else {
            echo "Echec de connexion – Veuillez contacter l’adminstrateur" ;
        }

    } else {
        die('erreur de complétion du formulaire');
    }
/* renvoyer la base de données */ 
// $request = "SELECT * FROM `testbddd` WHERE 1";
// var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Elisa DE SOUSA | Etudiante en développement web</title>
<link rel="stylesheet" href="/styles/style.css">
<link rel="stylesheet" href="/styles/contact.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>

    <main>
        <h1>Merci de votre message !</h1>
        <a class="btn-s" href="index.html">Accueil</a>
    </main>

<!-- Footer Section -->
<footer class="footer">
    <div class="footer_lien_section">
        <div class="footer_lien">
            <div class="footer_lien_lien">
                <h2>Me contacter</h2>
                <a href="contact.html">Contact</a>
            </div>
            <div class="footer_lien_lien">
                <h2>Mes réseaux sociaux</h2>
                <a href="https://www.instagram.com/elisa_desousa_/">Instagram</a>
                <a href="https://www.linkedin.com/in/elisa-desousa/">LinkedIn</a>
            </div>    
        </div>
    </div>
    <section class="reseaux_sociaux">
        <div class="reseaux_sociaux_section">
            <div class="footer_logo">
                <a href="#" id="footer_logo"><img src="image/Logo1.png" class="logo" alt="Logo"></a>
            </div>
            <p class="website_rights">© Elisa 2022.</p>
            <div class="reseaux_sociaux_icon">
                <a href="#" class="reseaux_sociaux_lien"><i class="fab fa-instagram"></i></a>
                <a href="#" class="reseaux_sociaux_lien"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </section>
</footer>

<script src="https://kit.fontawesome.com/1684a4a34d.js" crossorigin="anonymous"></script>
</body>
</html>