<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Fruit extends Model
{
    use HasFactory;

    protected $table = 'fruits';

    protected $fillable = [
        'label',
        'parent_id'
    ];

}