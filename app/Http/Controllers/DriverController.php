<?php

namespace App\Http\Controllers;

use App\FantasyDriver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class DriverController extends Controller
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
                "danger" => $validator->errors()->all()
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
            'success', 'Driver created successfully'
        ]);
    }

    public function showSpecificDriver($driver)
    {
        $driver = FantasyDriver::findOrFail($driver);
        return view('admin.fantasy.specificDriver')->with([
            'driver'=>$driver
        ]);
    }

    public function updateDriver(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'first_name' => ['required'],
            'last_name' => ['required'],
            'team' => ['required'],
            'points' => ['required'],
            'value' => ['required'],
        ]);
        if ($validator->fails()) {
            return redirect()->route('adminSpecificDriver', ['driver'=> $id])->with([
                'danger' =>$validator->errors()->all()
            ]);
        }

        $current_date_time = Carbon::now()->toDateTimeString();

        FantasyDriver::where("id", $id)->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "team" => $request->team,
            "points" => $request->points,
            "value" => $request->value,
            "updated_at" => $current_date_time
        ]);

        return redirect()->route('adminSpecificDriver', ['driver'=> $id])->with([
            'success' => 'Driver updated successfully',
        ]);
    }
    public function deleteDriver($id){
        $driver = FantasyDriver::find($id);
        $driver->delete();

        return redirect()->route('adminFantasyDrivers')->with([
            'success' => 'Driver deleted successfully'
        ]);
    }
}
