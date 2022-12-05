<?php

namespace App\Models;

use App\Models\Rekammedis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rekammedis()
    {
        return $this->hasMany(Rekammedis::class, 'id_pasien');
    }
}
