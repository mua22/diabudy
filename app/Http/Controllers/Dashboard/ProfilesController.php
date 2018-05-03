<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('diabudy.dashboard.profiles.index');
    }
}
