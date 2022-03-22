<?php
// isset ($var) Si il($var) existe => true / false
// !isset($var) Si il n'existe pas => true / false
// empty($var) Si il est vide => true / false
// !empty($var) Si il n'est pas vide (ou a une valeur) => true / false
// Condition if (true/false) { }   Si alors
// Sinon alors else {}
// elseif sinon si alors
// j'écris || affiche EN HTML echo ""

// Si $var existe alors je fait var_dump($var);

/* if (isset($var)) { faux
    var_dump($var); ici le code n'est pas exécuté
}
 */

// Echo coucou uniquement quand on a un formulaire

// Tant que mon formulaire n'est pas envoyé je n'ecris pas coucou
// Si ma clef submit a une valeur alors j'écris coucou 
if (!empty($_POST['submit'])) {
    // ici principal
    //var_dump($_POST);
    // je veux que le nom soit rempli sinon affiche ecrit le nom stp
    // SI ma clef nom n'a pas de valeur ALORS j'affiche " ecrit le nom stp" 
    if (empty($_POST['nom'])) {
        echo "Ecrit le nom stp ";
    }

    // je veux que le prenom soit rempli sinon afficher ecrit le prenom stp
    // SI ma clef prenom n'a pas de valeur ALORS j'affiche "ecrit le prenom stp"
    elseif (empty($_POST['prenom'])) {
        echo "Ecrit le prenom stp ";
    }

    // je veux que l'âge soit rempli sinon afficher ecrit l'age stp
    // SI ma clef age n'a pas de valeur ALORS j'affiche "Ecrit ton age"
    elseif (empty($_POST['age'])) {
        echo "Ecrit ton âge ";
    } else {
        $age = $_POST['age'];
        // si l'age est supérieur a 18 on affiche majeur sinon on affiche tu es mineur
        if ($age >= 18) {
            echo "tu es majeur";
        } else {
            echo "Tu es mineur";
        }
    }
} else {
    echo "Tu n'as rien à faire ici ";
}
