<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile = Profile::find(auth()->id());

        return view('profile.edit', compact('profile'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
      
        request()->validate(Profile::$rules);
        $data = $request->all();
        if($data['password']===null){
            unset($data['password']);
            unset($data['password_confirmation']);
        } else {
            if ($data['password'] === $data['password_confirmation']){
                $data['password'] = Hash::make($data['password']);
            } else {
                return redirect()->back() 
                ->with('error', 'Password and confirmation must be equal');
                exit();
            }
        }
        $profile->update($data);
        return redirect()->route('profile.index')
            ->with('success', 'Profile updated successfully');
    }
}
