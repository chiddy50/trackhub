<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleType;
use Illuminate\Validation\Rule;

class VehicleController extends Controller
{
    public function addVehicle(Request $request)
    {
        $validated = $request->validate([
            'type'=>[
                'required',
                 Rule::in(['car','motorcycle', 'tricycle']),
            ],
            'description' => 'required|string',
            'vehicle_icon' => 'string',
            'vehicle_image'=> 'file|mimes:jpeg,png|max:100000'
        ]);

        $vehicle = new VehicleType();
        $vehicle->type = $validated['type'];
        $vehicle->description = $validated['description'];
        $vehicle->vehicle_icon = $validated['vehicle_icon'] ?? null;
        $vehicle->vehicle_image = $validated['vehicle_image'] ?? null;
        $vehicle->save();

        return redirect()->route('vehicle.list');
    }

    public function viewVehicleTypes()
    {
        $vehicles = VehicleType::simplePaginate(15);
        // foreach ($vehicles as $vehicle){

        //     echo ($vehicle);
        // }
        // die();
        return view('vehicle.vehicleList')->with([
            'vehicles' => $vehicles
        ]);
    }
}
