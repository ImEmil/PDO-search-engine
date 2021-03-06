<?php
class Search{
  
  private $s;

  public function __construct($database) {
	$this->s = $database;
    }
	
  public function search($keyword) {
	$exc = $this->s->prepare("SELECT * FROM  `users` WHERE `username` LIKE ?");
	$exc->execute( ['%' . $keyword . '%']);         // Executes an array |>  <> Require PHP >= 5.4.0
        return $exc->fetchAll();
    }
  
  public function get($form) {
   	return (isset($_GET["{$form}"]) ? true : false);                                                
    }

  public function __destruct() {
    $this->s = null;
  }
}
