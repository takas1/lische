<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\LicenseRequest;
use App\Models\License;
use App\Models\Genre;
use App\Models\Grade;
use App\Models\Status;
use Illuminate\Support\Facades\DB;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenses = DB::table('licenses')->select('id', 'name', 'genre_id', 'grade_id', 'exam_date', 'fee', 'status_id')->get();
        // $licenses = DB::table('licenses')->select('id', 'name', 'genre_id', 'grade_id', 'exam_date', 'fee', 'status_id')->paginate(25);
        $genres = Genre::all();
        // dd($licenses, $genres);
        // dd($genres);
        return Inertia::render('License/Index', [ 'licenses' => $licenses, 'genres' => $genres ]);
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
        // $grades = Grade:: select('id', 'level')->get();
        // $statuses = Status::select('id', 'plan')->get();

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
        // $request->validate([
        //     'genre' => ['max:255'],
        //     'name' => ['required', 'max:40'],
        //     'grade' => [],
        //     'exam_date' => ['required'],
        //     'fee' => [],
        //     'status' => [],
        // ]);
dd($request);
        License::create([
            'genre' => $request->genre_id,
            'name' => $request->name,
            'grade' => $request->grade_id,
            'exam_date' => $request->exam_date,
            'fee' => $request->fee,
            'status' => $request->status_id,
            // $license->save();
        ]);

        return to_route('licenses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
