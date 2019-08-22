<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class AppRegister extends Model
{
    protected $fillable = [ 
        'id',
        'app_name',
        'secret',
        'user_id',
        'size'
    ];

    protected $casts = [
        'public_type_file' => 'array',
        'private_type_file' => 'array'  
    ];

    public function setSecretAttribute($value)
    {
        $this->attributes['secret'] = Hash::make($value);
    }
}
