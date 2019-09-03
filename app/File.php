<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class File extends Model
{
    protected $fillable  = [ 
        'slug'
    ];

    public function __construct($attributes = [])
    {
        $attributes['slug'] = Uuid::uuid1()->toString();
        parent::__construct($attributes);
    }
}
