<h1> Faire une fonction qui renvoie true si la chaîne du premier élément du tableau contient toutes les lettres de la chaîne du deuxième élément du tableau </h1>





<?php

// je compare les deux clefs du tableaux
// toutes les lettres de la deuxieme clef doivent être dans la premiere
// il faut que  array[0] == array [1]
// passer la clef en minuscule
// prendre chaque lettre du 2 eme element pour verifier si elles sont dans le premier 
// mutation(["Mary", "Army"])devrait revenir true
?>

<?php // fonction qui prend en parametre un tableau pour vérifier 
function mutation($array)
{
    // chaine de caractere str
    $word1 = $array[0];
    //chaine de caractere split donc un tableau
    $word2ar = str_split($array[1]);
    var_dump($word2ar);

    foreach ($word2ar as $letter) {
        if (!stristr($word1, $letter)) {
            return false;
        }
    }
    return true;
}

echo '<pre>';
var_dump(
    mutation(["Mary", "Army"])
);
echo '</pre>';
?>


<form method="post">
    Entrer un chiffre pour en écrire ça table : <input type="text" name="nombre">
</form>
<?php
var_dump($_POST);
if (isset($_POST)) {
    $nombre = $_POST['nombre'];
    for ($i = 0; $i <= 10; $i++) {
        $result = $nombre * $i;

        echo $nombre . ' fois ' . $i . ' = ' . $result . '<br>';
    }
}
