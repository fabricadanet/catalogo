<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = 'vendas';

    protected $fillable = [
        'total',
        'status',
        'frete',
        'created_at',
        'updated_at',
    ];
}
