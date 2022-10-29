<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SortController extends Controller
{
    public function Index()
    {
        $licenses = DB::table('licenses')
            ->where('user_id', Auth::id())
            ->whereNotNull('exam_date')
            ->whereIn('status_id', [1])
            ->select('id', 'name', 'genre_id', 'grade_id', 'exam_date', 'fee', 'status_id')
            ->oldest('exam_date')
            ->paginate(20);

        $genres = DB::table('genres')->select('id', 'name')->get();
        $grades = DB::table('grades')->select('id', 'level')->get();
        $statuses = DB::table('statuses')->select('id', 'plan')->get();

        return Inertia::render(
            'Sorted/Index',
            [
                'licenses' => $licenses,
                'genres' => $genres,
                'grades' => $grades,
                'statuses' => $statuses,
            ]
        );
    }
}
