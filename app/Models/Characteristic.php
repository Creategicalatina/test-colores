<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    const SANGUINEO = 'SANGUINEO';
    const COLERICO = 'COLERICO';
    const MELANCOLICO = 'MELANCOLICO';
    const FLEMATICO = 'FLEMATICO';

    public $timestamps = false;

    protected $hidden = ['pivot'];
}
