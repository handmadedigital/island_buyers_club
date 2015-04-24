<?php namespace TGL\Auth\Http\Controllers;

use DateTime;
use Illuminate\Bus\Dispatcher;
use Illuminate\Contracts\Auth\Guard;
use TGL\Auth\Commands\UserLogInCommand;
use TGL\Auth\Commands\UserRegisterCommand;
use TGL\Auth\Http\Requests\LoginRequest;
use TGL\Auth\Http\Requests\RegisterRequest;
use TGL\Core\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * @param RegisterRequest $request
     * @param Dispatcher $dispatcher
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegister(RegisterRequest $request, Dispatcher $dispatcher)
    {
        $dispatcher->pipeThrough(['TGL\Core\Decorators\SlugGeneratorDecorator']);

        $this->dispatch(UserRegisterCommand::class, $request);

        return redirect()->route('login');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * @param LoginRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            $this->dispatch(UserLogInCommand::class);
            $this->auth->user()->updated_at = new DateTime();
            $this->auth->user()->save();

            return redirect()->intended('dashboard/'.$this->auth->user()->username);
        }

        return redirect()
            ->back()
            ->withInput($request->only('username', 'remember'))
            ->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getLogout()
    {
        $this->auth->logout();

        return redirect('/auth/login');
    }
}