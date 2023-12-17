<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAlat extends Model
{
    use HasFactory;

    protected $table = 'detail_alat';
    protected $guarded = ['id'];

    public function pengajuan (){
        return $this->belongsTo(pengajuan::class, 'pengajuan_id', 'id');
    }
    public function peralatan (){
        return $this->belongsTo(Peralatan::class, 'peralatan_id', 'id');
    }
}
