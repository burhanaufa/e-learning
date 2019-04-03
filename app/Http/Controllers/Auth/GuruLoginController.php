<?php

 

namespace App\Http\Controllers\Auth;

 

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

 

class GuruLoginController extends Controller

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

 

    // protected $guard = 'guru';

 

    /**

     * Where to redirect users after login.

     *

     * @var string

     */

    protected $redirectTo = '/home';

 

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }

 

    public function showLoginForm()

    {

        return view('auth.guruLogin');

    }

  

    public function login(Request $request)

    {

        if (auth()->guard('guru')->attempt(['nip' => $request->nip, 'password' => $request->password])) {

            dd(auth()->guard('siswa')->user());

        }

 

        return back()->withErrors(['nip' => 'Nomor Induk or password are wrong.']);

    }

}