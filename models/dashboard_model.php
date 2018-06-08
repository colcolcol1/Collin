<?php
/**
 *
 */
class Dashboard_Model extends Model
{

  function __construct(){
    parent::__construct();
  }

    function xhrInsert(){

        $text = $_POST['text'];

        $sth = $this->db->prepare("INSERT INTO data (text) VALUES (:text)");
        $sth->execute(array(':text' => $text));
    }
    function xhrGetListings(){
      $sth = $this->db->query('SELECT * FROM data');
      $sth->execute();
      $data = $sth->fetchALL();
      echo json_encode($data);
    }

}


 ?>
