<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use App\Traits\FileHandling;

class Blog extends Model
{
    
    use SoftDeletes, FileHandling;

    protected $table = "blogs";
    
    public $primaryKey = "id";
    protected $guarded = [];

    
    public function getImageAttribute($value){
        return strpos($value, "http") === false ? asset($value) : $value;
    } 

    // public function getCreatedAt($value){
    //     return strpos($value, "http") === false ? asset($value) : $value;
    // } 
    
    public function setImageAttribute($value)
    {
        if($value)
            $this->attributes["image"] = is_string($value) ? $value : Blog::storeFile($value, "blogs");
    }

    public function comments() {
		return $this->hasMany('App\BlogComment');
    }
    
    
}
