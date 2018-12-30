<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Flower
 *
 * @property $name
 * @property $quantity
 * @property $price
 *
 * @package App
 */
class Flower extends Model
{
    protected $table = 'flowers';

    protected $attributes = [
        'quantity' => 0,
        'price' => 0,
    ];

    protected $fillable = ['name', 'quantity', 'price'];
}
