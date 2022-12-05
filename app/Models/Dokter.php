<?php

namespace App\Models;

use App\Models\Rekammedis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';
    protected $guarded = [];
    
    public function rekammedis()
    {
        return $this->hasMany(Rekammedis::class, 'id_dokter');
    }
}
