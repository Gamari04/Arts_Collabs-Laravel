<?php

namespace App\Http\Controllers;

use App\Models\ArtProject;
use App\Http\Requests\StoreArtProjectRequest;
use App\Http\Requests\UpdateArtProjectRequest;
use App\Models\Partner;
use App\Models\User;
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
        $projects = ArtProject::with('partner')->get();
        $partners=Partner::all();
        return view('admin.artProject', compact('projects','partners'));
    }



    public function showProject()
    {
        $projects = ArtProject::with('partner')->get();
        $partners=Partner::all();
        return view('home', compact('projects','partners'));
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
        return redirect()->route('project');
    }

    /**
     * Display the specified resource.
 
     */
    public function show(ArtProject $artProject)
    {
      
        {       
      
                $users=User::all();
                return view('admin.showDetails', compact('artProject','users'));
            
        }
    }
    public function details(ArtProject $artProject)
    {
      
        {
      
                $users=User::all();
                
                return view('admin.showDetails2', compact('artProject','users'));
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
    
     */
    public function edit($id)
    {
        $artProject = ArtProject::findOrFail($id);
        $users = User::all();

        return view('admin.editProject', compact('artProject', 'users'));
    }

  
    public function update(Request $request, ArtProject $artProject)
    {
        $userIds = $request->users;
        $artProject->users()->sync($userIds);
        $artProject->update([$request->all(), $request->input('partner_id')]);
        return redirect()->route('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtProject  $artProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtProject $artProject)
    {
      
        $artProject->delete();
        return redirect()->route('admin.artProject');
    }
    public function collaborate(Request $request, User $user)
    {
     
      $user->artProjects()->syncWithoutDetaching([$request->art_project_id=> ['status'=>1]]);
      return redirect()->route('home', $request->art_project_id)->with('success', 'Collaboration requested successfully.');

    }
}
