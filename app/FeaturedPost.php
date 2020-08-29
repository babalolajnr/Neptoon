<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeaturedPost extends Model
{
    use SoftDeletes;

    protected $table = 'featured_posts';
    protected $guarded = ['id'];
    
    public function post() {
        return $this->belongsTo('App\Post');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
