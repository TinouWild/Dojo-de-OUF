<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 28/09/18
 * Time: 11:23
 */

// Avec cette version, on n'utilise pas les attributs créés dans
// la classe calculette car on utilise les variables directement
// dans la fonction de index.php !

class calculette {

    // attributs avec syntaxe : public $nomdevariable;
    //    public $prix; (ICI ON UTILISE PAS LES ATTRIBUTS)
    //    public $tva; (ICI ON UTILISE PAS LES ATTRIBUTS)


    // déclaration de deux méthodes (alias une fonction);
    // syntaxe d'une fonction : public function nomdelafonction() {
    // TA FONCTION
    // }
    public function ttc($prix, $tva){
        return $prix * $tva;
    }

    // Cette fonction attend deux variables, prix et tva
    // qui sont indiquées à la ligne 8 et 11 de index.php

    public function ht($prix, $tva){
        return $prix / $tva;
    }

    // Cette fonction attend deux variables en entrée, prix et tva
    // qui sont indiquées à la ligne 8 et 11 de index.php

}