<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\License;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan',
    ];

    public function licenses()
    {
        return $this->hasmany(License::class);
    }
}
