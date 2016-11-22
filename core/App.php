<?php

class App
{
    public $direct;
    public $param;

    public function __construct($direct,$param)
    {
        $this->direct = $direct;
        $this->param = $param;
    }

    public function render(){

        return $this->direct;


    }

    
}