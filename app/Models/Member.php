<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getAddressAttribute($value)
    {
        return $value.',Zim';
    }
}
