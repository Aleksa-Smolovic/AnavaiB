<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class BlogComment extends Model
{
    
    use SoftDeletes;

    protected $table = "blog_comments";
    
    public $primaryKey = "id";
    protected $guarded = [];

    public function blog() {
        return $this->belongsTo('App\Blog', 'blog_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
