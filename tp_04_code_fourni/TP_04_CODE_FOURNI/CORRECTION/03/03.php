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
echo 'Attention, warnings neutralisés avec la directive @' . EOLn;

echo EOLn;
echo encadre('variable qui n\'existe pas', WIDTH_H2);
// on ne déclare pas $v
// TODO : utiliser isset, empty, is_null, ==, ===, et afficher valeur et type
echo 'isset($v)   : ' . boolToStr(isset($v)) . EOLn;
echo 'empty($v)   : ' . boolToStr(empty($v)) . EOLn;
echo 'is_null($v) : ' . @boolToStr(is_null($v)) . EOLn;
echo '== NULL     : ' . @boolToStr($v == NULL) . EOLn;
echo '=== NULL    : ' . @boolToStr($v === NULL) . EOLn;
echo 'valeur      : ' . '>>' . @$v . '<< (' . @gettype($v) . ')' . EOLn;

echo EOLn;
echo encadre('$v = \'bonjour\'', WIDTH_H2);
$v = 'bonjour';
// TODO : copier-coller du premier TODO
echo 'isset($v)   : ' . boolToStr(isset($v)) . EOLn;
echo 'empty($v)   : ' . boolToStr(empty($v)) . EOLn;
echo 'is_null($v) : ' . boolToStr(is_null($v)) . EOLn;
echo '== NULL     : ' . boolToStr($v == NULL) . EOLn;
echo '=== NULL    : ' . boolToStr($v === NULL) . EOLn;
echo 'valeur      : ' . '>>' . $v . '<< (' . gettype($v) . ')' . EOLn;

echo EOLn;
echo encadre('$v = NULL', WIDTH_H2);
$v = NULL;
// TODO : copier-coller du premier TODO
echo 'isset($v)   : ' . boolToStr(isset($v)) . EOLn;
echo 'empty($v)   : ' . boolToStr(empty($v)) . EOLn;
echo 'is_null($v) : ' . boolToStr(is_null($v)) . EOLn;
echo '== NULL     : ' . boolToStr($v == NULL) . EOLn;
echo '=== NULL    : ' . boolToStr($v === NULL) . EOLn;
echo 'valeur      : ' . '>>' . $v . '<< (' . gettype($v) . ')' . EOLn;

echo EOLn;
echo encadre('$v = \'\'', WIDTH_H2);
$v = '';
// TODO : copier-coller du premier TODO
echo 'isset($v)   : ' . boolToStr(isset($v)) . EOLn;
echo 'empty($v)   : ' . boolToStr(empty($v)) . EOLn;
echo 'is_null($v) : ' . boolToStr(is_null($v)) . EOLn;
echo '== NULL     : ' . boolToStr($v == NULL) . EOLn;
echo '=== NULL    : ' . boolToStr($v === NULL) . EOLn;
echo 'valeur      : ' . '>>' . $v . '<< (' . gettype($v) . ')' . EOLn;

echo EOLn;
echo encadre('$v = 0', WIDTH_H2);
$v = 0;
// TODO : copier-coller du premier TODO
echo 'isset($v)   : ' . boolToStr(isset($v)) . EOLn;
echo 'empty($v)   : ' . boolToStr(empty($v)) . EOLn;
echo 'is_null($v) : ' . boolToStr(is_null($v)) . EOLn;
echo '== NULL     : ' . boolToStr($v == NULL) . EOLn;
echo '=== NULL    : ' . boolToStr($v === NULL) . EOLn;
echo 'valeur      : ' . '>>' . $v . '<< (' . gettype($v) . ')' . EOLn;

echo EOLn;
echo encadre('$v = 0.0', WIDTH_H2);
$v = 0.0;
// TODO : copier-coller du premier TODO
echo 'isset($v)   : ' . boolToStr(isset($v)) . EOLn;
echo 'empty($v)   : ' . boolToStr(empty($v)) . EOLn;
echo 'is_null($v) : ' . boolToStr(is_null($v)) . EOLn;
echo '== NULL     : ' . boolToStr($v == NULL) . EOLn;
echo '=== NULL    : ' . boolToStr($v === NULL) . EOLn;
echo 'valeur      : ' . '>>' . $v . '<< (' . gettype($v) . ')' . EOLn;

