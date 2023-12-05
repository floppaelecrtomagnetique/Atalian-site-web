<?php
    function candidature($info) {
        include "DB/database.php";

        $candidature = $cand->prepare("INSERT INTO candidature (
            Nom,
            Prénom,
            Email,
            Telephone,
            Secteur,
            Pays
            ) VALUES (
            :nom,
            :prenom,
            :email,
            :telephone,
            :secteur,
            :pays
        )");
        $candidature->execute(
            array(
                ':nom' => $info['nom'],
                ':prenom' => $info['prenom'],
                ':email' => $info['email'],
                ':telephone' => $info['telephone'],
                ':secteur' => $info['secteur'],
                ':pays' => $info['Pays']
            )
        );
        return 0;
    }
?>
        
        <!-- $file_type = $file['cv']['type'];

        move_uploaded_file($file_tmp, "CV/" . $info['nom'] . "_" . $info['prenom']);

        
        $candidature = $cand->prepare("INSERT INTO candidature (
            Nom,
            Prénom,
            Email,
            Telephone,
            Secteur) VALUES (
            :nom,
            :prenom,
            :email,
            :telephone,
            :secteur
        )");
        $candidature->execute(
            array(
                ':nom' => $info['nom'],
                ':prenom' => $info['prenom'],
                ':email' => $info['email'],
                ':telephone' => $info['telephone'],
                ':secteur' => $info['secteur'],
            )
        );
        return 0;
    } -->