<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('pages.works.index', [
            'works' => $works
        ]);
    }

    public function show($slug)
    {
        $work = Work::where('slug', $slug)->first();
        return view('pages.works.show', [
            'work' => $work
        ]);
    }
}
