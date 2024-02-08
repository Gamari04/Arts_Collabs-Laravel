<?php

namespace App\Http\Controllers;

use App\Models\ArtProject;
use App\Http\Requests\StoreArtProjectRequest;
use App\Http\Requests\UpdateArtProjectRequest;
use Illuminate\Http\Request;

class ArtProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $projects=ArtProject::all();
        return view('admin.artProject', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtProjectRequest $request)
    {
        $projects = ArtProject::create($request->all());
        $projects->addMediaFromRequest('image')->toMediaCollection('images');
        return redirect()->route('admin.project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArtProject  $artProject
     * @return \Illuminate\Http\Response
     */
    public function show(ArtProject $artProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtProject  $artProject
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtProject $artProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtProjectRequest  $request
     * @param  \App\Models\ArtProject  $artProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtProject $artProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtProject  $artProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtProject $artProject)
    {
        //
    }
}
