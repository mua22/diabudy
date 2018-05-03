<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Meta;
class PagesController extends Controller
{
    public function about()
    {
        Meta::set('title', 'About Us');
        Meta::set('description', 'This is my home. Enjoy!');
        return view('diabudy.pages.about-us');
    }
}
