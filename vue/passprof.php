<?php  include_once 'exit.php'; ?>
<div id="corps">


  <h2>Tableaux</h2>
  <p>Cette page permet de consulter les bilans ou les tableaux de synth&egrave;se (PDF) des
    &eacute;tudiants de votre promotion. Selon l'&eacute;tat d'avancement de leurs
    saisies, certains tableaux peuvent &ecirc;tre vides.</p>

<?php

  $eleves=$data["liste"];

    echo '<table cellspacing="0">';
    
    /*****  modifié par le LLB le 26-06-12 *****/
    echo '<tr><td>Nom</td><td>Pr&eacute;nom</td><td>Synth&egrave;se</td><td>Bilan</td></tr>';    
    //echo '<tr><td>Nom</td><td>Pr&eacute;nom</td><td>Synth&egrave;se (TP/PPE)</td><td>Synth&egrave;se (stage 1)</td><td>Synth&egrave;se (stage 2)</td><td>Bilan</td></tr>';
    

    $li=1;//pyjama
    foreach($eleves as $eleve){
      echo '<tr><td class="td'.$li.'">'.$eleve["nom"].'</td>';
      echo '<td class="td'.$li.'">'.$eleve["prenom"].'</td>';
      
      /***** commenté par le LLB le 26-06-12 *****/
      $lienp='index.php?action=passprof&l=p&num='.$eleve["num"];

      /***  ajouté par le LLB le 26-06-12 ***/
      //$lienf='index.php?action=passprof&l=f&num='.$eleve["num"];
      //$liens1='index.php?action=passprof&l=s1&num='.$eleve["num"];
      //$liens2='index.php?action=passprof&l=s2&num='.$eleve["num"];


      $lienb='index.php?action=passprof&l=b&num='.$eleve["num"];

      /***** commenté par le LLB le 26-06-12 *****/
      echo '<td class="td'.$li.'"><a href="'.$lienp.'" target="_blank">synth&egrave;se</a></td>';

      /*****  ajouté par le LLB le 26-06-12 *****/
      //echo '<td class="td'.$li.'"><a href="'.$lienf.'" target="_blank">synth&egrave;se (TP/PPE)</a></td>';
      //echo '<td class="td'.$li.'"><a href="'.$liens1.'" target="_blank">synth&egrave;se (stage 1)</a></td>';
      //echo '<td class="td'.$li.'"><a href="'.$liens2.'" target="_blank">synth&egrave;se (stage 2)</a></td>';


      echo '<td class="td'.$li.'"><a href="'.$lienb.'">bilan</a></td>';
      echo '</tr>';
      if ($li==1) $li=2; else $li=1;
    }
    echo '</table>';




?>

</div>
