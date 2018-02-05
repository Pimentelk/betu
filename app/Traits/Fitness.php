<?php

namespace App\Traits;

trait Fitness {
    
    protected $user_id = null;
    
    protected function getNutrition() {
        return false;
    }
    
    protected function getHealthStats() {
        return false;
    }
    
    abstract protected function getUserId();
    abstract protected function setUserId();
}

