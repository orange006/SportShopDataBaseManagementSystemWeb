<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $fillable = [
        'IdSuppl', 'NameProduct', 'TypeProduct', 'CostPurchase', 'CostSale', 'Availability', 'Quantity',
    ];
}
