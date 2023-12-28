<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASW Afrique, Politique Ressources Humaines</title>
    <link rel="stylesheet" href="style/Offres-emploi.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../assets/logos/ASW BF.png">
    <script src="language.js"></script>
    <div class="header" style="background-color: rgb(240,124,16);">
        <h1><a href="../index.html" class="home"><img src="../assets/logos/ASW Bl F.png" style="height: 80px; width: 160px;" alt=""></a></h1>
        <!-- <button id="language" onclick="changeLanguage('fr')"><img src="assets/France.jpeg" style="width: 30px; height: 20px; margin-right: 5px;" alt="French flag"></button>
        <button id="language" onclick="changeLanguage('en')"><img src="assets/UK.png" style="width: 30px; height: 20px;" alt="UK flag"></button> -->
    </div>
    <nav class="navbar" style="background-color: white; border-bottom: 1px solid black;">
        <ul class="navbar">
            <li class="navbar"><a href="../index.html"><img src="../assets/logos/ASW BF.png" style="height: 30px; width: 50px;" alt="logo atalian"></a></li>
            <li class="navbar"><a href="#">À propos</a>
                <ul class="drop">
                    <li><a href="../about/about.html">Présentation</a></li>
                    <li><a href="../about/engagement.html">Nos engagements</a></li>
                    <li><a href="../about/values.html">Nos valeurs</a></li>
                    <!-- <li><a href="../about/key_numbers.html">Chiffres clés</a></li> -->
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
                    <li><a href="../carriere/Offres-emploi.php">Nos offres d'emploi</a></li>
                    <li><a href="Candidature-spontanée.php">Candidature spontanée</a></li>
                </ul>
            </li>
            <li class="navbar"><a href="#">Medias</a>
                <ul class="drop">
                    <li><a href="../medias/actualité.php">Actualités</a></li>  
                    <li><a href="../medias/télécharger_nos_brochures.html">Téléchargez nos brochures</a></li>
                     
                </ul>
            </li>
             
            <li class="navbar"><a href="../contact/Contact.php">Contact</a>
        </ul>
    </nav>
</head>
<body>

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
    <div style="margin-left: 45px;">
        <h2 style="color:darkorange ">Choisissez le Pays souhaité</h2>
        <form method="post">
            <select name="pays" id="pays">
                <option value="Maroc">Maroc</option>
                <option value="Sénégal">Sénégal</option>
                <option value="Côte dIvoire">Côte d'Ivoire</option>
                <option value="Bénin">Bénin</option>
            </select>
            <input type="submit" value="Rechercher">
        </form>
    </div>
    <?php 
        include "DB/database.php";
        if (isset($_POST['pays']))
            $request = "SELECT * FROM offres WHERE Pays = '".$_POST['pays']."' ORDER BY id DESC";
        else
            $request = "SELECT * FROM offres ORDER BY id DESC";

        $offres = $carrière->prepare($request);
        $offres->execute();
        if ($offres->rowCount() > 0) {
            $emploi = $offres->fetchAll();
        }
        else {
            echo "Aucune offre disponible pour le moment.";
        }
    ?>
    <div class="offres">
        <?php 
        foreach($emploi as $ep) {
            if ($ep['Pays'] == "Côte dIvoire") {
                $ep['Pays'] = "Côte d'Ivoire";
            }
        ?>
        <div class="emploi">
            <img src="../assets/logos/ASW BF.png" alt="">
            <div>
                <h2><?= $ep['Poste']?></h2>
                <div class="flex" style="display: flex;">
                    <span><?= $ep['Localisation']?>, <?=$ep['Pays']?></span>
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
             <li><a href="../contact/Contact.php">contact</a></li>
            <li><a href="../about/about.html">à propos de nous</a></li>
            <li>carrière</li>
        </ul>
        <ul class="CB2">
            <li>contact</li>
            <li>à propos de nous</li>
            <li>carrière</li>
        </ul>
    </div>
</body>