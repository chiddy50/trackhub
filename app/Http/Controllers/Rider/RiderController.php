<?php

namespace App\Http\Controllers\Rider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountType;
use App\Models\Country;
use App\Models\State;
use App\Models\Rider;
use App\Models\User;
use App\Models\VehicleType;
use App\Models\RiderInformation;

use App\Http\Requests\Rider\CreateRiderRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\UsersInformation;

class RiderController extends Controller
{
    
    public function addRider()
    {
        $countries = Country::all();
        $states = State::all();

        return view('fleetManagement.addRider')->with([
            'countries' => $countries,
            'states' => $states
        ]);
    }

    public function createRider(CreateRiderRequest $request)
    {
        $validated = $request->validated();
        $auth_user = auth()->user();

        $account_type = AccountType::where('name', 'rider')->first();
        if (!$account_type) {
            return back()->with('status', 'Account type not found');            
        }

        $country = Country::find($validated['country']);
        if (!$country) {
            return back()->with('status', 'Country not found');            
        }

        $state = State::find($validated['state']);
        if (!$state) {
            return back()->with('status', 'State not found');            
        }
        
        $user = new User();
        $user->account_type_id = $account_type->id; // courier account type
        $user->password = Hash::make($validated['password']);
        $user->email = $validated['email'];
        $user->token = $this->generateRandomTokenId(20);
        $user->save();

        $information = new UsersInformation();
        $information->user_id = $user->id;
        $information->firstname = $validated['firstname'];
        $information->lastname = $validated['lastname'];
        $information->email = $validated['email'];
        $information->phone = $validated['phone'];
        $information->country_id = $validated['country'];
        $information->state_id = $validated['state'];
        $information->date_registered = date('Y-m-d H:i:s');

        if ($request->file('file')) {
            $display_image = $request->file('file');
            $avatarName = $display_image->getClientOriginalName();
            $display_image->move(public_path('uploads/images'), $avatarName);
            $information->display_image = $validated['display_image'];
        }
            
        $information->save();

        $rider = new Rider();
        $rider->user_id = $user->id;
        $rider->courier_id = $auth_user->id;
        $rider->availability = 1;
        $rider->created_by = $auth_user->id;
        $rider->save();

        // auth()->attempt($request->only('email', 'password'));

        // event(new Registered($user));

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('rider.list');

    }

    public function riderList()
    {
        $user = auth()->user();
        $riders = Rider::with('rider_information')->where('courier_id', $user->id)
                    ->simplePaginate(15);
        return view('fleetManagement.viewRiders', [
            'riders' => $riders
        ]);
    }

    public function riderInfo($id)
    {
        $user = auth()->user();
        $vehicle_types = VehicleType::all();

        $rider = Rider::with('rider_information.vehicle_type', 'user_data')
                ->where('courier_id', $user->id)
                ->where('id', $id)
                ->first();
        // echo '<pre>';
        // echo $rider;
        // echo '</pre>';
        // die;
        return view('fleetManagement.riderInfo', [
            'rider' => $rider,
            'vehicle_types' => $vehicle_types
        ]);
    }

    public function addRiderInformation(Request $request)
    {
        $validated = $request->validate([           
            'rider_id' => 'required|integer',
            'vehicle_type_id' => 'required|string',
            'plate_number' => 'required|string',
            'licence_path' => 'required|string',
        ]);

        $rider = Rider::find($validated['rider_id']);
        if (!$rider) {
            return back()->with('status', 'Rider not found');            
        }
           
        $info = new RiderInformation();
        $info->rider_id = $validated['rider_id'];
        $info->vehicle_type_id = $validated['vehicle_type_id'];
        $info->plate_number = $validated['plate_number'];
        $info->licence_path = $validated['licence_path'];
        $info->save();

        return redirect()->route('rider.info', ['id' => $validated['rider_id']]);
    }


    public function editRider($id)
    {
        $countries = Country::all();
        $states = State::all();

        $rider = Rider::find($id);

        return view('fleetManagement.editRider')->with([
            'countries' => $countries,
            'states' => $states,
            'rider' => $rider
        ]);
    }

    public function updateAvailablity(Request $request)
    {
        $rider = Rider::find($request->rider_id);
        $rider->availability = $rider->availability == 1 ? 0 : 1;
        $rider->save();
        return response()->json(['success' => $rider]);
    }

    

    public function updateRiderInformation(Request $request){
        $validated = $request->validate([           
            'user_id' => 'required|integer',
            'firstname' => 'string',
            'lastname' => 'string',
            'phone' => 'string',
            'country' => 'integer',
            'state' => 'integer',
            // 'display_image' => 'mimes:jpeg,png|max:100000'      
            'display_image' => 'image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $information = UsersInformation::where('user_id', $validated['user_id'])->first();
        $information->firstname = $validated['firstname'] ?? $information['firstname'];
        $information->lastname = $validated['lastname'] ?? $information['lastname'];
        $information->phone = $validated['phone'] ?? $information['phone'];
        $information->country_id = $validated['country'] ?? $information['country'];
        $information->state_id = $validated['state'] ?? $information['state'];

        if ($request->file('display_image')) {
            $image = $request->file('display_image');
            if (isset($information->display_image)) {
                $path = "uploads/images/".$information->display_image;
                if(file_exists(public_path($path))){
                    unlink(public_path($path));
                }
            }

            $imageName = time() . '-'. $information->user_id .'.' .$image->extension();
            $image->move(public_path('uploads/images'), $imageName);
            $information->display_image = $imageName;
        }
        $information->save();

        return back();
    }

    public function destroy($id)
    {
        $rider = Rider::find($id);
        $rider_id = $rider->id;
        $user_id = $rider->user_id;
        
        $information = UsersInformation::where('user_id', $user_id)->delete();
        $user = User::find($user_id)->delete();
        $riderInfo = RiderInformation::where('rider_id', $rider_id)->delete();
        $rider->delete();

        return back();
    }



    
}
