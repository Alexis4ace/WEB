<?php

// compléter le code : il y a plein de TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 5.5, hashage', WIDTH_H1, 'left', '*', '*', '*');

function compare(String $s1, String $s2, $prefix = '') : void
{
    echo $prefix;
    if ($s1 === $s2)
        echo 'même hashage';
    else
        echo 'hashages différents';
    echo EOLn;
}

// le mot de passe qui va être hashé par différents algorithmes
$not_encoded = "toto";
echo EOLn;
echo 'Le mot de passe en clair est : ->' . $not_encoded . '<-' . EOLn;

// note : on appelle systématiquement deux fois la fonction pour voir
//      : si c'est le même hash qui est généré chaque fois

//----------------------------------------------------------------------------
echo EOLn;
echo encadre('a) md5', WIDTH_H2);

// TODO $r1 = utilisation de md5
// TODO $r2 = même utilisation
$r1 = md5($not_encoded);
$r2 = md5($not_encoded);
echo '      -> ' . $r1 . EOLn;
echo '(bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '         ');
echo 'Injectez ce hash dans le site "https://md5decrypt.net" ou "https://md5hashing.net"' . EOLn;


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('b) crypt', WIDTH_H2);

echo 'avec le grain de sel "salt" :' . EOLn;
// TODO $r1 = utilisation de crypt avec le grain de sel 'salt' (ou ce que vous voulez)
// TODO $r2 = même utilisation
$r1 = crypt($not_encoded, 'salt');
$r2 = crypt($not_encoded, 'salt');
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');

echo 'avec le grain de sel "pepper" :' . EOLn;
// TODO $r1 = utilisation de crypt avec le grain de sel 'pepper' (ou ce que vous voulez)
// TODO $r2 = même utilisation
$r1 = crypt($not_encoded, 'pepper');
$r2 = crypt($not_encoded, 'pepper');
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('c) sha1', WIDTH_H2);

// TODO $r1 = utilisation de sha1
// TODO $r2 = même utilisation
$r1 = sha1($not_encoded);
$r2 = sha1($not_encoded);
echo '      -> ' . $r1 . EOLn;
echo '(bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '         ');


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('d) password_hash', WIDTH_H2);

echo 'avec "PASSWORD_DEFAULT" :' . EOLn;
// TODO $r1 = utilisation de password_hash avec l'option PASSWORD_DEFAULT
// TODO $r2 = même utilisation
$r1 = password_hash($not_encoded, PASSWORD_DEFAULT);
$r2 = password_hash($not_encoded, PASSWORD_DEFAULT);
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');

echo 'avec "PASSWORD_BCRYPT" :' . EOLn;
// TODO $r1 = utilisation de password_hash avec l'option PASSWORD_BCRYPT
// TODO $r2 = même utilisation
$r1 = password_hash($not_encoded, PASSWORD_BCRYPT);
$r2 = password_hash($not_encoded, PASSWORD_BCRYPT);
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');

echo 'avec "PASSWORD_ARGON2I" :' . EOLn;
// TODO $r1 = utilisation de password_hash avec l'option PASSWORD_ARGON2I
// TODO $r2 = même utilisation
$r1 = password_hash($not_encoded, PASSWORD_ARGON2I);
$r2 = password_hash($not_encoded, PASSWORD_ARGON2I);
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');

echo 'avec "PASSWORD_ARGON2ID" :' . EOLn;
// TODO $r1 = utilisation de password_hash avec l'option PASSWORD_ARGON2ID
// TODO $r2 = même utilisation
$r1 = password_hash($not_encoded, PASSWORD_ARGON2ID);
$r2 = password_hash($not_encoded, PASSWORD_ARGON2ID);
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('e) coût imposé', WIDTH_H2);

printf("coût : temps en seconde(s) : attention à la température du processeur\n");
for ($i = 8; $i <= 18; $i ++)
{
    $start = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, ["cost" => $i]);
    $end = microtime(true);
    printf("%4d : %9.f\n", $i, $end - $start);
}
echo 'Quand on augmente le coût de 1, le temps de calcul est doublé' . EOLn;


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('f) pour les curieux', WIDTH_H2);

$m1 = 'QNKCDZO';
$m2 = 'A169818202';
$r1 = md5($m1);
$r2 = md5($m2);
echo 'mdp1 : ' . $m1 . EOLn;
echo 'mdp2 : ' . $m2 . EOLn;
if ($r1 == $r2)
{
    echo 'Les mots de passe ont les mêmes encodages !!!' . EOLn;
    echo 'Aurait-on trouvé une collision ???' . EOLn;
    // décommenter les 3 lignes
    echo 'mdp1 : ' . $r1 . EOLn;
    echo 'mdp2 : ' . $r2 . EOLn;
    echo 'où est le problème ?' . EOLn;
    echo 'Avec ==, PHP transforme une chaîne en nombre si la chaîne'. EOLn;
    echo 'peut être interprétée comme telle. Or il y a une notation'. EOLn;
    echo 'exponentielle, par exemple :' . EOLn;
    echo '    0e25 = 0 * 10^25 = 0'. EOLn;
    echo 'Bref les deux chaînes sont évaluées à 0 et sont égales (par ==)'. EOLn;
    echo 'Il faut utiliser ===.'. EOLn;
}

