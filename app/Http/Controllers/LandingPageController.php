<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;

class LandingPageController extends Controller
{
    public function index()
    {
        $landingpage = LandingPage::getData(); // Memanggil data dari model
        return view('landingpage', compact('landingpage'));
    }
}


?>