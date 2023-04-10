<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_number','product_name','product_descount','price','merchant_id'];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

}
