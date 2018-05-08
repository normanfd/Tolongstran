<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'nbarang', 'jbarang', 'hbarang','deskripsi','category_id','slug','gambar'
    ];

    public function category() {
        return $this -> belongsTo(Category::class);
    }

}
