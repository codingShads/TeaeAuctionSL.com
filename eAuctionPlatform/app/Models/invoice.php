<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_no',
        'plantation_name',
        'grade',
        'bag_count',
        'per_bag_quantity'
    ];
}
