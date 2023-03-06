<?php

// compléter le code : il y a beaucoup TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.2, paramètres', WIDTH_H1, 'left', '*', '*', '*');


// a) ========================================================================
echo EOLn;
echo encadre('a) passage par copie d\'un type simple', WIDTH_H2);

// TODO écrire la fonction fa qui prend un entier en paramètre est l'incrémente
function fa(int $x ){
	$x++;
}	
unset($a);
$a = 123;
echo 'avant : $a=' . $a . EOLn;
fa($a);   // TODO : à décommenter
echo 'après : $a=' . $a . EOLn;
// variable fct changer // TODO : expliquer le comportement


// b) ========================================================================
echo EOLn;
echo encadre('b) passage par copie d\'un tableau', WIDTH_H2);

// TODO écrire la fonction fb qui prend un tableau en paramètre et
//      modifie la 2me case
function fb( array $t ) {
	$t[1]='lol';
}
unset($a);
$a = ['aa', 'bb', 'cc'];
echo 'avant : $a=';
print_r($a);
fb($a);   // TODO : à décommenter
echo 'après : $a=';
print_r($a);
// copie du tableau modifier non original
// TODO : expliquer le comportement


// c) ========================================================================
echo EOLn;
echo encadre('c) passage par référence', WIDTH_H2);

// TODO écrire la fonction fc qui prend, par référence, un tableau en
//      paramètre et modifie la 2me case
function fc( array &$t ){
	$t[1] = 'lol' ;
}
unset($a);
$a = ['aa', 'bb', 'cc'];
echo 'avant : $a=';
print_r($a);
fc($a);   // TODO : à décommenter
echo 'après : $a=';
print_r($a);
// TODO : expliquer le comportement


// d) ========================================================================
echo EOLn;
echo encadre('d) passage d\'un littéral par référence', WIDTH_H2);

function fd( int $d ) {
	$d++;
}
// TODO écrire la fonction fd qui prend, par référence, un entier en
//      paramètre et l'incrémente

fd(13);   // TODO : à décommenter pour voir le comportement
// TODO : expliquer le comportement

