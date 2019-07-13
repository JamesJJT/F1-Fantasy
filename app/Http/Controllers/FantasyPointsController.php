<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FantasyPointsController extends Controller
{
    public function showPoints()
    {
        return view('admin.fantasy.points');
    }
    public function getMostRecentRace()
    {
        $json = file_get_contents('http://ergast.com/api/f1/current/last/results.json');

        $f1json  = json_decode($json);

        $f1json = $f1json->MRData->RaceTable;

        return view('admin.fantasy.points')->with([
            'f1json' => $f1json
        ]);
    }
}
