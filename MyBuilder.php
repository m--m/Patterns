<?php
// Builder

class AirPlane {
    protected $countRocket;
    
    public function setRocket($count)
    {
        $this->countRocket = $count;
    }
    
    public function getRocket()
    {
        return $this->countRocket;
    }
}

abstract class BuilderAirPlane
{
    protected $airplane;
    
    public function createAirPlane()
    {
        $this->airplane = new AirPlane();
    }
    
    public function getAirPlane()
    {
        return $this->airplane;
    }
}

class BuilderF22 extends BuilderAirPlane
{
    public function buildRocket()
    {
        $this->airplane->setRocket(8);
    }
}

class Plant
{
    private $builderAirPlane;
    
    public function setAirPlane(BuilderAirPlane $builder)
    {
        $this->builderAirPlane = $builder;
    }
    public function getAirPlane()
    {
        return $this->builderAirPlane->getAirPlane();
    }
    public function constructAirPlane()
    {
        $this->builderAirPlane->createAirPlane();
        $this->builderAirPlane->buildRocket();
    }
}

$plant = new Plant();

$builderF22 = new BuilderF22();

$plant->setAirPlane($builderF22);
$plant->constructAirPlane();

$airplane = $plant->getAirPlane();

echo $airplane->getRocket();

