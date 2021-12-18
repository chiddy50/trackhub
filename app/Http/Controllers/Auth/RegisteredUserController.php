<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UsersInformation;
use App\Models\AccountType;
use App\Models\Country;
use App\Models\State;
use App\Models\CourierMerchant;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\CreateUserRequest;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(CreateUserRequest $request)
    {
        $validated = $request->validated();
        // $account_type = AccountType::find($validated['account_type']);

        // if (!$account_type) {
        //     return back()->with('status', 'Account type not found');            
        // }

        $country = Country::find($validated['country']);
        if (!$country) {
            return back()->with('status', 'Country not found');            
        }

        $state = State::find($validated['state']);
        if (!$state) {
            return back()->with('status', 'State not found');            
        }

        $user = new User();
        $user->account_type_id = 3; // courier account type
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
        // $information->display_image = $validated['display_image'];

        // $image = $request->file('display_image');
        // if ($image) {
        //     $imageName = time() . $validated['firstname'].'-'.$validated['lastname'] .'.' .$image->extension();
        //     $image->move(public_path('uploads'), $imageName);
        //     $information->display_image = $imageName;
        // }

        $information->save();

        $courierDocs = new CourierMerchant();
        $courierDocs->user_id = $user->id;
        $courierDocs->activated = 0;
        $courierDocs->save();
        
        auth()->attempt($request->only('email', 'password'));

        // event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
