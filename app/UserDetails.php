<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FileHandling;

class UserDetails extends Model
{
    
    use SoftDeletes, FileHandling;

    protected $table = "user_details";
    
    public $primaryKey = "id";
    protected $guarded = [];

    public function getImageAttribute($value){
        return strpos($value, "http") === false ? asset($value) : $value;
    } 

    public function setImageAttribute($value)
    {
        if($value)
            $this->attributes["image"] = is_string($value) ? $value : UserDetails::storeFile($value, "users");
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
}
