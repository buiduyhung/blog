<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $timestamps = false;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'city',
    ];
}