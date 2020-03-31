<?php

    $button=$_POST['button'];
    $key=$_POST['post'];
    $s_file = '../json/images.json';
        // On essayes de récupérer le contenu existant
        $s_fileData = file_get_contents($s_file);


         // On récupère le JSON dans un tableau PHP
          $tableau_pour_json = json_decode($s_fileData, true);

    if ($button == "like"){
        // On ajoute le nouvel élement
        $tableau_pour_json[$key]["note"] += 1;
    }
    if ($button == "dislike"){
            // On ajoute le nouvel élement
            $tableau_pour_json[$key]["note"] -= 1;
        }

        // On réencode en JSON
        $contenu_json = json_encode($tableau_pour_json);

        // On stocke tout le JSON
        file_put_contents($s_file, $contenu_json);
?>