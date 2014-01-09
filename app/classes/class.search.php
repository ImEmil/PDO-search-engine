<?php
class Search{
 
	private $s;
 
	public function __construct($database) {
	    $this->s = $database;
	}
	
  public function search($keyword) {
	    $exc = $this->s->prepare("SELECT * FROM  `users` WHERE `username` LIKE ?");
	    
	    $exc->execute( ['%' . $keyword . '%']);         // Executes an array |>  <> Require PHP >= 5.4.0 
	    
	    return $exc->fetch(PDO::FETCH_OBJ);
	}
}
