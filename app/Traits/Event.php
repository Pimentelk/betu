<?php

namespace App\Traits;
    
trait Event {
    
    protected $user_id = NULL;
    
    protected function getEvents() {
        return false;
    }
    
    protected function getWorkouts() {
        return false;
    }
    
    protected function getAchievements($category = null) {
        return false;
    }
    
    protected function getTaskList($status = null) {
        return false;
    }
    
    protected function getChallenges($type = null) {
        
        if (is_null($type)) {
            return true; // return all challenges
        }
        return false; // return by type
    }
    
    protected function getGoals($status = null) {
        
        if (is_null($status)) {
            return true; // return all
        }
        return false; // return by status
    }
    
    protected function addEvent($event = null) {
        return false;
    }
    
    abstract protected function getUserId();
    abstract protected function setUserId();
}

