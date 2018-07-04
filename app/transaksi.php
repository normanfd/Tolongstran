<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = [
        'id_pemilik','id_peminjam','jbarang','status','id_barang'
    ];
    public function User(){
        return $this-> belongsTo(User::class);
    }

    public function Post(){
        return $this-> belongsTo(Post::class);
    }
}

