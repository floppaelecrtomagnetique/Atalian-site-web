<?php

    define('En_cours', 0);
    define('Validé', 1);
    define('Refusé', 2);

    const hierarchie = [
        'DG',
        'DCM',
        'DOQ',
        'DRH',
        'DAF',
        'DIT',
        'Employé-DG',
        'Employé-DCM',
        'Employé-DOQ',
        'Employé-DRH',
        'Employé-DAF',
        'Employé-DIT',
        'Autre'
    ];
    define('HOST', "localhost");
    $connectionInfo = array("Database"=>"test_congés", "UID"=>"Amaury-PC\amaur", "PWD"=>"");

    try {
        $carrière = new PDO("mysql:HOST=". HOST . ";dbname=carrière; charset=utf8", "root", "");
    } catch (PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    try {
        $cand = new PDO("mysql:HOST=". HOST . ";dbname=candidature; charset=utf8", "root", "");
    } catch (PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    // header( 'content-type: text/html; charset=utf-8' );
?>