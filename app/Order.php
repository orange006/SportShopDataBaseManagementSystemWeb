<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    protected $fillable = [
        'IdProd', 'IdEmpl', 'IdCust', 'DateOrder',
    ];

    public function product() {
        return $this->belongsTo(
            Product::class,
            'IdProd',
            'id'
        );
    }

    public function employee() {
        return $this->belongsTo(
            Employee::class,
            'IdEmpl',
            'id'
        );
    }

    public function customer() {
        return $this->belongsTo(
            Customer::class,
            'IdCust',
            'id'
        );
    }
}
