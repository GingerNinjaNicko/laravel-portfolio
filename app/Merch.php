<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cost',
        'stock',
    ];

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

    public function exactlyStock($stock)
    {
        $this->stock = $stock;
    }

    public function addStock($stock)
    {
        $this->stock += $stock;
    }

    public function subtractStock($stock)
    {
        $this->stock -= $stock;
    }
}
