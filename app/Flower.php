<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Flower
 *
 * @property $name
 * @property $quantity
 *
 * @package App
 */
class Flower extends Model
{
    protected $table = 'flowers';

    protected $attributes = [
        'quantity' => 0,
    ];

    protected $fillable = ['name', 'quantity'];
}
