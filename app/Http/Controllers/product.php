<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function product($name='id', $sort = 'desc')
    {
        $prod = \App\Models\product::orderby($name, $sort)->get();
        return view('index', ['prod'=>$prod]);
    }
    public function katal($name='id', $sort = 'desc')
    {
        $prod = \App\Models\product::orderby($name, $sort)->get();
        return view('katalog', ['prod'=>$prod]);
    }
    public function podrob($id)
    {
        $prod = \App\Models\product::find($id);
        return view('info_tov', ['prod'=>$prod]);
    }
}
