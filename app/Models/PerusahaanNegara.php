<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerusahaanNegara extends Model
{
    use HasFactory;
    protected $table = 'perusahaan_negara';
    protected $guarded = [];
    public $timestamps = false;
}
