<?php

// compléter le code : il y a beaucoup TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.1, références', WIDTH_H1, 'left', '*', '*', '*');


echo EOLn;
echo encadre('a) copie simple', WIDTH_H2);
unset($a);
unset($b);
$a = 123;
// TODO faites une copie de $a dans $b
$b = $a;
echo 'avant : $a=' . $a . ' et $b=' . $b . EOLn;
// TODO : modifiez $b
$b += 111;
echo 'après : $a=' . $a . ' et $b=' . $b . EOLn;
// TODO : expliquer le comportement
echo '$b est une copie indépendante de $a, donc seule $b est modifiée.' . EOLn;


echo EOLn;
echo encadre('b) "copie" par référence', WIDTH_H2);
unset($a);
unset($b);
$a = 123;
// TODO faites une copie par référence de $a dans $b
$b = &$a;
echo 'avant : $a=' . $a . ' et $b=' . $b . EOLn;
// TODO : modifiez $b
$b += 111;
echo 'après : $a=' . $a . ' et $b=' . $b . EOLn;
// TODO : expliquer le comportement
echo '$a et $b sont deux noms pour la même variable.' . EOLn;


echo EOLn;
echo encadre('c) copie simple de tableau', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
// TODO faites une copie de $a dans $b
$b = $a;
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
// TODO : modifiez une case de $b
$b[1] = 'BBBB';
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
// TODO : expliquer le comportement
echo '$b est une copie indépendante de $a, donc seule $b est modifiée.' . EOLn;
echo 'Donc PHP fait une copie récursive lors d\'une affectation d\'un tableau.' . EOLn;


echo EOLn;
echo encadre('d) "copie" par référence d\'un tableau', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
// TODO faites une copie par référence de $a dans $b
$b = &$a;
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
// TODO : modifiez une case de $b
$b[1] = 'BBBB';
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
// TODO : expliquer le comportement
echo '$a et $b sont deux noms pour la même variable.' . EOLn;


echo EOLn;
echo encadre('e) "copie" par référence d\'un tableau (bis)', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
// TODO faites une copie par référence de $a dans $b
$b = &$a;
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
// TODO : affecter un nouveau tableau à $b
$b = [11, 22, 33];
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
// TODO : expliquer le comportement
echo '$a et $b sont deux noms pour la même variable.' . EOLn;
echo 'Le fait de modifier une case ou tout le tableau ne change rien' . EOLn;
echo 'au comportement, les "deux" (qui n\'en sont qu\une) variables' . EOLn;
echo 'sont modifiées' . EOLn;

