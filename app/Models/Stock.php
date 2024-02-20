<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'sstock';
    protected $primaryKey = 'item_id';
    protected $timestamps = false;
}
