<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\LandingPage;
use App\Models\NavbarLanding;

class LandingPageController extends Controller
{
    public function index()
    {
        $navbarlanding = NavbarLanding::getData(); // Memanggil data dari model
        $landingpage = LandingPage::getData(); // Memanggil data dari model
        $footer = Footer::getData(); // Memanggil data dari model
        return view('landingpage', compact('landingpage', 'navbarlanding', 'footer'));
    }
}


?>