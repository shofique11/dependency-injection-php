<?php
require_once 'VehicleInterface.php';

class Bike implements VehicleInterface{
    public function start()
    {
        echo "Bike started\n";
    }
}
?>