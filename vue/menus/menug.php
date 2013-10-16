<div class="menuh">
<h4><a href="index.php?action=eaccueil&q=e">Espace &eacute;tudiant</a></h4>
</div>

<div class="menu">
<h4><a href="javascript:aide('e',1)">Situation professionnelle</a></h4>
<ul>
<?php
    echo '<li><a href="index.php?action=saisie">Nouvelle situation</a></li>';
    echo '<li><a href="index.php?action=gestion&t=s">Gestion situations</a></li>';

?>
</ul>
</div>

<div class="menu">
<h4><a href="javascript:aide('e',2)">Synth&egrave;se</a></h4>
<ul>
<?php
    echo '<li><a href="index.php?action=bilan">Bilan individuel</a></li>';

    /***** commenté par le LLB le 26-06-12 *****/
    echo '<li><a href="index.php?action=synthese" target="_blank">Tableau de synth&egrave;se</a></li>';

    /***** ajouté par le LLB le 26-06-12  *****/
    //echo '<li><a href="index.php?action=synthese&type=f" target="_blank">Synth&egrave;se - TP/PPE</a></li>';
    //echo '<li><a href="index.php?action=synthese&type=s1" target="_blank">Synth&egrave;se - stage 1</a></li>';
    //echo '<li><a href="index.php?action=synthese&type=s2" target="_blank">Synth&egrave;se - stage 2</a></li>';

?>
</ul>
</div>

<div class="menu">
<h4><a href="javascript:aide('e',3)">Divers</a></h4>
<ul>
<?php
    echo '<li><a href="index.php?action=sauve">Sauvegarde</a></li>';
    if ($data["droit"]) {  //etudiant
      echo '<li><a href="index.php?action=modif">Param&egrave;tres</a></li>';
      echo '<br />';
      echo '<li><a href="mailto:'.$data["lien"].'?subject=[portefeuille]">Contact admin</a></li>';
    }
?>
</ul>
</div>
