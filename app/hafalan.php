<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    public function detail(){
        return $this->hasMany(Hafalan_detail::class);
    }
}
