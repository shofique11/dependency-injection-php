<?php
require_once 'ConntectionInterface.php';
 class Mysql implements ConntectionInterface{
      public function connectionDB(){
        echo "Connecting Mysql database\n";
      }
 }
?>