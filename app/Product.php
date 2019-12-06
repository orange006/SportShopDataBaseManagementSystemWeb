<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $fillable = [
        'IdSuppl', 'NameProduct', 'TypeProduct', 'CostPurchase', 'CostSale', 'Availability', 'Quantity',
    ];

    public function supply() {
        return $this->belongsTo(
            Supply::class,
            'IdSuppl',
            'id'
        );
    }
}
