<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public function staff()
    {
        return $this->hasOne(User::class, 'id', 'staff_id');
    }
}
