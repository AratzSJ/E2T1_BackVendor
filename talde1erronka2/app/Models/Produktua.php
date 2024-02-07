<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produktua extends Model
{
    protected $table = 'produktua';
    public $timestamps = false;

    protected $fillable = [
        'izena',
        'deskribapena',
        'id_kategoria',
        'marka',
        'stock',
        'stock_alerta',
        'sortze_data',
        'eguneratze_data',
        'ezabatze_data'
    ];
}
