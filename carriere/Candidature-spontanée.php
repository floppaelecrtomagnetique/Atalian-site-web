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
    <h1>Rejoignez nos équipes !</h1>
    <div>
        <p>Vous souhaitez rejoindre nos équipes ?</p>
        <p>Envoyez-nous votre candidature spontanée en remplissant le formulaire ci-dessous.</p>
    </div>
    <form action="Candidature-spontanée.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="telephone">Téléphone (+212, ...)</label>
            <input type="tel" name="telephone" id="telephone" required>
        </div>
        <div>
            <label for="secteur">Secteur</label>
            <select name="secteur" id="secteur">
                <option value="FM">Facility Management</option>
                <option value="P">Propreté</option>
                <option value="M">Maintenance Multitechnique</option>
                <option value="S">Sécurité & Sûreté</option>
                <option value="A">Accueil</option>
                <option value="I">Interim & Recrutement</option>
            </select>
            <label for="Pays">Pays</label>
            <select name="Pays" id="Pays">
                <option value="1">Maroc</option>
                <option value="2">Bénin</option>
                <option value="3">Sénégale</option>
                <option value="4">Côte d'Ivoire</option>
            </select>
        </div>
        <label for="cv">CV</label>
        <input type="file" name="cv" id="cv" required>
        <label for="lettre_motivation">Lettre de motivation</label>
        <input type="file" name="lettre_motivation" id="lettre_motivation">
        <div>
            <input type="submit" name="submit" value="Nous rejoindre">
        </div>
    </form>
</body>
<?php
    if(isset($_POST['submit'])) {
        include 'candidature.php';
        
        move_uploaded_file($_FILES['cv']['tmp_name'], 'uploads/CV/' . $_POST['nom'] . $_POST['prenom'] . 'CV.pdf');
        move_uploaded_file($_FILES['lettre_motivation']['tmp_name'], 'uploads/Lettre de motivation/' . $_POST['nom'] . $_POST['prenom'] . 'Lettre de motivation.pdf');

        $Candidature = candidature($_POST);

    }
?>
</html>

<style>
    form {
        width: 50%;
        padding: 10px;
        margin:0 auto;
        border: 1px solid rgb(224, 224, 224);
        border-radius: 5px;
        box-shadow: 0.5px 5px 5px rgba(0, 0, 0, 0.447)
    }

    label {
        width: 80px;
        display: inline-block;
        text-align: right;
    }

    input {
        transition: 0.3s ease-in-out;
        width: 200px;
        height: 30px;
        border: 1px solid rgb(224, 224, 224);
        border-radius: 5px;
        padding-left: 10px;
        margin-bottom: 10px;
    }

    select {
        width: 200px;
        height: 30px;
        border: 1px solid rgb(224, 224, 224);
        color: rgb(157, 157, 157);
        border-radius: 5px;
        padding-left: 10px;
        margin-bottom: 10px;
    }

    select:focus {
        transition: 0.3s;
        border: 1px solid rgb(232, 126, 19);
        color: rgb(232, 126, 19);
        box-shadow: 0.5px 5px 5px rgba(93, 93, 93, 0.703);
        outline: none;
    }

    option {
        width: 200px;
        height: 30px;
        border: 1px solid rgb(224, 224, 224);
        border-radius: 5px;
        padding-left: 10px;
        margin-bottom: 10px;
        color: rgb(157, 157, 157);
    }

    option:hover {
        transition: 0.3s;
        border: 1px solid rgb(232, 126, 19);
        color: rgb(232, 126, 19);
        box-shadow: 0.5px 5px 5px rgba(93, 93, 93, 0.703);
        outline: none;
    }

    input:focus {
        border: 1px solid rgb(232, 126, 19);
        box-shadow: 0.5px 5px 5px rgba(93, 93, 93, 0.703);
        outline: none;
    }

    input[type="submit"] {
        /* width: 100px;
        height: 30px; */
        border: 1px solid rgb(224, 224, 224);
        border-radius: 5px;
        background-color: rgb(232, 126, 19);
        color: white;
        font-weight: 600;
        cursor: pointer;
        /* margin-left: 80px;
        margin-top: 10px; */
    }

    input[type="submit"]:hover {
        transition: 0.3s;
        border: 1px solid rgb(232, 126, 19);
        color: rgb(232, 126, 19);
        background-color: white;
        box-shadow: 0.5px 5px 5px rgba(93, 93, 93, 0.703);
        outline: none;
    }

    textarea {
        transition: 0.3s ease-in-out;
        width: 200px;
        height: 100px;
        border: 1px solid rgb(224, 224, 224);
        border-radius: 5px;
        padding-left: 10px;
        margin-bottom: 10px;
    }

    textarea:focus {
        /* transition: 0.3s ease-in-out; */
        border: 1px solid rgb(232, 126, 19);
        box-shadow: 0.5px 5px 5px rgba(93, 93, 93, 0.703);
        width: 98%;
        outline: none;
    }
    /* Existing code */

    input[type="file"] {
        width: 200px;
        height: 30px;
        border: 1px solid rgb(224, 224, 224);
        color: rgb(157, 157, 157);
        border-radius: 5px;
        padding-left: 10px;
        margin-bottom: 10px;
        background-color: white;
        cursor: pointer;
    }

    input[type="file"]:focus {
        transition: 0.3s;
        border: 1px solid rgb(232, 126, 19);
        color: rgb(232, 126, 19);
        box-shadow: 0.5px 5px 5px rgba(93, 93, 93, 0.703);
        outline: none;
    }

    input[type="file"]::file-selector-button {
        padding: 5px 10px;
        border-radius: 5px;
        border: none;
        background-color: rgb(232, 126, 19);
        color: white;
        font-weight: 600;
        cursor: pointer;
    }

    input[type="file"]::file-selector-button:hover {
        transition: 0.3s;
        background-color: white;
        color: rgb(232, 126, 19);
        border: 1px solid rgb(232, 126, 19);
        /* box-shadow: 0.5px 5px 5px rgba(93, 93, 93, 0.703); */
        outline: none;
    }
</style>