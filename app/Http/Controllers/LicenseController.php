<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\License;
use App\Http\Requests\LicenseRequest;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenses = License::all();
        // dd($licenses);
        return Inertia::render('License/Index',[ 'licenses' => $licenses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('License/Create');
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

        License::create([
            'genre' => $request->genre,
            'name' => $request->name,
            'grade' => $request->grade,
            'exam_date' => $request->exam_date,
            'fee' => $request->fee,
            'status' => $request->status,
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
