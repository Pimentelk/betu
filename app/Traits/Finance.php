<?php

namespace App\Traits;

trait Finance {
    
    protected $user_id = NULL;
    
    protected function getCreditScore() {
        return false;
    }
    
    protected function getFinances() {
        return false;
    }
    
    abstract protected function setUserId();
    abstract protected function getUserId();
}
