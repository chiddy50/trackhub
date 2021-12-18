<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersInformation;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Http\Requests\User\UpdateUserProfileRequest;

class UserController extends Controller
{
    public function updateUserProfile(UpdateUserProfileRequest $request)
    {
        $validated = $request->validated();
        $user = auth()->user();

        $information = UsersInformation::where('user_id', $user->id)->first();
        if (!$information) {
            return back()->with('status', 'User information could not be found');            
        }

        $country = Country::find($validated['country']);
        if (!$country) {
            return back()->with('status', 'Country not found');            
        }

        $state = State::find($validated['state']);
        if (!$state) {
            return back()->with('status', 'State not found');            
        }

        $information->firstname = $validated['firstname'];
        $information->lastname = $validated['lastname'];
        $information->email = $validated['email'];
        $information->phone = $validated['phone'];
        $information->country_id = $validated['country'];
        $information->state_id = $validated['state'];

        if ($request->hasFile('display_image')) {
            $image = $request->file('display_image');
            if (isset($information->display_image)) {
                $path = "uploads/images/".$information->display_image;
                if(file_exists(public_path($path))){
                    unlink(public_path($path));
                }                
            }

            $imageName = time() .'-' . $user->id .'.' .$image->extension();
            $image->move(public_path('uploads/images'), $imageName);
            $information->display_image = $imageName;
        }

        $information->save();
        return back();
    }
}
