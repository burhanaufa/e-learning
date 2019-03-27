<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $fillable= [
        'nama_kuis'
    ];
    public function materi()
    {
        return $this->belongsTo('App\Materi','foreign_key');
    }
    public function pertanyaan()
    {
        return $this->hasMany('App\Pertanyaan');
    }
    
}
