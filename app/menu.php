<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'url', 'status','description'
    ];


}
