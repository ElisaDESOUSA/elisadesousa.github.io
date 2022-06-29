<?php 

try
    {
        session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=my_personal_site;charset=utf8;', 'root', '');
    }
    catch(Exception $e)
    {
        die('Une erreur a été trouvée : ' . $e->getMessage());
    }


if(true)
{
    // Vérifie si tous les champs sont remplis
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['sujet']) && !empty($_POST['message']))
    {
        //Données
        $nom = ($_POST['nom']);
        $prenom = ($_POST['prenom']);
        $email = ($_POST['email']); 
        $sujet = ($_POST['sujet']);
        $message = ($_POST['message']);

        // Insertion dans la base de données | retour formulaire
        $insertFormulaire = $bdd->prepare('INSERT INTO retour_formulaire(nom, prenom, email, sujet, message) VALUES(?, ?, ?, ?, ?)');
        $insertFormulaire->execute(array($nom, $prenom, $email, $sujet, $message));


    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Elisa DE SOUSA | Etudiante en développement web</title>
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/contact.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<!-- Barre de Navigation -->
<nav class="navigation_barre">
    <div class="navigation">
        <a href="index.html" id="navigation_logo"><img src="image/logo.png" class="logo" alt="logo_header"></a>
        <div class="navigation_deroulante" id="navigation_responsive">
            <span class="barre"></span>
            <span class="barre"></span>
            <span class="barre"></span>
        </div>
        <ul class="navigation_menu">
            <li class="navigation_onglet">
                <a href="index.html" class="navigation_lien" id="home-page" alt="Vers la page accueil">Accueil</a>
            </li>
            <li class="navigation_onglet">
                <a href="portfolio.html" class="navigation_lien" id="portfolio-page" alt="Vers le portfolio">Portfolio</a>
            </li>
            <li class="navigation_onglet">
                <a href="moncv.html" class="navigation_lien" id="resume-page" alt="Vers la page CV">Mon CV</a>
            </li>
            <li class="navigation_contact">
                <a href="contact.html" class="bouton" id="contact" alt="Vers la page contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<body>

<main>
    <h1>Merci de votre message !</h1>
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