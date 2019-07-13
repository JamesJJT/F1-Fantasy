<?php

namespace App\Http\Controllers;

use App\FantasyDriver;
use App\FantasyTeam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FantasyTeamController extends Controller
{
    public function showTeam()
    {
        $teams = FantasyTeam::all();

        return view('admin.fantasy.teams')->with([
            'teams' => $teams
        ]);
    }

    public function showAddTeam()
    {
        return view('admin.fantasy.addTeam');
    }

    public function addTeam(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'points' => ['required'],
            'value' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('adminFantasyShowTeamAdd')->with([
                "danger" => $validator->errors()->all()
            ]);
        }

        FantasyTeam::create([
            'name' => $request->name,
            'points' => $request->points,
            'value' => $request->value,
        ]);

        return redirect()->route('adminFantasyTeams')->with([
            'success', 'Team created successfully'
        ]);
    }

    public function showSpecificTeam($team)
    {
        $team = FantasyTeam::findOrFail($team);
        return view('admin.fantasy.specificTeam')->with([
            'team'=>$team
        ]);
    }

    public function updateTeam(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required'],
            'points' => ['required'],
            'value' => ['required'],
        ]);
        if ($validator->fails()) {
            return redirect()->route('adminSpecificTeam', ['team'=> $id])->with([
                'danger' =>$validator->errors()->all()
            ]);
        }

        $current_date_time = Carbon::now()->toDateTimeString();

        FantasyTeam::where("id", $id)->update([
            "name" => $request->name,
            "points" => $request->points,
            "value" => $request->value,
            "updated_at" => $current_date_time
        ]);

        return redirect()->route('adminSpecificTeam', ['team'=> $id])->with([
            'success' => 'Team updated successfully',
        ]);
    }
    public function deleteTeam($id){
        $team = FantasyTeam::find($id);
        $team->delete();

        return redirect()->route('adminFantasyTeams')->with([
            'success' => 'Team deleted successfully'
        ]);
    }
}
