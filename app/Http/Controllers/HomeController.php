<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $works = Work::take(6)->get();
        return view('welcome', [
            'works' => $works
        ]);
    }

    public function changeLanguage($langCode)
    {
        App::setLocale($langCode);
        session()->put("lang_code", $langCode);
        return redirect()->back();
    }
}
