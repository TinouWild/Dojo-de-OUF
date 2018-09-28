<?php

// déclaration d'une classe (le moule à gâteau)

class calculette {

    // attributs avec syntaxe : public $nomdevariable;
    public $prix;
    public $tva;


    // déclaration de deux méthodes (alias une fonction);
        // syntaxe d'une fonction : public function nomdelafonction() {
            // TA FONCTION
            // }
    public function ttc(){
        return $this->prix * $this->tva;
    }

    public function ht(){
        return $this->prix / $this->tva;
    }


}