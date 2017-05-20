<?php namespace Acme\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Testimonial extends Eloquent
{
    //One testimonial will have one user associated with it
    public function user(){
        return $this->hasOne('Acme\models\User');
    }
}