<?php

namespace App\Http\Controllers;

use App\Models\ArtProject;
use App\Models\Partner;
use Illuminate\Http\Request;

class ShowDetailsController extends Controller
{
    public function show($id)
    {
        $projects =ArtProject::findOrFail($id);
   
        return view('admin.showDetails', compact('projects','partners'));
    }
}
