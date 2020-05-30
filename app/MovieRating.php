<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class MovieRating extends Model
{
    
    protected $table = "movie_ratings";
    protected $guarded = [];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function user(){
        return $this->belongsTo('App\User', 'create_user_id', 'id');
    }
}
