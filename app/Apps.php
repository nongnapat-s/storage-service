<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apps extends Model
{
    protected $fillable = [ 
        'id',
        'app_name',
        'token',
        'secret',
        'public_type_file',
        'private_type_file',
        'types', 
        'size',
        'year_folder',
        'month_folder' 
    ];

    protected $casts = [
        'public_type_file' => 'array',
        'private_type_file' => 'array'
        
    ];
}
