<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllCustomers extends Model
{
    use HasFactory;

    protected $fillable = [
        'customerid',
        'name',
        'mobile',
        'address'
    ];
}
