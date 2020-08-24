<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mk';

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }

    
}
