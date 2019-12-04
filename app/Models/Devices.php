<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    protected $fillable = ['name', 'key_id','local_lat','local_lng','total_peca','ligado','icon'];
}
