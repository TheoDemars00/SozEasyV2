<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;

use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(): View
    {

        
        
        // User::create([
        //     'nom' => 'Doe',
        //     'prenom' => 'Jonh',
        //     'email' => 'Jonh@doe.fr',
        //     'password' => Hash::make('0000'),
        // ]);
        return view("Homepage");
    }
}
