<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Military extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'military';


    protected $fillable = [
        'name',
        'country',
        'type',
        'quantity',
        'used_in',
        'selling_in',
        'destroyed',
        'effective',
    ];
}
