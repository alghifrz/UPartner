<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\LandingPage;
use App\Models\NavbarLanding;

class LandingPageController extends Controller
{
    public function index()
    {

        $navbarlanding = NavbarLanding::getData(); 
        $header = 'UPartner';
        $landingpage = LandingPage::getData(); 
        $footer = Footer::getData(); 
        return view('landingpage', compact( 'navbarlanding', 'header', 'landingpage','footer'));
    }
}


?>