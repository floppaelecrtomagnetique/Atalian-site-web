<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASW Afrique, Politique Ressources Humaines</title>
    <link rel="stylesheet" href="style/Contact.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../assets/logos/ASW BF.png">
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
                    <li><a href="../carriere/Politique-RH.html">Politique Ressources Humaines</a></li>
                    <li><a href="../carriere/Politique-emploi.html">Notre Politique d'Emploi</a></li>
                    <li><a href="../carriere/Offres-emploi.php">Nos offres d'emploi</a></li>
                    <li><a href="../carriere/Candidature-spontanée.php">Candidature spontanée</a></li>
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
    <div class="Flex">
        <div class="coordonnées">
            <h2>Coordonnées</h2>
            <h3>A SIMPLE WAY Facility Management, Afrique (Siège)</h3>
            <h3>6 rue El Kadi Lass</h3>
            <h3>20000 Casablanca</h3>
            <h3>MAROC</h3>
            <h3>Tel: +212 (0) </h3>
        </div>
        <div class="form">
            <h2>Contactez-nous !</h2>
            <form method="post">
                <div class="name">
                    <label for="">Nom</label>
                    <input type="text" placeholder="Nom" id="Nom" name="Nom" required>
                    <label for="">Prénom</label>
                    <input type="text" placeholder="Prénom" id="Prénom" name="Prénom" required>
                </div>
                <div class="mail">
                    <label for="">Email</label>
                    <input type="email" placeholder="Email" name="mail" id="mail" required>
                    <label for="">Téléphone</label>
                    <input type="tel" placeholder="Téléphone" name="phone" id="phone">
                </div>
                <div class="statut">
                    <label for="">Entreprise</label>
                    <input type="text" placeholder="Entreprise" id="Entreprise">
                    <label for="">Titre</label>
                    <input type="text" placeholder="Titre" id="Titre">
                </div>
                <div class="location">
                    <label for="">Pays</label>
                    <input type="text" placeholder="Pays" id="Pays" required>
                    <label for="Région">Région</label>
                    <input type="text" placeholder="Région" id="Région" required>
                </div>
                <div class="type">
                    <label for="">Services</label>
                    <select name="services" id="services">
                        <option value="FM">Facility Management</option>
                        <option value="P">Propreté</option>
                        <option value="M">Maintenance Multitechnique</option>
                        <option value="S">Sécurité & Sûreté</option>
                        <option value="">Accueil</option>
                        <option value="I">Interim & Recrutement</option>
                    </select>
                    <label for="">Type de message</label>
                    <select name="type" id="type">
                        <option value="DI">Demande d'information</option>
                        <option value="CC">Contact commercial</option>
                        <option value="RH">Ressources Humaines</option>
                        <option value="F">Fournisseur</option>
                        <option value="P">Presse</option>
                        <option value="A">Autre</option>
                    </select>
                </div>
                <div class="message">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" required></textarea>
                </div>
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
        <?php

use function PHPSTORM_META\type;

            if(isset($_POST['submit'])) {
                include 'mailer.php';
                $name = $_POST['Nom'];
                $surname = $_POST['Prénom'];
                $visitor_email = $_POST['mail'];
                $message = $_POST['message'];
                $subject = $_POST['services'];
                $type = $_POST['type'];

                if ($type == "DI") {
                    $type = "une demande d'information";
                } else if ($type == "CC") {
                    $type = "un contact commercial";
                } else if ($type == "RH") {
                    $type = "une demande de ressources humaines";
                } else if ($type == "F") {
                    $type = "une demande de fournisseur";
                } else if ($type == "P") {
                    $type = "une demande de presse";
                } else {
                    $type = "une autre demande";
                }

                if ($subject == "FM")
                    $subject = "le Facility Management";
                else if ($subject == "P")
                    $subject = "la Propreté";
                else if ($subject == "M")
                    $subject = "de la Maintenance Multitechnique";
                else if ($subject == "S")
                    $subject = "la Sécurité & la Sûreté";
                else if ($subject == "I")
                    $subject = "l'Interim & Recrutement";
                else
                    $subject = "l'Accueil";
                $email_from = 'ASW Afrique';
                $email_subject = "Vous avez reçu ".$type." concernant: ".$subject."";
                $email_body = "Nom: ".$name."<br>".
                            "Prénom: ".$surname."<br>".
                            "Email: ".$visitor_email."<br>";
                if (isset($_POST['phone'])) {
                    $phone = $_POST['phone'];
                    $email_body .= "Téléphone: ".$phone."<br>";
                }
                $email_body .= "Message: <br>".$message."<br>";
                $to = "amauryaed@gmail.com";
                adaptable_mail($to, $email_subject, $email_body);
                echo "<p>Message envoyé !</p>";
            }
        ?>
    </div>
</body>