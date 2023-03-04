<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Korzina extends Controller
{
    public function add($id)
    {
        $prod = \App\Models\korzina::create([
            "id_prod"=>$id,
            "id_user"=>Auth::user()->id
        ]);
        return redirect(route('home'));
    }   
    public function all_korzina()
    {
        $id = Auth::user()->id;
        $prod = \App\Models\korzina::where('id_user', $id)->get();
        return view('home', ['prod'=>$prod]);
    }
    public function delete($id)
    {
        \App\Models\korzina::find($id)->delete();
        return redirect(route('home'));
    }

}
