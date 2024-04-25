<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotions';
    protected $fillable = ['code_promotion', 'name_promotion', 'product_of_promotion', 'type_of_promotion', 'divide'];
}
