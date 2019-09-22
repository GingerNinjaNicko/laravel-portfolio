<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'cost' => 'integer',
        'stock' => 'integer',
    ];
}
