<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\LicenseRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\License;
use App\Models\Genre;
use App\Models\Grade;
use App\Models\Status;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenses = DB::table('licenses')->where('user_id', Auth::id())
                                         ->select('id', 'name', 'genre_id', 'grade_id', 'exam_date', 'fee', 'status_id')
                                         ->get();
        $genres = Genre::all();
        $grades = Grade::all();
        $statuses = Status::all();

        return Inertia::render('License/Index',
                                [
                                    'licenses' => $licenses,
                                    'genres' => $genres,
                                    'grades' => $grades,
                                    'statuses' => $statuses,
                                 ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = DB::table('genres')->select('id', 'name')->get();
        $grades = DB::table('grades')->select('id', 'level')->get();
        $statuses = DB::table('statuses')->select('id', 'plan')->get();

        return Inertia::render('License/Create',
            [
                'genres' => $genres,
                'grades' => $grades,
                'statuses' => $statuses
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LicenseRequest $request)
    {
        License::create([
            'user_id' => Auth::id(),
            'genre_id' => $request->genre_id,
            'name' => $request->name,
            'grade_id' => $request->grade_id,
            'exam_date' => $request->exam_date,
            'fee' => $request->fee,
            'status_id' => $request->status_id,
        ]);

        return to_route('licenses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(license $license)
    {
        $genre = Genre::where('id', $license->genre_id)->select('id', 'name')->first();
        $grade = Grade::where('id', $license->grade_id)->select('id', 'level')->first();
        $status = Status::where('id', $license->status_id)->select('id', 'plan')->first();

        return Inertia::render('License/Show',
            [
                'license' => $license,
                'genre' => $genre,
                'grade' => $grade,
                'status' => $status
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(license $license)
    {
        // dd($license);
        $genres = DB::table('genres')->select('id', 'name')->get();
        $grades = DB::table('grades')->select('id', 'level')->get();
        $statuses = DB::table('statuses')->select('id', 'plan')->get();
// dd($license, $genres);
        return Inertia::render('License/Edit', [
            'license' => $license,
            'genres' => $genres,
            'grades' => $grades,
            'statuses' => $statuses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, License $license)
    {
        // dd($license->name);

        $license->genre_id = $request->genre_id;
        $license->name = $request->name;
        $license->grade_id = $request->grade_id;
        $license->exam_date = $request->exam_date;
        $license->fee = $request->fee;
        $license->status_id = $request->status_id;
        $license->save();

        return to_route('licenses.index')
            ->with([
                'message' => '更新しました。',
                'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(License $license)
    {
        $license->delete();

        return to_route('licenses.index')
        ->with([
            'message' => '削除しました。',
            'status' => 'danger'
        ]);
    }
}
