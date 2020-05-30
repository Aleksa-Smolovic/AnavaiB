<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use App\Traits\FileHandling;

class Actor extends Model
{
    
    use SoftDeletes, FileHandling;

    protected $table = "actors";
    
    public $primaryKey = "id";
    protected $guarded = [];

    
            public function getBirthDateAttribute($value){
                return Carbon::parse($value)->format("d/m/Y");
            }
            
            public function setBirthDateAttribute($value)
            {
                $this->attributes["birth_date"] = Carbon::createFromFormat("d/m/Y", $value);
            }
            public function getImageAttribute($value){
                return strpos($value, "http") === false ? asset($value) : $value;
            } 
            
            public function setImageAttribute($value)
            {
                if($value)
                    $this->attributes["image"] = is_string($value) ? $value : Actor::storeFile($value, "actors");
            }
    
}
