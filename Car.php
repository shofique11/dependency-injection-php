<?php
require_once 'VehicleInterface.php';
 class Car implements VehicleInterface{
    public function start(){
        echo "Car started\n";
    }
 }
?>