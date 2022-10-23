<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\User;
use App\Models\Grade;
use App\Models\Status;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'user_id',
        'name',
        'grade_id',
        'exam_date',
        'fee',
        'status_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
