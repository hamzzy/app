<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //


    public function subcat(){
        return $this->hasMany('App\SubCategory','categories_id');
    }
}
