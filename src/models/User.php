<?php namespace Acme\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    //table relations user_id foreign key in Testimonials table
    public function testimonials(){
        return $this->hasMany('Acme\models\Testimonial');
    }
}
