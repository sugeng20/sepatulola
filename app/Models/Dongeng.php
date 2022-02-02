<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dongeng extends Model
{
    use HasFactory;

    protected $table = 'dongeng';

    protected $fillable = [
        'judul', 'link_youtube', 'deskripsi'
    ];
}
