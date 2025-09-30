<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
<<<<<<< HEAD

        
=======
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'role' => ['required', 'string', 'in:employe,employeur'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

<<<<<<< HEAD
        
        if(Auth::user()->role === 'admin'){
            return redirect()->route('admin.dashboard');
        }
        elseif(Auth::user()->role === 'employeur'){
            return redirect()->route('employeur.dashboard');
        }
        elseif(Auth::user()->role === 'employe'){
            return redirect()->route('employe.dashboard');
        }


        // return redirect(route('dashboard', absolute: false));
=======
        return redirect(route('dashboard', absolute: false));
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
    }
}
