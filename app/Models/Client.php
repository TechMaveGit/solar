<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    public function jobOrders()
    {
        // return $this->hasMany(JobOrder::class, 'client_id','id');
        return $this->belongsTo(JobOrder::class, 'id', 'client_id');
    }
}
