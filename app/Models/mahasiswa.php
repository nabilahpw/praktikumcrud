<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    public $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing=false;
    protected $keyType = 'string';
}
