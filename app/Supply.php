<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model {
    protected $fillable = [
        'IdProv', 'DateSupply',
    ];

    public function provider() {
        return $this->belongsTo(
            Provider::class,
            'IdProv',
            'id'
        );
    }
}
