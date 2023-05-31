<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
public function index(){
    $user = Auth::user();
    if (!$user){
    return redirect()->route('login');
    }
    if ($user->tipo_usuario == 'admin') {
        return view('admin.index');
    } elseif ($user->tipo_usuario == 'camarero') {
        return view('camarero.index');
    } elseif ($user->tipo_usuario == 'chef') {
        return view('chef.index');
    }else{
	return view('welcome');
}
}
}
