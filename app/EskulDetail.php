<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EskulDetail extends Model
{
    //
    public function eskul(){
        return $this->belongsTo(Eskul::class);
    }

    public function raport()
    {
        return $this->morphMany(raport::class, 'raportable');
    }
}
