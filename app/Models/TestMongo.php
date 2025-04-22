<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class TestMongo extends Model
{
    protected $connection = 'mongodb'; // Important!
    protected $collection = 'test'; // MongoDB collection name

    protected $fillable = [
        'name',
        'description',
    ];
}
