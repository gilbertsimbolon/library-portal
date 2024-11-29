<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryMembers extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'email_edukasi',
        'no_hp',
        'no_wa',
        'fakultas',
        'program_studi'
    ];
}
