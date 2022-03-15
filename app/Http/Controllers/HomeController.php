<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    protected $matchController;

    public function __construct(MatchController $matchController)
    {
        $this->matchController = $matchController;
    }

    public function home()
    {
        $nextmatch = $this->matchController->todayMatch();
        return view('home', compact('nextmatch'));
    }
}
