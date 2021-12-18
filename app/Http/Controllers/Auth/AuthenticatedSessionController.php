<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CourierMerchant;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $request->authenticate();

        // $request->session()->regenerate();

        
        $this->validate($request, [
            'email' => 'bail|required|email',
            'password' => 'bail|required',
        ]); 
        
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid login details');
        }
        $auth_user = auth()->user();
        $courierDocs = CourierMerchant::where('user_id', $auth_user->id)
                        ->whereNotNull('company_name')
                        ->whereNotNull('company_address')
                        ->whereNotNull('company_phone')
                        ->whereNotNull('company_phone')
                        ->whereNotNull('cac_number')
                        ->whereNotNull('cac_document_path')
                        ->first();
        if (!$courierDocs) {
            // dd($courierDocs);
            return redirect('/add-courier');
        }

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
