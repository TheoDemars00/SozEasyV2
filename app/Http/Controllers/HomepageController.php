<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;

use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    
    public function index(): View
    {
        dd(Auth::User());
        // User::create([
        //     'nom' => 'Doe',
        //     'prenom' => 'Jonh',
        //     'email' => 'Jonh@doe.fr',
        //     'password' => Hash::make('0000'),
        // ]);
        return view("homepage");
    }


}
