

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="form.css" />
</head>
<body>
<div>
    Welcome World
</div>


<p> <?= date('d/m/Y h:i:s'); ?> </p>

<?php
echo "bonjours ici c'est php-world";
?>


<!-- BOUCLE
< ?php
$cookie =  0;
while (cookie == true)
{
    if(cookie +1); true ;
    echo cookie;
}
?>
-->

<?php

$adulte = true;

if($adulte)
{
?>

<p>Tu es adulte</p>

<?php
}
?>


?>


<?php
$nombre_de_lignes = 1;

while($nombre_de_lignes <= 8) {
    if ($nombre_de_lignes <= 4){
        echo ' cookie au four n° ' . $nombre_de_lignes . '! <br />';
        $nombre_de_lignes++;
    }
    if ($nombre_de_lignes >4) {
        echo ' cookie trop cuit n° ' . $nombre_de_lignes . '! <br>';
        $nombre_de_lignes++;
    }
}
?>

<!-- créer sont propre tableau à la main-->
<?php
$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';
?>



<?php

$age = 40;

if($age < 12)
{
    echo 'Salut gamin !';
}
elseif($age == 14)
{
    echo 'Tu as 14 ans';
}
else
{
    echo 'Bonjour cher adulte !';
}

?>






<!-- age d'un visiteur'

                    $age_du_visiteur = 22;
                    echo "  Le visiteur a ";
                    echo $age_du_visiteur;
                    echo " ans";

-->

<!-- autre façon d'écrire

                    $age_du_visiteur = 22;
                    echo '  Le visiteur a ' . $age_du_visiteur . ' ans';

-->

<!-- symbole à connaitre
                    == Est égal à

                    > Est supérieur à

                    < Est inférieur à

                    >= Est supérieur ou égal à

                    <= Est inférieur ou égal à

                    != Est différent de
-->

<!--  exemple de condition "if"
                    $age = 8;

                    if ($age <= 12)
                    {
                    echo "Salut gamin !";
                    }
-->


<!-- Mot clé pour condition multiple
        Mot-clé - Signification - Symbole équivalent

        AND             Et               &&

        OR              Ou               ||
-->


<!--  Dans le switch, on indique au début sur quelle variable on travaille (ici $note).
                    $note = 10;

                    switch ($note) // on indique sur quelle variable on travaille
                    {
                        case 0: // dans le cas où $note vaut 0
                            echo "Tu es vraiment un gros nul !!!";
                            break;

                        case 5: // dans le cas où $note vaut 5
                            echo "Tu es très mauvais";
                            break;
-->

<!--  Les tableaux associatifs
                    // On crée notre array $coordonnees
                    $coordonnees = array (
                    'prenom' => 'François',
                    'nom' => 'Dupont',
                    'adresse' => '3 Rue du Paradis',
                    'ville' => 'Marseille');


                    --------------------------

                    Pour appeler la ville:
                                ---
                    echo $coordonnees['ville'];

                    --------------------------

                    Puis on fait une boucle pour tout afficher :
                                ---
                    for ($numero = 0; $numero < 5; $numero++)
                    {
                        echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
                    }
-->

<!-- Vérifier si une clé existe dans l'array :array_key_exists:
                    $coordonnees = array (
                        'prenom' => 'François',
                        'nom' => 'Dupont',
                        'adresse' => '3 Rue du Paradis',
                        'ville' => 'Marseille');

                    if (array_key_exists('nom', $coordonnees))
                    {
                        echo 'La clé "nom" se trouve dans les coordonnées !';
                    }
-->
<!-- strlen: longueur d'une chaîne
Cette fonction retourne la longueur d'une chaîne de caractères, c'est-à-dire le nombre de lettres et de chiffres dont elle est constituée (espaces compris).

                    $phrase = 'Bonjour tout le monde ! Je suis une phrase !';
                    $longueur = strlen($phrase);


                    echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
-->

<!--  Cette instruction ordonne à l'ordinateur : « Insère ici le contenu de la pagemenus.php
      Cela permet de faire la structure d'un site fragment par fragment. exemple entete.php , menu.php , pieddepage.php
                    < ?php include("menus.php"); ?>
-->


<!-- créer un formulaire
                    <form method="post" action="cible.php">

                        <p>
                            On insèrera ici les éléments de notre formulaire.
                        </p>

                    </form>
-->

<!-- Formulaire

-->



</body>
</html>











