<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseDocument extends Model
{
    use HasFactory;

    protected $table = 'base_documents';
}
