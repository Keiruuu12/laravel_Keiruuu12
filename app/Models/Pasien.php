<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'telepon', 'rumahsakit_id'];

    public function rumahsakit()
    {
        return $this->belongsTo('App\Models\Rumahsakit');
    }
}
