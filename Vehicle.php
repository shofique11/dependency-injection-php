<?php
require_once 'Engine.php';

class Vehicle{
    protected $engine;

    public function __construct( Engine $engine )
    {
       $this->engine = $engine;
    }
}

?>