<?php
//ctrl saisies form avant import bdd
function ctrlSaisies($saisie){

    // Convertion caractères spéciaux en entités HTML => peu performant
    // Préférer htmlentities()
    $saisie = htmlspecialchars($saisie, ENT_QUOTES);
    // Suppression des espaces (ou d'autres caractères) en début et fin de chaîne
    $saisie = trim($saisie);
    // Suppression des antislashs d'une chaîne
    $saisie = stripslashes($saisie);
    // Conversion des caractères spéciaux en entités HTML
    $saisie = htmlentities($saisie);
    return $saisie;
}

function bbCodeToHtml($text)
{
    $text = preg_replace('/\[b\](.*?)\[\/b\]/is', '<strong>$1</strong>', $text);
    $text = preg_replace('/\[i\](.*?)\[\/i\]/is', '<em>$1</em>', $text);
    $text = preg_replace('/\[u\](.*?)\[\/u\]/is', '<u>$1</u>', $text);
    $text = preg_replace('/\[br\]/i', '<br>', $text);
    $urlPattern = '#\[url=(.+?)\](.+?)\[/url\]#';
    $urlReplacement = '<a href="$1">$2</a>';
    $text = preg_replace($urlPattern, $urlReplacement, $text);

    return $text;
}

function HtmlToBBCode($text)
{
    $text = preg_replace('/<strong>(.*?)<\/strong>/is', '[b]$1[/b]', $text);
    $text = preg_replace('/<em>(.*?)<\/em>/is', '[i]$1[/i]', $text);
    $text = preg_replace('/<u>(.*?)<\/u>/is', '[u]$1[/u]', $text);
    $text = preg_replace('/<a href="(.*?)">(.*?)<\/a>/is', '[url=$1]$2[/url]', $text);
    $text = preg_replace('/<br>(.*?)/i', '[br]', $text);

    return $text;
}