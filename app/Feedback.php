<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{  
   
   protected $table = 'Feedback';
   protected $primarykey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

}
