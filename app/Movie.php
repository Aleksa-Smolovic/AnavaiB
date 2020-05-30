<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use App\Traits\FileHandling;

class Movie extends Model
{
    
    use SoftDeletes, FileHandling;

    protected $table = "movies";
    
    public $primaryKey = "id";
    protected $guarded = [];

    
    public function getImageAttribute($value){
        return strpos($value, "http") === false ? asset($value) : $value;
    } 
    
    public function setImageAttribute($value)
    {
        if($value)
            $this->attributes["image"] = is_string($value) ? $value : Movie::storeFile($value, "movies");
    }

    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function getReleaseDateAttribute($value){
        return Carbon::parse($value)->format("d/m/Y");
    }
    
    public function setReleaseDateAttribute($value)
    {
        $this->attributes["release_date"] = Carbon::createFromFormat("d/m/Y", $value);
    }

    public function reviews(){
        return $this->hasMany('App\MovieRating');
    }
    
}
