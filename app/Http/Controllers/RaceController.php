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

    public function show(Request $request){
        $json = file_get_contents('https://ergast.com/api/f1/'.$request.'.json');
        $f1json = json_decode($json);
        return view('races')->with('f1json', $f1json);
    }


}