echo EOLn;
echo encadre('$v = []', WIDTH_H2);
$v = [];
// TODO : copier-coller du premier TODO
echo 'isset($v)   : ' . boolToStr(isset($v)) . EOLn;
echo 'empty($v)   : ' . boolToStr(empty($v)) . EOLn;
echo 'is_null($v) : ' . boolToStr(is_null($v)) . EOLn;
echo '== NULL     : ' . boolToStr($v == NULL) . EOLn;
echo '=== NULL    : ' . boolToStr($v === NULL) . EOLn;
//echo 'valeur      : ' . '>>' . $v . '<< (' . gettype($v) . ')' . EOLn;

echo EOLn;
echo encadre('unset($v)', WIDTH_H2);
unset($v);
// TODO : copier-coller du premier TODO
echo 'isset($v)   : ' . boolToStr(isset($v)) . EOLn;
echo 'empty($v)   : ' . boolToStr(empty($v)) . EOLn;
echo 'is_null($v) : ' . @boolToStr(is_null($v)) . EOLn;
echo '== NULL     : ' . @boolToStr($v == NULL) . EOLn;
echo '=== NULL    : ' . @boolToStr($v === NULL) . EOLn;
echo 'valeur      : ' . '>>' . @$v . '<< (' . @gettype($v) . ')' . EOLn;



//===========================================================================
//===========================================================================
echo EOLn;
echo encadre('récapitulatif', WIDTH_H2);

function hsep(int $wTitle, int $wCol, int $nbCol)
{
    $r = str_repeat(' ', $wTitle + 1);
    for ($i = 0; $i < $nbCol; $i ++)
    {
        if ($i == $nbCol - 1)
            $r .= '+';
        $r .= '+' . str_repeat('-', $wCol + 2);
    }
    $r .= '+' . EOLn;
    return $r;
}

function headers(int $wTitle, int &$wCol, int &$nbCol)
{
    $tab = [ 'isset', 'is_null', 'empty', '==', '===', 'type' ];
    $r = '';
    
    $nbCol = count($tab);
    $wCol = 0;
    for ($i = 0; $i < $nbCol; $i ++)
        $wCol = max($wCol, mb_strlen($tab[$i]));
    
    $r .= hsep($wTitle, $wCol, $nbCol);
    $r .= str_repeat(' ', $wTitle + 1);
    for ($i = 0; $i < $nbCol; $i ++)
    {
        if ($i == $nbCol - 1)
            $r .= '|';
        $r .= '| ' . justifie($tab[$i], $wCol) . ' ';
    }
    $r .= '|' . EOLn;
    $r .= hsep($wTitle, $wCol, $nbCol);
    return $r;
}

function line($value, String $titre = '', bool $isset = true, int $wt = 0, int $wr = 0) : String
{
    if ($isset)
        $v = $value;

    $r = justifie($titre, $wt);
    $r .= ' | ';
    $r .= justifie(boolTostr(isset($v)), $wr);
    $r .= ' | ';
    $r .= justifie(@boolTostr(is_null($v)), $wr);
    $r .= ' | ';
    $r .= justifie(boolTostr(empty($v)), $wr);
    $r .= ' | ';
    $r .= justifie(@boolTostr($v == NULL), $wr);
    $r .= ' | ';
    $r .= justifie(@boolTostr($v === NULL), $wr);
    $r .= ' || ';
    $r .= justifie(@gettype($v), $wr);
    $r .= ' |' . EOLn;
    return $r;
}

$wTitle = 7;
$wCol = -1;
$nbCol = -1;
echo headers($wTitle, $wCol, $nbCol);
echo line('unset', '(rien)', false, $wTitle, $wCol);
echo line('aa', '\'aa\'', true, $wTitle, $wCol);
echo line(NULL, 'NULL', true, $wTitle, $wCol);
echo line('', '\'\'', true, $wTitle, $wCol);
echo line(0, '0', true, $wTitle, $wCol);
echo line(0.0, '0.0', true, $wTitle, $wCol);
echo line([], '[]', true, $wTitle, $wCol);
echo hsep($wTitle, $wCol, $nbCol);

echo "Il n'y a pas de différence réelle, du point de vue de PHP, entre une
variable inexistante et une variable positionnée à NULL.
On note le \"== NULL\" qui n'est pas très pertinent, au contraire du \"===\"." . EOLn;
