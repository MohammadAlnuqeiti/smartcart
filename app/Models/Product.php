<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['title', 'description'];

    protected $fillable = ['product_number','is_active','is_featuer','product_descount','price','merchant_id'];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

}
