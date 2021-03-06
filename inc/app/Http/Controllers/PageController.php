<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function goToHomePage(){

        return view('frontend.pages.index');
    }

    public function goToAboutPage(){

        return view('frontend.pages.about');
    }

    public function goToContactPage(){

        return view('frontend.pages.contact');
    }

    public function goToDonatePage(){

        return view('frontend.pages.donate');
    }

    public function goToServicesPage(){

        return view('frontend.pages.services');
    }

    public function goToTeamPage(){

        return view('frontend.pages.team');
    }

    public function goToGalleryPage(){

        return view('frontend.pages.gallery');
    }

    public function goToJoinUsPage(){
        
        return view('frontend.pages.joinus');
    }

    public function goToJoinUsPage1(){
        
        return view('frontend.pages.joinus1');
    }
 
    
}
