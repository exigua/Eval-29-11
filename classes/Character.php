<?php

class Character {
    public $lifePoint = 100;
    public $magicPoint = 15;
    public $pseudo;
    public $atk = 15;
    protected $alive = true;
    public $status;

    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
    }
    
    public function isAlive()
    {
        if ($this->lifePoint > 0) {
            return true;
        } else {
            return false;
        }
    } 
};

