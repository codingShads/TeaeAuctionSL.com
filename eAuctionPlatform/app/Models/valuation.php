<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class valuation extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_no',
        'grade',
        'sellingmark',
        'charactesristics',
        'weight',
        'valuation',
        'created_at'
    ];

    public function invoice(){
        return $this->hasOne(invoice::class,'id','id');
    }
}
