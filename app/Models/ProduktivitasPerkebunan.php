<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduktivitasPerkebunan extends Model
{
    use HasFactory;

    protected $table = 'produktivitas_perkebunan';

    protected $fillable = ['tahun','nilai'];
}
