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
        $user = Auth::user();
        $usersTeam = UserTeam::where('user_id', '=', $user->id)->first();

        $driver1 = FantasyDriver::find($usersTeam->driver_1_id)->first();
        $driver2 = FantasyDriver::find($usersTeam->driver_2_id)->first();
        $driver3 = FantasyDriver::find($usersTeam->driver_3_id)->first();
        $driver4 = FantasyDriver::find($usersTeam->driver_4_id)->first();
        $driver5 = FantasyDriver::find($usersTeam->driver_5_id)->first();
        $team = FantasyTeam::find($usersTeam->team_1_id)->first();
        
        $value =    $driver1->value +
                    $driver2->value +
                    $driver3->value +
                    $driver4->value +
                    $driver5->value +
                    $team->value;

        $points =   $driver1->points +
                    $driver2->points +
                    $driver3->points +
                    $driver4->points +
                    $driver5->points +
                    $team->points;


        return view('team.team')->with([
            'userteam' => $usersTeam,
            'driver1' => $driver1,
            'driver2' => $driver2,
            'driver3' => $driver3,
            'driver4' => $driver4,
            'driver5' => $driver5,
            'team' => $team,
            'points' => $points,
            'value' => $value,
        ]);
    }

    public function showCreateTeam()
    {
        $user = Auth::user();

        if (UserTeam::where('user_id', '=', $user->id)->first()) {
            return redirect()->route('showUsersTeam')->with([
                "danger" => "You already have a team."
            ]);
        }
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
                "danger" => "Your team is worth more than 100m"
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

    public function getDriverID($id)
    {
        $driver = FantasyDriver::findorfail($id);
        return $driver;
    }

    public function getTeamID($id)
    {
        $team = FantasyTeam::findorfail($id);
        return $team;
    }
}
