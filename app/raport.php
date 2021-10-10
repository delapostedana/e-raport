<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raport extends Model
{
    protected $guarded = [];

    public function guru(){
        return $this->belongsTo("App\Guru","guru_id");
    }
    public function siswa(){
        return $this->belongsTo("App\Siswa","siswa_id");
    }
    public function eskulDetail(){
        return $this->belongsTo("App\EskulDetail","eskul_detail_id");
    }
    public function hafalanlDetail(){
        return $this->belongsTo("App\Hafalan_detail","hafalan_detail_id");
    }
    public function perkembanganlDetail(){
        return $this->belongsTo("App\Perkembangan_detail","perkembangan_detail_id");
    }

    public function raportable()
    {
        return $this->morphTo();
    }
}
