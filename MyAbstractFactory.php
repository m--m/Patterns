<?php
// Abstract Factory pattern

// App must create new tank or airplane and move it
// Author Makarenkov Michael

// Interface of abstarct factory
interface UnitFactory {
    public function create();
}

// Factory of tanks
class TankFactory implements UnitFactory {
    public function create() {
        return new Tank();
    }
}

// Factory of airpalne
class AirFactory implements UnitFactory {
    public function create() {
        return new Air();
    }
}

// Abstract class for unit
abstract class Unit {
    protected $name;
   
    public function moved() {
        echo 'moved '.$this->name;
    }
}


class Tank extends Unit {
    public function __construct() {
        $this->name = 'tank';
    }
}

class Air extends Unit {
    public function __construct() {
        $this->name = 'air';
    }    
}

// Creation object from factory
class Application {
    public function __construct(UnitFactory $obj) {
        $unit = $obj->create();
        $unit->moved();
    }
}

// Application loader
class ApplicationRunner {
    public static function run() {
        $tank = new TankFactory();
        //$air = new AirFactory();
        new Application($air);
    }
}

ApplicationRunner::run();

