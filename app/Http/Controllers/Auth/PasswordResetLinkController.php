<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use App\Models\Token;
use App\Jobs\ForgetPasswordJob;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function sendPasswordResetEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // // We will send the password reset link to this user. Once we have attempted
        // // to send the link, we will examine the response then see the message we
        // // need to show to the user. Finally, we'll send out a proper response.
        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );

        // return $status == Password::RESET_LINK_SENT
        //             ? back()->with('status', __($status))
        //             : back()->withInput($request->only('email'))
        //                     ->withErrors(['email' => __($status)]);

        $user = User::whereEmail($request->email)->first();

        if (!$user) {
            return redirect('forgot-password')->with('error', 'Email does not exist');
        }else{
            $reset_code = Str::random(50);

            $user_expired_tokens = Token::where('user_id', $user->id)->update(['is_valid' => 0]);

            $token = new Token();
            $token->user_id = $user->id;
            $token->token = $reset_code;
            $token->save();
            
            $url = url('redirect-to-reset-password/'.$reset_code);
            
            $emailData = [
                'user' => $user, 
                'email' => $user->email, 
                'reset_code' => $reset_code, 
                'url' => $url
            ];
            // dd($emailData);
            ForgetPasswordJob::dispatch($emailData);

            // return redirect('auth/confirm-email')->with([
            //     'user' => $user, 

            // ]);
            return view('auth.verify-email')->with([
                'email' => $request->email
            ]);


        }        
    }

    public function redirectToPasswordReset($reset_code){
        $token = Token::where('token',$reset_code)->first();
        
        $is_expired_token = Carbon::now()->subMinutes(10) > $token->created_at;
        // dd($is_expired_token);        

        if (!$token || $is_expired_token){
            return redirect('forgot-password')->with('error', 'Invalid password reset link or link expired');
        }else{
            $user = User::where('id',$token->user_id)->first();

            return view('auth.confirm-password')->with([
                'user' => $user,
                'reset_code' => $reset_code
            ]);
        }
    }

    public function goToResetPassword(){

    }
}
