<?php

    try {

        $bdd = new PDO ( 'mysql:host=localhost;dbname=pcii;port=3606',
            'root',
            '', // Mot de passe
            '' // Options
            );
	
        }
    catch {
        die "Impossible de se connecter à la BDD";
        }
        
    

?>