<?php

namespace App\Http\Controllers;

use App\Models\ArtProject;
use Illuminate\Http\Request;

class ArtProjectUser extends Controller
{
    public function store(Request $request,ArtProject $artProject)
    {
        $userIds = $request->users;

     
        $artProject->users()->syncWithoutDetaching($userIds);
    

    return redirect()->route('details', $artProject->id);
   }
}
