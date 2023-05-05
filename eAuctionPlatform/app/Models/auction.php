<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auction extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyerName',
        'brokerName',
        'soldPrice',
        'startingPrice'
    ];
}
