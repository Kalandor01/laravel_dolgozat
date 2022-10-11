<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = response()->json(Flight::all());
        return $flights;
    }
    public function show($id)
    {
        $flight = response()->json(Flight::find($id));
        return $flight;
    }
    public function destroy($id)
    {
        Flight::find($id)->delete();
        return redirect("flight/list");
    }
    public function store(Request $request)
    {
        $flight = new Flight();
        $flight->date = $request->date;
        $flight->airline_id = $request->airline_id;
        $flight->limit = $request->limit;
        $flight->save();
        return redirect("flight/list");
    }
    public function update(Request $request, $id)
    {
        $flight = Flight::find($id);
        $flight->date = $request->date;
        $flight->airline_id = $request->airline_id;
        $flight->limit = $request->limit;
        $flight->save();
        return redirect("flight/list");
    }
    public function newView()
    {
        $airlines = Airline::all();
        return view("flight.new", ["airlines"=>$airlines]);
    }
    public function editView($id)
    {
        $airlines = Airline::all();
        $flight = Flight::find($id);
        return view("flight.edit", ["airlines"=>$airlines, "flight"=>$flight]);
    }
    public function listView()
    {
        $flights = Flight::all();
        return view("flight.list", ["flights"=>$flights]);
    }
}
