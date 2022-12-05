<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    use HasFactory;
    protected $table = 'perawats';
    protected $guarded = [];
    
    public function rekammedis()
    {
        return $this->hasMany(Rekammedis::class, 'id_perawat');
    }
}
