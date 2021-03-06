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
        // $data = Http::get(env('API_URL') . '/matches', ['limit' => 10, 'dateFrom' => date('Y-m-d'), 'dateTo' => date('Y-m-d')]);
        $data = Http::get(env('API_URL'), ['met' => 'Livescore', 'timezone' => 'Africa/Lubumbashi', 'APIkey' => env('API_TOKEN')]);

        return json_decode($data->getBody()->getContents());
    }

    public function lastDayMatch()
    {
        // return [];
        $date = (Carbon::createFromFormat('Y-m-d', date('Y-m-d'))->subDays(1))->toDateString();
        $data = Http::get(env('API_URL') . '/matches', ['limit' => 10, 'dateFrom' => $date, 'dateTo' => date('Y-m-d')]);
        $lastmatch = json_decode($data->getBody()->getContents());

        return view('last-day-matchs', compact('lastmatch', 'date'));
    }

    public function search($home, $away)
    {
        return view('matchs.index', compact('matchs'));
    }
}
