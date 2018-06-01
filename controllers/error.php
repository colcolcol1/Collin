<?php
class foutmelding extends Controller{

  function __construct(){
    parent::__construct();
  }
  function index(){
    $this->view->msg = 'THis page doesnt exist';
    $this->view->render('error/index');
  }
}



?>
