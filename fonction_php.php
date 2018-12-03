<?php

/*
Retourne un tableau associatif contenant un tableau de noms de fichiers pour
chaque nom de propriétaire
*/

function groupByOwners($fichier)
    {
        $tableau_associatif_fichier=array();

        foreach($fichier as $key=>$value)
        {
            $tableau_associatif_fichier[$value][]=$key;
        }
        return $tableau_associatif_fichier;
    }

    $fichier = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

groupByOwners($fichier);



/*
supprime les accents d'une chaine de caractères
*/

function remove_accent($str, $encoding = 'utf-8')
  {
    $str = htmlentities($str, ENT_NOQUOTES, $encoding);
    $str = preg_replace('#&([A-za-z])(?:acute|grave|cedil|circ|orn|ring|slash|th|tilde|uml);#',  '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
    $str = preg_replace('#&[^;]+;#', '', $str);
    return $str;
  }

/*
vérifie si un mot est un palindrome
*/

function isPalindrome($word)
  {

    $word = remove_accent($word); //supprime les accents
    $word = strtolower($word); //supprime les majuscules
    $word = trim($word); //suprime espace avant et apès la chaine de caracteres

/* vérifie si le mot est égal à lui-même dans l'ordre inverse */
    if ($word == strrev($word)) return true;
      else return false;
  }

var_dump(isPalindrome("deleveled"));
?>
