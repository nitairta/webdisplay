<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HariLinux extends Model
{
    use HasFactory;
    protected $table = 'hari_linux';
    protected $primaryKey = 'ID';
    protected $fillable = ['hari'];
}
