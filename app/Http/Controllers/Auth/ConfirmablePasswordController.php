<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Token;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function confirmPassword(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'password' => 'required|confirmed|min:6|max:100',
            'password_confirmation' => 'required|min:6|max:100',
        ]);
        
        $user = User::find($request->user_id);
        $user_expired_tokens = Token::where('user_id', $user->id)->update(['is_valid' => 0]);

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login');
            

        // if (! Auth::guard('web')->validate([
        //     'email' => $request->user()->email,
        //     'password' => $request->password,
        // ])) {
        //     throw ValidationException::withMessages([
        //         'password' => __('auth.password'),
        //     ]);
        // }

        // $request->session()->put('auth.password_confirmed_at', time());

        // return redirect()->intended(RouteServiceProvider::HOME);
    }
}
