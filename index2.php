<?php

require "calculette2.php";

if(@$_POST['calculer']=='calcul'){
    if(@$_POST['type']==='HT'){
        $montant = new calculette();
        echo $montant->ttc($_POST['montant'], $_POST['tva']);
    } else {
        $montant = new calculette();
        echo $montant->ht($_POST['montant'], $_POST['tva']);
    }
}

?>

<form method="post">

    <input type="float" name="montant" id="montant">
    <select id="type" name="type">
        <option value="HT">HT</option>
        <option value="TTC">TTC</option>
    </select>
    <select id="tva" name="tva">
        <option value="1.05">5%</option>
        <option value="1.1">10%</option>
        <option value="1.15">15%</option>
        <option value="1.2">20%</option>
    </select>
    <input type="submit" name="calculer" id="calculer" value="calcul">

</form>