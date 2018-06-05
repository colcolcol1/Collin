<?php
/**
 *
 */
class Controller
{

  function __construct()
  {
    $this->view = new View();

    }
  }
  function loadModel($name){

    $path = 'models/'.$name.'_model.php';

    if (file_exists($path)) {
      require 'models/'.$name.'_model.php';
      $modelName = $name . '_Model.php';
      $this->model = new $modelName;
  }
}

 ?>
