<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function catchAction(Request $request)
        {
            $user = auth()->user();
            
            if ($user->characters->count() >= 5) {
                session()->flash('error', 'en fazla 5 pokemona sahip olabilirsiniz');
                
                return redirect()->back();
            }
            
            $user->characters()->attach(
                $request->get('character_id')
            );
            
            return redirect('/users/' . $user->id);
        }

	public function index(){
    	$users = User::all();
    	return view('users.index')->with('users',$users);
    }
	public function show($id)
	{
        $user = User::with('characters')->find($id);
        
        return view('users.show')->with('user', $user);
	}    

}
