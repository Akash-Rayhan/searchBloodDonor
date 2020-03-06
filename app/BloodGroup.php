<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{
    public function users(){
        //blood group has many users
        return $this->hasMany(User::class);
    }//
}
