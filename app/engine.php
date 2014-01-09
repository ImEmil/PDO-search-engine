<?php
/*

                                                   +-+-+-+-+-+-+
                                                   |I|m|E|m|i|l|
                                                   +-+-+-+-+-+-+
                                         
*/

  function clean($string) {
    return trim(strip_tags(htmlspecialchars($string, ENT_QUOTES, 'UTF-8')));
  }


  require('app/config.php');
  require('classes/class.db.php');
  require('classes/class.search.php');
  
  $s        = new Search($s);
