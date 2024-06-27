<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    use HasFactory;


    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function staff()
    {
        return $this->hasOne(User::class, 'id', 'staff_id');
    }

    public function base_documents()
    {
        return $this->hasMany(BaseDocument::class, 'order_id', 'id');
    }


}


