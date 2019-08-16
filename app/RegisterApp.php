<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class RegisterApp extends Model
{
    protected $fillable = [ 
        'id',
        'app_name',
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

    //   /**
    //  * Set field 'secret'.
    //  *
    //  * @param string $value
    //  */
    // public function setSecretAttribute($value)
    // {
    //     $this->attributes['secret'] = Hash::make($value);
    // }

    
    //   /**
    //  * Set field 'secret'.
    //  *
    //  * @param string $value
    //  */
    // public function getSecretAttribute($value)
    // {
    //     return Hash::check($value, $this->attributes['secret']);
    // }
    public function isComplete()
    {
        $fieldsNeed = [];
        if ($this->app_name === null)
        {
            $fieldsNeed['app_name'] = 'กรุณากรอก App name';
        }

        if ($this->secret == null)
        {
            $fieldsNeed['secret'] = 'กรุณากรอก Secret';
        }

        if(!$this->public_type_file && !$this->private_type_file)
        {
            $fieldsNeed['file_type'] = 'กรุณาเลือก Type File';
        }

        if(count($fieldsNeed) !== 0)
        {
            return $fieldsNeed;
        }

        $this->token = Str::random(60);
        $this->save();
        return true;
    }
}
