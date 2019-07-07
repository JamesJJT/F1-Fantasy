<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaceController extends Controller
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

    public function index()
    {
        $date = date('Y');
        $json = file_get_contents('https://ergast.com/api/f1/'.$date.'.json');
        $f1json = json_decode($json);
        return view('races')
            ->with(
                [
                    'f1json' => $f1json,
                    'date' => $date
                ]);
    }

    /**
     * Display a list of the past seasons
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pastSeasons(){
        $json = file_get_contents('http://ergast.com/api/f1/seasons.json?limit=100');
        $f1json = json_decode($json);
        return view('seasons.pastRaces')
            ->with([
                'f1json' => $f1json
            ]);
    }

    public function specificSeason($year){
        $json = file_get_contents('http://ergast.com/api/f1/'.$year.'.json');
        $f1json = json_decode($json);
        $date = $year;
        return view('seasons.specificSeason')
            ->with(
                [
                    'f1json' => $f1json,
                    'date' => $date
                ]);
    }


}
