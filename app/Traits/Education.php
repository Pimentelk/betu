<?php

namespace App\Traits;

trait Education {
    
    protected $user_id = NULL;
    
    protected function getDegree($degree = null) {
        return false;
    }
    
    protected function getBookList() {
        return ReadingList::where('user_id',$this->getUserId())->get();
    }
        
    protected function getCertifications($certification = null) {
        return false;
    }
    
    protected function getCourses($course_id = null) {
        return false;
    }
    
    abstract protected function setUserId();
    abstract protected function getUserId();
}