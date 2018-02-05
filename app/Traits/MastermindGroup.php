<?php

namespace App\Traits;

trait MastermindGroup {
    
    protected $user_id = NULL;
    
    public function joinMastermindGroup($group_id = null) {
        return false;
    }
    
    public function leaveMastermindGroup($group_id = null) {
        return false;
    }
    
    abstract protected function getUserId();
    abstract protected function setUserId();
}
