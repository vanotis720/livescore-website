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
        $liveScore = $this->matchController->todayMatch();
        $date = now('Africa/Lubumbashi');
        return view('home', compact('liveScore', 'date'));
    }
}
