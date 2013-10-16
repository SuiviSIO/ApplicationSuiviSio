<?php
include_once 'control.class.php';

class Synthese extends Control {

    /***** modifié par le LLB le 26-06-12 *****/
    public function __construct($util, $type, $get=null) { //ajout du paramètre $type
        parent::__construct($util);

        $this->model();
        $model = new Model();

        //tableau reglementaire en premiere page
        $data["tableau"]=$model->getTableauSyntheseNew($util->getId());

        //puis une page par situation
        //pas vues dans cette version
        $data["synth"]=$model->getSynth($util->getId());
        $model->close();

        $data["auth"]=$this->util->estAuthent();
	
	//en fonction de la lavaleur de $type, la vue appelée ($p) sera :
	//	synthese_f.php si $type=f (pour "formation")
	//	synthese_s1.php si $type=s1 (pour "stage 1ere annee)
	//	synthese_s2.php si $type=s2 (pour stage 2eme annee)
	
	//$p = "synthese_".$type.".php";
        $p = "synthese.php";
	
	$this->view->init($p,$data);

    }
}


?>
