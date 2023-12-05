<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;
    protected $table = 'laravel.pengajuan';
    protected $fillable = [
        'user_id',
        'peralatan', // Add any other fields that you want to allow for mass assignment
        'qty',
        'status',
        'unit',
        'harga',
    ];
}
