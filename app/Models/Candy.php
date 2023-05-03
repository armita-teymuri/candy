<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candy extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'desc',
        'price',
        'amount',
        'type',
        'user_id'
    ];
}
