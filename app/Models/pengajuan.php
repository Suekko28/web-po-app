<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'status',
        'total_penawaran',
    ];

    public function detail_alat() {
        return $this->hasMany(DetailAlat::class, 'pengajuan_id', 'id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
