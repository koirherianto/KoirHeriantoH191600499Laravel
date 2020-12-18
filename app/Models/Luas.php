<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luas extends Model
{
    protected $table = 'luas';

    protected $fillable = ['tahun','nilai'];
}
