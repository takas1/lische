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

    public function scopeSearchLicenses($query, $input = null)
    {
        if (!empty($input)) {
            if (License::where('name', 'like', '%' . $input . '%')
                ->exists()) {
                    return $query->where('name', 'like', '%' . $input . '%');
            }
        }
    }

    public function scopeSortAscExamDate($query)
    {
        return $query->whereNotNull('exam_date')
                     ->orderBy('exam_date', 'asc');
    }

    public function scopeSortDescExamDate($query)
    {
        return $query->whereNotNull('exam_date')
                     ->orderBy('exam_date', 'desc');
    }

    protected $fillable = [
        'genre_id',
        'user_id',
        'name',
        'grade_id',
        'exam_date',
        'fee',
        'status_id',
        'memo'
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
