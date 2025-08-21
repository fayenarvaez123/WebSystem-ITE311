<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Homepage area
    public function index(): string
    {
        return view('home');  // loads app/Views/home.php
    }

    // About Page area
    public function about(): string
    {
        return view('about'); // loads app/Views/about.php
    }

    // Contact Page area
    public function contact(): string
    {
        return view('contact'); // loads app/Views/contact.php
    }
}
