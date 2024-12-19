<?php
// Fonction pour afficher le menu principal
function afficherMenu() {
    echo "Bienvenue dans l'application éducative !\n";
    echo "Choisissez un jeu :\n";
    echo "1. Jeu des couleurs\n";
    echo "2. Jeu des formes\n";
    echo "3. Jeu des nombres\n";
    echo "4. Jeu des lettres\n";
    echo "5. Jeu de mémoire\n";
    echo "6. Jeu des additions\n";
    echo "7. Quitter\n";
    echo "Votre choix : ";
}

// Boucle principale de l'application
while (true) {
    afficherMenu();
    $choix = trim(fgets(STDIN));

    switch ($choix) {
        case 1:
            jeuCouleurs();
            break;
        case 2:
            jeuFormes();
            break;
        case 3:
            jeuNombres();
            break;
        case 4:
            jeuLettres();
            break;
        case 5:
            jeuMemoire();
            break;
        case 6:
            jeuAdditions();
            break;
        case 7:
            echo "Au revoir !\n";
            exit;
        default:
            echo "Choix invalide. Veuillez réessayer.\n";
            break;
    }
}

// Fonction pour le jeu des couleurs
function jeuCouleurs() {
    $couleurs = ["rouge", "vert", "bleu", "jaune", "orange", "violet"];
    $couleurAleatoire = $couleurs[array_rand($couleurs)];
    echo "Quelle est cette couleur ? " . strtoupper($couleurAleatoire[0]) . str_repeat("_", strlen($couleurAleatoire) - 1) . "\n";
    $reponse = trim(fgets(STDIN));
    if ($reponse == $couleurAleatoire) {
        echo "Bravo ! C'est bien la couleur " . $couleurAleatoire . ".\n";
    } else {
        echo "Désolé, ce n'est pas la bonne couleur. La couleur était " . $couleurAleatoire . ".\n";
    }
}

// Fonction pour le jeu des formes
function jeuFormes() {
    $formes = ["carré", "triangle", "cercle", "rectangle", "oval", "hexagone"];
    $formeAleatoire = $formes[array_rand($formes)];
    echo "Quelle est cette forme ? " . strtoupper($formeAleatoire[0]) . str_repeat("_", strlen($formeAleatoire) - 1) . "\n";
    $reponse = trim(fgets(STDIN));
    if ($reponse == $formeAleatoire) {
        echo "Bravo ! C'est bien la forme " . $formeAleatoire . ".\n";
    } else {
        echo "Désolé, ce n'est pas la bonne forme. La forme était " . $formeAleatoire . ".\n";
    }
}

// Fonction pour le jeu des nombres
function jeuNombres() {
    $nombre = rand(1, 20);
    echo "Quel est ce nombre ? " . str_repeat("_", strlen((string) $nombre)) . "\n";
    $reponse = trim(fgets(STDIN));
    if ($reponse == $nombre) {
        echo "Bravo ! C'est bien le nombre " . $nombre . ".\n";
    } else {
        echo "Désolé, ce n'est pas le bon nombre. Le nombre était " . $nombre . ".\n";
    }
}

// Fonction pour le jeu des lettres
function jeuLettres() {
    $alphabet = range('a', 'z');
    $lettreAleatoire = $alphabet[array_rand($alphabet)];
    echo "Quelle est cette lettre ? " . strtoupper($lettreAleatoire) . "\n";
    $reponse = trim(fgets(STDIN));
    if ($reponse == strtolower($lettreAleatoire)) {
        echo "Bravo ! C'est bien la lettre " . strtoupper($lettreAleatoire) . ".\n";
    } else {
        echo "Désolé, ce n'est pas la bonne lettre. La lettre était " . strtoupper($lettreAleatoire) . ".\n";
    }
}

// Fonction pour le jeu de mémoire
function jeuMemoire() {
    $items = ["pomme", "voiture", "fleur", "poisson", "arbre", "nuage"];
    $itemAleatoire = $items[array_rand($items)];
    echo "Mémorisez cet item : " . $itemAleatoire . "\n";
    sleep(3);
    system('clear'); // Effacer l'écran
    echo "Quel était l'item affiché ? ";
    $reponse = trim(fgets(STDIN));
    if ($reponse == $itemAleatoire) {
        echo "Bravo ! Vous avez bien mémorisé l'item " . $itemAleatoire . ".\n";
    } else {
        echo "Désolé, ce n'est pas le bon item. L'item était " . $itemAleatoire . ".\n";
    }
}

// Fonction pour le jeu des additions
function jeuAdditions() {
    $nombre1 = rand(1, 10);
    $nombre2 = rand(1, 10);
    $resultat = $nombre1 + $nombre2;
    echo "$nombre1 + $nombre2 = ? ";
    $reponse = trim(fgets(STDIN));
    if ($reponse == $resultat) {
        echo "Bravo ! $nombre1 + $nombre2 = $resultat.\n";
    } else {
        echo "Désolé, ce n'est pas la bonne réponse. $nombre1 + $nombre2 = $resultat.\n";
    }
}
php?>
