<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Hash;

use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    
    public function index(): View
    {
        // User::create([
        //     'id'=>'2',
        //     'nom' => 'Jouve',
        //     'prenom' => 'Theo',
        //     'email' => 'Theo@Jouve.fr',
        //     'password' => Hash::make('1111'),
        //     'fidelite' => '500',
        // ]);
        return view("homepage");
    }


}
