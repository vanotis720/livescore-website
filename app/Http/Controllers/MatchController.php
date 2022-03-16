<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Helpers\Http;

class MatchController extends Controller
{
    public function getNextMatch()
    {
        // return [];
        $endDate = Carbon::createFromFormat('Y-m-d', date('Y-m-d'))->addDays(1);
        $data = Http::get(env('API_URL') . '/matches', ['limit' => 10, 'dateFrom' => date('Y-m-d'), 'dateTo' => $endDate->toDateString()]);
        $matchs = json_decode($data->getBody()->getContents());

        return view('matchs', compact('matchs'));

    }

    public function todayMatch()
    {
        // return [];
        $data = Http::get(env('API_URL') . '/matches', ['limit' => 10, 'dateFrom' => date('Y-m-d'), 'dateTo' => date('Y-m-d')]);
        return json_decode($data->getBody()->getContents());
    }

    public function lastDayMatch()
    {
        // return [];
        $date = Carbon::createFromFormat('Y-m-d', date('Y-m-d'))->subDays(1);
        $data = Http::get(env('API_URL') . '/matches', ['limit' => 10, 'dateFrom' => $date->toDateString(), 'dateTo' => date('Y-m-d')]);
        $lastmatch = json_decode($data->getBody()->getContents());

        return view('last-day-matchs', compact('lastmatch','date'));
    }

}
