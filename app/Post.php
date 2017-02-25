<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $table      = 'posts';
    protected $primarykey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'tags', 'photo', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    /**
     * [scopeFindBySlug description]
     * 
     * esto es para que el slug funcione
     * @param  [type] $query [description]
     * @param  [type] $slug  [description]
     * @return [type]        [description]
     */
 public function scopeFindBySlug($query, $slug)
{
    $query->where('slug', $slug)->get();
    
} 

}
