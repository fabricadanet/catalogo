<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendaProduto extends Model
{
    use HasFactory;
    protected $table = 'vendas_produtos';
    protected $fillable = ['venda_id', 'produto_id', 'quantidade', 'subtotal','created_at','updated_at'];

    public function produto()
    {
        return $this->belongsTo('App\Models\Produto');
    }
    public function venda()
    {
        return $this->belongsTo('App\Models\Venda');
    }
}
