<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    //
    public function detail(){
        return $this->hasMany(EskulDetail::class);
    }
}
