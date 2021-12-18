<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\UsersInformation;

class DashboardController extends Controller
{
    /*
     * Dashboard 
     */
    public function dashboard()
    {
        $auth_user = auth()->user()->information;

        $countries = Country::all();
        $states = State::all();
        
        return view('dashboards.dashboard')->with([
            'countries' => $countries,
            'states' => $states,
            'user' => $auth_user
        ]);
    }

    public function upload(Request $request){
        
        $image = $request->file('file');
        $imageName = time() . '.' .$image->extension();
        $image->move(public_path('uploads/documents'), $imageName);
        return response()->json(['success' => $imageName]);
    }


    // public function savePhoto(Request $request)
    // {
    //     request()->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
 
    //     $image = $request->file('image');

    //     $imageName = time() . '.' .$image->extension();
    //     $image->move(public_path('uploads'), $imageName);
            
    //     return response()->json([
    //         "success" => true,
    //         "image" => $imageName
    //     ]);
 
    //     return response()->json([
    //         "success" => false,
    //         "image" => ''
    //     ]);
    // }
}
