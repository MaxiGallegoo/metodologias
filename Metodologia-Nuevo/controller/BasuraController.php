<?php

require_once "./view/BasuraView.php";
require_once "./model/BasuraModel.php";
require_once  "SecuredController.php";

class BasuraController extends SecuredController
{
  private $view;
  private $model;
  private $modelJefe;
  private $Titulo;
  private $controllerAdmin;

  function __construct()
  {
    parent::__construct();

    $this->model = new BasuraModel();
    $this->modelJefe = new JefeModel();
    $this->Titulo = "Lista de Lugares";
    $this->view = new BasuraView();
  }
 //Todo lo relacionado a Home
  function HomeBase($message = ''){
      $Mapa = $this->model->GetLugares();
      $this->view->ViewBase($message, $this->Titulo, $Mapa);
  }

  function InsertarLugar(){

  }
  function BorrarLugar($param){

  }
  function HomeJefe($message = ''){

  }



}
?>
