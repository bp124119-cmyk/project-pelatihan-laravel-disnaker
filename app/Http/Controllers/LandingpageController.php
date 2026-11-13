<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function landingpage()
    {
        return view('front-end.landingpage', [
            'title' => 'Landing Page-' . config('app.name')
        ]);
    }

    public function article()
    {
        return view('front-end.article', [
            'title' => 'Article-' . config('app.name')
        ]);
    }

    public function aboutus()
    {
        // Perbaikan: menyesuaikan dengan nama file about.blade.php di VS Code kamu
        return view('front-end.about', [
            'title' => 'About-' . config('app.name')
        ]);
    }

    public function service()
    {
        return view('front-end.service', [
            'title' => 'Service-' . config('app.name')
        ]);
    }
}