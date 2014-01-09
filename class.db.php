<?php
/*

                                                   +-+-+-+-+-+-+
                                                   |I|m|E|m|i|l|
                                                   +-+-+-+-+-+-+
                                         
*/
  try {
    $c = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $s = new PDO('mysql:host='. host .';dbname='. dbname .'', username, password, $c);
    
    } catch (PDOException $e) {
    
    echo 'Error --> ' . $e->getMessage();
    
  }
 
