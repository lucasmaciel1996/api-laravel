<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Use App\Models\Properties;

class Devices extends Model
{
    protected $fillable = ['name', 'key_id','icon'];
    /**
     * Get the properties for the properties Devices.
     */
    public function properties()
    {
        return $this->hasMany('App\Models\Properties');
    }
}
