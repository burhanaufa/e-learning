<?php



namespace App\Http\Controllers\Auth;

use App\Siswa;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;



class SiswaLoginController extends Controller

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



    protected $guard = 'siswa';
    protected $redirectTo = '/home';



    /**

     * Where to redirect users after login.

     *

     * @var string

     */



    /**

     * Create a new controller instance.

     *

     * @return void

     */


    public function __construct()

    {

        $this->middleware('guest:siswa')->except('logout');

    }



    public function showLoginForm()

    {

        return view('auth.siswaLogin');

    }

    public function guard()
    {
        return auth()->guard('siswa');
    }



    public function login(Request $request)

    {
        $this->validate($request, [
            'nis' => 'required|integer',
            'password' => 'required|min:6'
        ]);

        if (auth()->guard('siswa')->attempt(['nis' => $request->nis, 'password' => $request->password])) {

            dd(auth()->guard('siswa')->guest());

        }



        return redirect()->back()
        ->withInput()
        ->withErrors([
            'login' => 'These credentials do not match our records.',]);

    }
//     protected function credentials(Request $request)
// {
//     $nis = filter_var($request->input(‘nis’), FILTER_VALIDATE_USERNAME)
//     ? ’nis’
//     : ‘password’;

//         $request->merge([
//     $nis => $request->input(‘nis’)
//     ]);

//     return $request->only($nis, ‘password’);
//     }

//     public function nis()
//     {
//     return ‘nis’;
//     }


}
