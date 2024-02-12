<?php

namespace App\Http\Controllers;

use App\Models\ArtProject;
use App\Models\Partner;
use Illuminate\Http\Request;

class ShowDetailsController extends Controller
{
    public function index()
    {
        $projects = ArtProject::with('partner')->get();
        $partners=Partner::all();
        return view('admin.showDetails', compact('projects','partners'));
    }
}
