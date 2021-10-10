<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hafalan_detail extends Model
{
    public function raport()
    {
        return $this->morphMany(raport::class, 'raportable');
    }
}
