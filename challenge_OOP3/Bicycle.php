<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
       public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }


}
