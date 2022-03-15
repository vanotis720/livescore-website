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



    public function addPost()
    {
        $data = Http::post(env('API_URL') . '/param', [
            'title' => 'foo',
            'body' => 'bar',
            'userId' => 1
        ]);
        $post = json_decode($data->getBody()->getContents());
        dd($post);
    }
}
