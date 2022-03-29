<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SearchController extends Controller
{
    protected $matchController;

    public function __construct(MatchController $matchController)
    {
        $this->matchController = $matchController;
    }

    // public function search(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'homeTeam' => 'required|string',
    //         'awayTeam' => 'required|string',
    //     ]);
        
    //     $matchs = $this->matchController->search($search);
    //     return view('matchs.index', compact('matchs'));
    // }
}
