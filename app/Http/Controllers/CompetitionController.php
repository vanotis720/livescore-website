<?php

namespace App\Http\Controllers;

use App\Helpers\Http;

class CompetitionController extends Controller
{
    public function index()
    {
        $data = Http::get(env('API_URL') . '/competitions');
        $results = json_decode($data->getBody()->getContents());
        return view('competitions', compact('results'));
    }

    public function show($id)
    {
        $data = Http::get(env('API_URL') . '/competitions/' . $id);
        $results = json_decode($data->getBody()->getContents());
        return view('competition', compact('results'));
    }
}
