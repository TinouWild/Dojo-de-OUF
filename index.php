<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 28/09/18
 * Time: 09:22
 */


require "calculette.php";


//$prixht = new calculette();
//$prixht->prix = '10';
//echo $prixht-> ttc();
//
//echo ' <br> ';
//
//$prixttc = new calculette();
//$prixttc->prix ='10';
//echo $prixttc-> ht();

$montant = new calculette();
$montant->prix = $_POST['montant'];
$montant->tva = $_POST['tva'];

if(@$_POST['calculer']=='calcul'){
    if(@$_POST['type']==='HT'){
        echo $montant->ttc();
    } else {
        echo $montant->ht();
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