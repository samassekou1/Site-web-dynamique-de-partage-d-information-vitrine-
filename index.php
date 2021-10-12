<?php
    $resultat=require_once("bakend.php");
  
    //recuperation des donnes de la base de donnees
    $recup=$pdo->prepare("SELECT * FROM personnages");
    $recup->execute();
    // var_dump($resultat); ce code permet de retourner tout les lignes de la base de donnes 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Les grands personnages du monde numérique</title>

    <body>
        <header>
            <a href="#" class="logo"><span>L'</span>histoire du numerique</a>
            <div class="menuToggle" onclick="toggleMenu();"></div>
            <ul class="navbar">
                <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
                <li><a href="#introduction" onclick="toggleMenu();">Introduction</a></li>
                <li><a href="#menu" onclick="toggleMenu();">liste</a></li>

            </ul>
        </header>
        <section class="banniere" id="banniere">
            <div class="contenu">
                <h2>Nous allons vous plonger dans la vie et oeuvre des grandes personnes qui ont marqué l'histoire du numérique.</h2>
            
            </div>
        </section>
        <section class="introduction" id="introduction">
            <div class="row">
                <div class="col50">
                    <h2 class="titre-texte"><span>I</span>ntroduction</h2>
                    <h4>De nos jours, on l'utilise tous les jours, il fait partie de nos vies quotidiennes, mais pourtant, les contours de ce concept sont parfois bien trop flous. Et oui, c'est bien l'informatique, entre processeur, systèmes d information et développeur.

                        Le mot informatique a été créé en 1962 par Philippe Dreyfus. C'est un néologisme de la langue française créé à partir des mots "information" et "automatique". Un terme pas si ancien, pour un mot désormais si largement partagé !
                        
                        Des calculs de l'antiquité à la commercialisation du premier ordinateur en 1951, l'UNIAC, en passant par la sortie du PC d'IBM en 1981 jusqu'au lancement de Windows 95, la vraie question est : comment en est-on arrivé là ?
                    </h4>
                </div>
                <div class="col50">
                    <div class="img">
                        <a href=""><img src="./images/Al-Khwarizm.jpg" alt="image"></a> 
                    </div>
                </div>
            </div>
        </section>
        <section class="menu" id="menu">
            <div class="titre">
                <h2 class="titre-texte"><span>L</span>iste recaptilative</h2>
                <p>Elles et ils ont marqué l'Histoire de l'informatique. </p>
            </div>
            <div class="contenu" <?php while($historique=$recup->fetch()){ ?> >
                <div class="box">
                    <div class="imbox">
                    <a href="histoire.php?id=<?= $historique['id'] ?>" >
                     <img src="<?= $historique['nom_image'] ?>" alt="">
                    </a>
                    <h6><?= $historique['nom_complet'] ?></h6> 
                <div>
                    
                </div> 
                    </div>
                    
            </div <?php } ?> >
                
            <div class="titre">
                <a href="#" class="btn1">Retour à l'Accueil</a>
            </div>
        </section>
    <div class="row row-cols-1 row-cols-md-6 g-5">
        <div class="col">
            <div class="apprenat">
                 <img src="./images/Mohamed.jpg" class="rounded-circle" alt="...">
                 <h5 class="card-title">Mohamed BAH</h5>
            </div>
        </div>
        <div class="col">
            <div class="apprenant">
                 <img src="./images/samassekou.png" class="rounded-circle" alt="...">
                <h5 class="card-title">Adama B SAMASSEKOU</h5>
            </div>
             </div>
    </div>
        <div class="copyright">
            <p>copyright 2021 <a href="#">ORANGE DIGITAL KALANSO</a></p>
        </div>  
        <script>
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                header.classList.toggle("sticky", window.scrollY > 0);
            });

            function toggleMenu() {
                const tmenuToggle = document.querySelector('.menuToggle');
                const navbar = document.querySelector('.navbar');
                navbar.classList.toggle('active');
                menuToggle.classList.toggle('active');
            }
        </script>
        <footer><marquee behavior="alternate">Created by Mohamed BAH et Adama B Sammassekou</marquee></footer>
    </body>

</html>