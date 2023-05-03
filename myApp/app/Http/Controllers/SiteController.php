<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function blogsingle(){
        return view('blogsingle');
    }

    public function blog(){
        return view('blog');
    }

    public function portfoliodetails(){
        return view('portfoliodetails');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function pricing(){
        return view('pricing');
    }

    public function services(){
        return view('services');
    }

    public function team(){
        return view('team');
    }

    public function testimonial(){
        return view('testimonial');
    }

    public function components(){
        $regions = ['Toshkent', 'Samarqand','Jizzax', 'Buxoro', 'Surxondaryo'];

        return view('components', compact('regions'));
    }
}
