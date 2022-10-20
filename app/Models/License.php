<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre',
        'name',
        'grade',
        'exam_date',
        'fee',
        'status'
    ];
}
