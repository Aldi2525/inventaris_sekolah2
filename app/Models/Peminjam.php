<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;
    protected $visible = ['id','nama_barang','tgl_pinjam','jumlah_pinjam' , 'nama_peminjam', 'status'];

    protected $fillable = ['id','nama_barang','tgl_pinjam','jumlah_pinjam' , 'nama_peminjam', 'status' ];

    public $timestamps = true;

    public function barang()
    {
        // Data model "Model" bisa memiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Barang','id_barang');
    }
}
