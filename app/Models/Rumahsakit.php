<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumahsakit extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'email', 'telepon'];

    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }
}
