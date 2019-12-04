<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = ['local_lat','devices_id','local_lng','total_peca','ligado'];
    /**
     * Get the devices that owns the Properties.
     */
    public function device()
    {
        return $this->belongsTo('App\Models\Devices');
    }
}
