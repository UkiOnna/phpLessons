<?php

class Worker
{
    private $name;
    private $age;
    private $height;
    private $deathAge;

    /**
     * @return mixed
     */
    public function __construct($name, $age, $height)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->deathAge = rand(80, 120);
    }

    public function getName()
    {
        return $this->name;
    }

    public function isAlive()
    {
        if ($this->age >= $this->deathAge) {
            return false;
        } else {
            return true;
        }
    }

    public function randomDeath(){
        if(rand(0,20)==4){
            $this->deathAge=$this->age;
        }
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    private function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function growUp()
    {
        if ($this->getAge() <= 25)
            $this->setHeight($this->getHeight() + 1);
        else
            $this->setHeight($this->getHeight() - 1);
        $this->setAge($this->getAge() + 1);
    }

    /**
     * @param mixed $height
     */
    private function setHeight($height)
    {
        $this->height = $height;
    }


}