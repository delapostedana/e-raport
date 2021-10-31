<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perkembangan extends Model
{
    public function detail(){
        return $this->hasMany(Perkembangan_detail::class);
    }
}
