<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use Sluggable;
    use SoftDeletes;

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title'
                ]
            ];
    }
    

    //Get post
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
