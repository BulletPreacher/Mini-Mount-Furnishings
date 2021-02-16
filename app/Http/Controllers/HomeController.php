<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Analytics;
use Spatie\Analytics\Period;

//fetch the most visited pages for today and the past week
Analytics::fetchMostVisitedPages(Period::days(7));

//fetch visitors and page views for the past week
Analytics::fetchVisitorsAndPageViews(Period::days(7));

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
