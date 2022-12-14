<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Major::get();
        return view('pages.major.list',[
            'data'=>$data,
            'judul'=>"list major"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $major = new Major();
        return view('pages.major.form',[
            'major' => $major,
            'judul'=>"Form Create Major"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMajorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMajorRequest $request)
    {
         //dd($request->all());
         $data = $request->all();
         Major::create($data);
         return redirect('major')->with('notif', 'Data Berhasil Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        $data =$major->load(['students']);
        return view('pages.major.list-student',[
            "major" => $data,
            "judul"=>"form Show"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        return view('pages.major.form',[
            'major' => $major,
            'judul'=>"Form Edit Major"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMajorRequest  $request
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMajorRequest $request, Major $major)
    {
        $data = $request->all();
        $major->update($data);
        return redirect()->route('major.index')->with('notif','berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('major.index')->with('notif','Data Telah Terhapus');
    }
}
