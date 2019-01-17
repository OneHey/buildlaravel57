<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $userSocial = Socialite::driver($provider)->stateless()->user();
//        return $userSocial->token;

//        dd($userSocial);

        $findUser = User::where('email',$userSocial->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect($this->redirectTo);
        }else{
            $user = new User;
            $user->name = $userSocial->getName();
            $user->email = $userSocial->id;
            $user->password = bcrypt(123456);
            $user->remember_token = $userSocial->token;
            $user->save();
            Auth::login($user);
            return redirect($this->redirectTo);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    function authenticated(Request $request, $user)
    {
        $user->update([
            'last_login_at' => Carbon::now(env('TIME_ZONE_VN'))->toDateTimeString(),
        ]);
    }

    
}
