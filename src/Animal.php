<?php
class Animal
{
    private $countOfLegs;
    private $say;

    public function getCountOfLegs(){
        return $this->countOfLegs;
    }

    public function saySomething(){
        echo $this->say;
        // return $this->say;
    }
}