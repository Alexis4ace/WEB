<?php

// passage à la ligne : mode texte ou mode html
define('EOLn', "\n");
define('EOLbr', '<br />');


//=========================================================================
/**
 * Transforme un booléen en chaîne
 *
 * @param $b : le booléen
 * @return 'true' ou 'false'
 */
function boolToStr(bool $b) : String
{
    return $b ? 'true' : 'false';
}


//=========================================================================
/**
 * Ajoute des espaces à  une chaîne pour avoir une largeur choisie
 *
 * @param $s : la chaîne à justifier
 * @param $width : la largeur du texte, 0 pour une largeur minimale
 * @param $align : 'left', 'center', 'right'
 * @return la chaine justifiée
 */
function justifie(String $s, int $width = 0, String $align = 'left') : String
{
    $nbEspaces = max(0, $width - mb_strlen($s));
    if ($align === 'right')
    {
        $nbLeft = $nbEspaces;
        $nbRight = 0;
    }
    elseif ($align == 'center')
    {
        $nbLeft = intdiv($nbEspaces, 2);
        $nbRight = intdiv($nbEspaces + 1, 2);
    }
    else // 'left' ou autre chose
    {
        $nbLeft = 0;
        $nbRight = $nbEspaces;
    }
    
    return str_repeat(' ', $nbLeft) . $s . str_repeat(' ', $nbRight);
}


//=========================================================================
/**
 * Encadre un texte d'une ligne
 *
 * @param $s : la chaîne à encadrer
 * @param $width : la largeur du texte, 0 pour une largeur minimale
 * @param $align : 'left', 'center', 'right'
 * @param $h : pour les traits horizontaux
 * @param $v : pour les traits verticaux
 * @param $c : pour les coins
 * @return la chaine encadrée
 */
function encadre(String $s, int $width = 0, String $align = 'left',
                 String $h = '-', String $v = '|', String $c = '+') : String
{
    $len = mb_strlen($s);
    $extra = max(0, $width - $len);
    $line = $c . str_repeat($h, $len + $extra + 2) . $c . EOLn;
    $result = '';

    $result .= $line;
    $result .= $v . ' ' . justifie($s, $len + $extra, $align) . ' ' . $v . EOLn;
    $result .= $line;

    return $result;
}


//=========================================================================
// Pour tester
if (false)
{
    $w = 17;
    echo encadre('test fonction boolToStr', 60, 'left', '=', '*', '*');
    echo justifie('boolToStr(true)', $w, 'left') .    ' : ' . boolToStr(true) . EOLn;
    echo justifie('boolToStr(false)', $w, 'left') .   ' : ' . boolToStr(false) . EOLn;
    echo justifie('boolToStr(1)', $w, 'left') .       ' : ' . boolToStr(1) . EOLn;
    echo justifie('boolToStr(0)', $w, 'left') .       ' : ' . boolToStr(0) . EOLn;
    //echo justifie('boolToStr(null)', $w, 'left') .  ' : ' . boolToStr(null) . EOLn;
    echo justifie('boolToStr(\'aaa\')', $w, 'left') . ' : ' . boolToStr('aaa') . EOLn;
    echo justifie('boolToStr(\'\')', $w, 'left') .    ' : ' . boolToStr('') . EOLn;
    echo justifie('boolToStr(\'1\')', $w, 'left') .   ' : ' . boolToStr('1') . EOLn;
    echo justifie('boolToStr(\'0\')', $w, 'left') .   ' : ' . boolToStr('0') . EOLn;

    echo EOLn;
    echo encadre('test fonction justifie', 60, 'left', '=', '*', '*');
    echo '>' . justifie('bébé', 0, 'left') . '<' . EOLn;
    echo '>' . justifie('bébé', 0, 'center') . '<' . EOLn;
    echo '>' . justifie('bébé', 0, 'right') . '<' . EOLn;
    echo '>' . justifie('bébé', 7, 'left') . '<' . EOLn;
    echo '>' . justifie('bébé', 7, 'center') . '<' . EOLn;
    echo '>' . justifie('bébé', 7, 'right') . '<' . EOLn;
    echo '>' . justifie('bébé', 8, 'left') . '<' . EOLn;
    echo '>' . justifie('bébé', 8, 'center') . '<' . EOLn;
    echo '>' . justifie('bébé', 8, 'right') . '<' . EOLn;

    echo EOLn;
    echo encadre('test fonction encadre', 60, 'left', '=', '*', '*');
    echo 'chaine' . EOLn;
    echo encadre('aa');
    echo 'null (ça plante)' . EOLn;
    //echo encadre(null);
    echo 'entier' . EOLn;
    echo encadre(12);
    echo 'booléens' . EOLn;
    echo encadre(true);
    echo encadre(false);
    echo 'avec accent' . EOLn;
    echo encadre('bébé');
    echo encadre('bébé', 0, 'left', '=', '#', '*');
    echo 'largeur à 3, 4, 5 et 6' . EOLn;
    echo encadre('bébé', 3);
    echo encadre('bébé', 4);
    echo encadre('bébé', 5);
    echo encadre('bébé', 6);
    echo 'justification avec 3 espaces supplémentaires' . EOLn;
    echo encadre('bébé', 7, 'left');
    echo encadre('bébé', 7, 'center');
    echo encadre('bébé', 7, 'right');
    echo 'justification avec 4 espaces supplémentaires' . EOLn;
    echo encadre('bébé', 8, 'left');
    echo encadre('bébé', 8, 'center');
    echo encadre('bébé', 8, 'right');
}
