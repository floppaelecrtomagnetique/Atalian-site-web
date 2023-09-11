<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASW Afrique, Politique Ressources Humaines</title>
    <link rel="shortcut icon" href="../assets/atalian-logo.png">
    <link rel="stylesheet" href="style/Offres-emploi.css">
    <link rel="stylesheet" href="../style/style.css">
    <div class="header">
        <h1><a href="../index.html" class="home">A Simple Way <br> Facility Management</a></h1>
        <a href="#"><img src="../assets/France.jpeg" style="width: 30px; height: 20px;" alt="French flag"></a>
        <a href="../English/about/about.html"><img src="../assets/UK.png" style="width: 30px; height: 20px;" alt="UK flag"></a>
    </div>
    <nav class="navbar">
        <ul class="navbar">
            <li class="navbar"><a href="../index.html"><img src="../assets/atalian-logo.png" style="height: 25px; width: 25px;" alt="logo atalian"></a></li>
            <li class="navbar"><a href="#">À propos</a>
                <ul class="drop">
                    <li><a href="../about/about.html">Présentation</a></li>
                    <li><a href="../about/engagement.html">Nos engagements</a></li>
                    <li><a href="../about/values.html">Nos valeurs</a></li>
                    <li><a href="../about/key_numbers.html">Chiffres clés</a></li>
                    <li><a href="../about/expertise.html">Notre expertise</a></li>
                    <li><a href="../about/innovation.html">Innovation</a></li>
                </ul>
            </li>
            <li class="navbar"><a href="#">Services</a>
                <ul class="drop">
                    <li><a href="../services/offre.html">Notre offre</a></li>
                    <li><a href="../services/facility-management.html">Facility Management</a></li>
                    <li><a href="../services/proprete.html">Propreté & services associés</a></li>
                    <li><a href="../services/maintenance.html">Maintenance Multitechnique</a></li>
                    <li><a href="../services/securite.html">Sécurité & Sureté</a></li>
                    <li><a href="../services/acceuil.html">Accueil</a></li>
                    <li><a href="../services/interim.html">Interim & Recrutement</a></li>
                </ul>
            </li>
            <li class="navbar"><a href="../implantation/implantation.html">Implantation</a></li>
            <li class="navbar"><a href="#">Engagements</a>
                <ul class="drop">
                    <li><a href="../engagements/engagement-RSE.html">Nos engagements RSE</a></li>
                    <li><a href="../engagements/engagement-Compliance.html">Nos engagements Compliance</a></li>
                </ul>
            </li>
            <li class="navbar"><a href="#"> Carrière</a>
                <ul class="drop">
                    <li><a href="Politique-RH.html">Politique Ressources Humaines</a></li>
                    <li><a href="Politique-emploi.html">Notre Politique d'Emploi</a></li>
                    <li><a href="#">Formation et mobilité</a></li>
                    <li><a href="../carriere/Offres-emploi.php">Nos offres d'emploi</a></li>
                </ul>
            </li>
            <li class="navbar"><a href="#">Medias</a>
                <ul class="drop">
                    <li><a href="#">Actualités</a></li>
                    <li><a href="#">Presse</a></li>
                    <li><a href="#">Téléchargez nos brochures</a></li>
                    <li><a href="#">Vidéos</a></li>
                </ul>
            </li>
            <li class="navbar"><a href="#">Investisseur</a>
                <ul class="drop">
                    <li><a href="#">Investors News</a></li>
                    <li><a href="#">Corporate Governance</a></li>
                    <li><a href="#">Financial information</a></li>
                    <li><a href="#">Investor Relation</a></li>
                </ul>
            </li>
            <li class="navbar"><a href="../contact/Contact.php">Contact</a>
        </ul>
    </nav>
</head>
<body>
    <?php 
        include "DB/database.php";

        $offres = $carrière->prepare('SELECT * FROM offres');
        $offres->execute();
        $emploi = $offres->fetchAll();
    ?>

    <h1 class="title">Les offres d'emplois chez <strong>A Simple Way Afrique</strong></h1>
    <p>
        Vous êtes à la recherche, d’un emploi, d’un stage ou d’un contrat d’alternance, postulez chez
        <strong>A Simple Way Facility Management Afrique</strong> c’est rejoindre un réseau de près de 14 600
        salariés dans le monde. Avec un large éventail de métiers, notre groupe peut offrir de nombreuses
        opportunités de carrière aux candidats.
        <br><br>
        Nos offres sont régulièrement mises à jour.
        N’hésitez pas à consulter nos offres dans le tableau ci-dessous. Une rubrique “candidature spontanée” est également disponible à la suite des ces offres.
    </p>
    <div class="offres">
        <?php foreach($emploi as $ep) { ?>
        <div class="emploi">
            <img src="../assets/atalian-logo.png" alt="">
            <div>
                <h2><?= $ep['Poste']?></h2>
                <div class="flex" style="display: flex;">
                    <span><?= $ep['Localisation']?></span>
                    <span><?php
                        if($ep['Temps'] == 'TPL') {
                            echo "Temps plein";
                        } else if($ep['Temps'] == 'TPA') {
                            echo "Temps partiel";
                        }
                    ?></span>
                    <span><?= $ep['Modalité']?></span>
                    <span><?php 
                        if($ep['Télétravail'] == '1') {
                            echo "Télétravail possible";
                        } else {
                            echo "Pas de télétravail";
                        }
                    ?></span>
                    <?php
                        if($ep['Permis'] == '1') {
                            echo "<span>Permis B requis</span>";
                        }
                    ?>
                </div>
                <div class="drop-down">
                    <span class="détails">Détails:</span>
                    <div class="flex" style="display: flex;">
                        <span>Type: <?= $ep['Modalité']?></span>
                        <span>Salaire: <?= $ep['Rémunération']?></span>
                        <span>Expérience: <?= $ep['Experience']?></span>
                        <span>Formation: <?= $ep['Niveau']?></span>
                    </div>
                    <p class="annexe">Annexe:<br><?=$ep['Commentaire']?></p>
                    <p class="description">Description:<br><?=$ep['Description']?></p>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
    <div class="space"></div>
    <div class="barre-de-contact">
        <ul class="CB1">
            <li><a href="Contact.php">contact</a></li>
            <li><a href="about.html">à propos de nous</a></li>
            <li>carrière</li>
        </ul>
        <ul class="CB2">
            <li>contact</li>
            <li>à propos de nous</li>
            <li>carrière</li>
        </ul>
    </div>
</body>