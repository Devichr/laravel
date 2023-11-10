<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use Hash;
class RegisterController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        User::create([
            'name' => $input['name'],
            'level'=> $input['level'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);
        return view('contact.thanks');
    }
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required |numeric'
        ]);

        return view('proses',['data' => $request]);
    }
}
