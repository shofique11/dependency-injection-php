<?php
require_once 'ConntectionInterface.php';
class Postgresql implements ConntectionInterface{
  public function connectionDB()
  {
    echo "Connection Postgresql database\n";
  }
}
?>