<?php
// Factory method

class Tank {
    public function __construct()
    {
        echo 'tank was created;';
    }
}

class AirPlane {
    public function __construct()
    {
        echo 'airplane was created;';
    }
}

interface Creator {
    public function factoryMethod();
}

class CreatorTank implements Creator{
    public function factoryMethod() {
        return new Tank();
    }
}

class CreatorAirPlane implements Creator{
    public function factoryMethod() {
        return new AirPlane();
    }
}

class Application {
    public static function run()
    {
        //create 1 tank and 3 airplane
        
        $creatorTank = new CreatorTank();
        $creatorTank->factoryMethod();
        $creatorAirPlane = new CreatorAirPlane();
        $creatorAirPlane->factoryMethod();
        $creatorAirPlane->factoryMethod();
        $creatorAirPlane->factoryMethod();
    }
}
Application::run();
