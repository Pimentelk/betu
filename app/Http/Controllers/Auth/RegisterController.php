<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\Activate;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/tasklist';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first'     => 'required|string|max:255',
            'last'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone'     => 'required',
            'password'  => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first'     => $data['first'],
            'last'      => $data['last'],
            'email'     => $data['email'],
            'phone'     => $data['phone'],
            'password'  => bcrypt($data['password']),
            'token'     => ((string) Str::Uuid())
        ]);
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        \Mail::to($user->email)->send(new Activate($user));
        $this->guard()->logout();
        return redirect('/login')->with(
            'status',
            'We sent you an activation code. Check your email and click on the link to activate your account.'
        );
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    public function activate($token)
    {
        $user = User::where('token', $token)->first();

        if (!isset($user)) {
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }

        if (!$user->verified) {
            $user->verified = 1;
            $user->save();
            $status = "Your e-mail is verified. You can now login.";
        }
        else {
            $status = "Your e-mail is already verified. You can now login.";
        }

        return redirect('/login')->with('status', $status);
    }
}
