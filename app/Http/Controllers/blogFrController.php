<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Setting;

class blogFrController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        $settings = Setting::all();
        return view('school.blog', compact('blogs', 'settings'));
    }
}
