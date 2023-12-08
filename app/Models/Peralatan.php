<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function detail_alat() {
        return $this->hasMany(DetailAlat::class, 'peralatan_id', 'id');
    }
}
