<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //Seeder will automatically try to fill created_at and updated_at unless
    //we explicitly tell it not to do that by adding this:
    public $timestamps = false;

    //Making Accessor & Mutator
    protected $casts = [
        'genres' => 'json_encode'
    ];

}
