<?php
require_once  'Vehicle.php';
require_once  'Bike.php';
require_once  'car.php';

 class Driver{
    protected $vehicle;
    public function __construct( VehicleInterface $vehicle )
    {
       
       // $this->vehicle = new Vehicle();  // Hardcoded dependencies
        // Use dependency injection by passing the vehicle instance
        // Construction Injection
       $this->vehicle = $vehicle;
    }

    public function startVehicle(){
        $this->vehicle->start();
    }
 }

 $engine =  new Engine();

 $bike = new bike($engine);
 $car = new Car($engine);

 $driver1  = new Driver($bike);
 $driver1->startVehicle();

 $driver2  = new Driver($car);
 $driver2->startVehicle();
?>