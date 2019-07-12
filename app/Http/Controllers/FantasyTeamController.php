<?php

namespace App\Http\Controllers;

use App\FantasyDriver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FantasyTeamController extends Controller
{
    public function showDrivers()
    {
        $drivers = FantasyDriver::all();

        return view('admin.fantasy.drivers')->with([
            'drivers' => $drivers
        ]);
    }
    public function showAddDriver()
    {
        return view('admin.fantasy.addDriver');
    }
    public function addDriver(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'team' => ['required'],
            'points' => ['required'],
            'value' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('adminFantasyShowDriverAdd')->with([
                "message" => $validator->errors()->all()
            ]);
        }

        FantasyDriver::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'team' => $request->team,
            'points' => $request->points,
            'value' => $request->value,
        ]);

        return redirect()->route('adminFantasyDrivers')->with([
            'message', 'Driver created successfully'
        ]);
    }
}
