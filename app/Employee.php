<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
    protected $fillable = [
        'FullNameEmployee', 'Position', 'Age', 'PhoneNumberEmployee',
    ];
}
