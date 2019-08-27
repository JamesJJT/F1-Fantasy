<?php

namespace App\Http\Controllers;

use App\FantasyDriver;
use App\FantasyTeam;
use App\UserTeam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function showUsersTeam()
    {
        return view('team.team');
    }

    public function showCreateTeam()
    {
        $drivers = FantasyDriver::all();
        $teams = FantasyTeam::all();

        return view('team.create')->with([
            'drivers' => $drivers,
            'teams' => $teams,
        ]);
    }

    public function createTeam(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'driver_1_id' => ['required'],
            'driver_2_id' => ['required'],
            'driver_3_id' => ['required'],
            'driver_4_id' => ['required'],
            'driver_5_id' => ['required'],
            'team_1_id' => ['required'],
        ]);        

        if ($validator->fails()) {
            return redirect()->route('showCreateTeam')->with([
                "danger" => $validator->errors()->all()
            ]);
        }

        $driver1 = TeamController::getDriverID($request->driver_1_id);
        $driver2 = TeamController::getDriverID($request->driver_2_id);
        $driver3 = TeamController::getDriverID($request->driver_3_id);
        $driver4 = TeamController::getDriverID($request->driver_4_id);
        $driver5 = TeamController::getDriverID($request->driver_5_id);
        $team1 = TeamController::getTeamID($request->team_1_id);

        $value =    $driver1->value + 
                    $driver2->value + 
                    $driver3->value +
                    $driver4->value +
                    $driver5->value +
                    $team1->value;

        if ($value > 100) {
            return redirect()->route('createTeam')->with([
                "danger" => "Your values is over 100m."
            ]);
        }

        $user = Auth::user();

        UserTeam::create([
            'user_id' => $user->id,
            'driver_1_id' => $driver1->id,
            'driver_2_id' => $driver2->id,
            'driver_3_id' => $driver3->id,
            'driver_4_id' => $driver4->id,
            'driver_5_id' => $driver5->id,
            'team_1_id' => $team1->id,
            'value' => $value,
            'wildcard' => 1,
            'updated_at' => Carbon::now()->toDateTimeString(),
            'created_at' => Carbon::now()->toDateTimeString(),

        ]);

        return redirect()->route('showUsersTeam')->with([
            'success', 'Team created successfully'
        ]);
    }

    function getDriverID($id){
        $driver = FantasyDriver::findorfail($id);
        return $driver;
    }

    function getTeamID($id){
        $team = FantasyTeam::findorfail($id);
        return $team;
    }
}
