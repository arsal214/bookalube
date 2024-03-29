<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $user = Auth::user();
        if ($user->is_admin != '0' && $user->is_admin == '1')
        {
            return redirect('login')->with('success', 'Login successfully.');
        }else
        {
            return redirect('login')->withErrors(['Please Enter Valid Crenditional']);;
        }
        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Display the login view.
     */
    public function adminCreate(): View
    {
        return view('auth.admin-login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function adminLogin(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $user = Auth::user();
        if ($user->is_admin != '1' && $user->is_admin == '0') {
            $request->session()->regenerate();
            return redirect('catalog/engines')->with('success', 'Login successfully.');
        }
        Auth::guard('web')->logout();
        return redirect()->route('admin.login')->withErrors(['Please Enter Valid Crenditional']);;
    }



    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
