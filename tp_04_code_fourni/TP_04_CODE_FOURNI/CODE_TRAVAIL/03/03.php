<?php

// compléter le code : il y a beaucoup TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


/**
 * Il n'est pas possible de faire une fonction pour factoriser le
 * code demandé.
 * En effet passer une variable qui n'existe pas à une fonction, crée
 * cette variable (ou plutôt crée une copie).
 * Il va falloir faire de la duplication de code
 *
 * Affichage possible (avec $v = 123):
 *     isset($v)   : true
 *     empty($v)   : false
 *     is_null($v) : false
 *     == NULL     : false
 *     === NULL    : false
 *     valeur      : >>123<< (integer)
 */


echo encadre('exo 3.3, existence', WIDTH_H1, 'left', '*', '*', '*');

echo EOLn;
echo encadre('variable qui n\'existe pas', WIDTH_H2);
// on ne déclare pas $v
// TODO : utiliser isset, empty, is_null, ==, ===, et afficher valeur et type
echo 'isset : '.isset($v).' empty : '.empty($v).' is_null'.is_null($v).' ==NULL'.boolToStr($v==NULL).' ===NULL '. boolToStr($v === NULL). "\n";

echo EOLn;
echo encadre('$v = \'bonjour\'', WIDTH_H2);
$v = 'bonjour';
echo 'isset : '.isset($v).' empty : '.empty($v).' is_null'.is_null($v).' ==NULL'.boolToStr($v==NULL).' ===NULL '. boolToStr($v === NULL). "\n";
// TODO : copier-coller du premier TODO

echo EOLn;
echo encadre('$v = NULL', WIDTH_H2);
$v = NULL;
echo 'isset : '.isset($v).' empty : '.empty($v).' is_null'.is_null($v).' ==NULL'.boolToStr($v==NULL).' ===NULL '. boolToStr($v === NULL). "\n";
// TODO : copier-coller du premier TODO

echo EOLn;
echo encadre('$v = \'\'', WIDTH_H2);
$v = '';
echo 'isset : '.isset($v).' empty : '.empty($v).' is_null'.is_null($v).' ==NULL'.boolToStr($v==NULL).' ===NULL '. boolToStr($v === NULL). "\n";
// TODO : copier-coller du premier TODO

echo EOLn;
echo encadre('$v = 0', WIDTH_H2);
$v = 0;
echo 'isset : '.isset($v).' empty : '.empty($v).' is_null'.is_null($v).' ==NULL'.boolToStr($v==NULL).' ===NULL '. boolToStr($v === NULL). "\n";
// TODO : copier-coller du premier TODO

echo EOLn;
echo encadre('$v = 0.0', WIDTH_H2);
$v = 0.0;
echo 'isset : '.isset($v).' empty : '.empty($v).' is_null'.is_null($v).' ==NULL'.boolToStr($v==NULL).' ===NULL '. boolToStr($v === NULL). "\n";
// TODO : copier-coller du premier TODO

echo EOLn;
echo encadre('$v = []', WIDTH_H2);
$v = [];
echo 'isset : '.isset($v).' empty : '.empty($v).' is_null'.is_null($v).' ==NULL'.boolToStr($v==NULL).' ===NULL '. boolToStr($v === NULL). "\n";
// TODO : copier-coller du premier TODO

echo EOLn;
echo encadre('unset($v)', WIDTH_H2);
unset($v);
echo 'isset : '.isset($v).' empty : '.empty($v).' is_null'.is_null($v).' ==NULL'.@boolToStr($v==NULL).' ===NULL '. @boolToStr($v === NULL). "\n";
// TODO : copier-coller du premier TODO



//===========================================================================
//===========================================================================
echo EOLn;
echo encadre('récapitulatif', WIDTH_H2);

echo 'cf. correction' . EOLn;
