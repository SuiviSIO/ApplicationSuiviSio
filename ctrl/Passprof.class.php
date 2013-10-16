<?php
include_once 'control.class.php';


class Passprof extends Control {

    public function __construct($util, $get=null) {
        parent::__construct($util);

        $this->model();
        $model = new Model();
        $data["auth"]=$this->util->estAuthent();

        if (!isset($get["num"])) {
          $data["liste"]=$model->getElevesGroupe($util->getNumGroupe());
          $data["droit"]=$this->util->estProf();
          $model->close();
          $this->setViewMenu();
          $this->view->init('passprof.php',$data);
          $this->setViewBas();
        } else {
          $l=$get["l"];

	  /*****  modifié par le LLB le 26-06-12 *****/
          if ($get["l"]!="b"){
		//3 valeurs possibles pour $get["l"] :
		//	f : formation
		//	s1 : stage 1ère année
		//	s2 : stage 2ème année

		//$p = "synthese_".$get["l"].".php";//$p contient le nom de la vue qui sera appelée en fonction de la valeur de $get["l"]
		$p = "synthese.php";          	


		$data["tableau"]=$model->getTableauSyntheseNew($get["num"]);
          	$data["synth"]=$model->getSynth($get["num"]);
          	$model->close();
          	$this->view->init($p,$data);
          } else {
          	$data["bilan"]=$model->getBilan($get["num"]);
          	$model->close();
          	$this->setViewMenu();
        	$this->view->init('bilan.php',$data);
        	$this->setViewBas();
          }
        }
    }
}


?>
