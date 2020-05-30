<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use App\Traits\FileHandling;

class Category extends Model
{
    
    use SoftDeletes, FileHandling;

    protected $table = "categories";
    
    public $primaryKey = "id";
    protected $guarded = [];

    public function movies(){
        return $this->hasMany('App\Movie');
    }
    
}
