<?php

class HomeController extends BaseController
{

    public function showWelcome()
    {
        return View::make('home.home');
    }
    
    public function aboutUs()
    {
        return View::make('home.aboutus');
    }
    
    public function contactUs()
    {
        return View::make('home.contactus');
    }

}
