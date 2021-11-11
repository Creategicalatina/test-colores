<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_id',
        'characteristic_id'
    ];

    public function characteristic(){
        return $this->belongsTo(Characteristic::class, 'characteristic_id');
    }
}
