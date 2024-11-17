<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    public $timestamps = true;
    protected $fillable = [
        'code_transaksi',
<<<<<<< HEAD
        'sku_transaksi',
=======
<<<<<<< HEAD
        'sku_transaksi',
=======
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        'total_qty',
        'total_harga',
        'nama_customer',
        'alamat',
        'no_tlp',
        'ekspedisi',
<<<<<<< HEAD
    ];

=======
<<<<<<< HEAD
    ];

=======
        'status',
    ];
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    protected $hidden;
}
