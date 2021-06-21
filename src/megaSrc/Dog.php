<?php
class Dog extends Animal{
    public function __construct($say){
        $this->say = $say;
    }

    public function saySomething(){
        echo "bark";
    }
}