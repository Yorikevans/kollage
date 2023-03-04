<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class product extends Controller
{
    public function product($name='id', $sort = 'desc')
    {
        $prod = \App\Models\product::orderby($name, $sort)->limit(5)->get();
        return view('index', ['prod'=>$prod]);
    }
    public function katal($name='id', $sort = 'desc')
    {
        $prod = \App\Models\product::orderby($name, $sort)->get();
        return view('katalog', ['prod'=>$prod]);
    }
    public function admin_bd($name='id', $sort = 'desc')
    {
        $prod = \App\Models\product::orderby($name, $sort)->get();
        return view('admin', ['prod'=>$prod]);
    }
    public function podrob($id)
    {
        $prod = \App\Models\product::find($id);
        return view('info_tov', ['prod'=>$prod]);
    }
    public function delete($id)
    {
        \App\Models\product::find($id)->delete();
        return redirect(route('admin'));
    }
    public function add_tov(Request $req)
    {
        $file = $req->file('img_url');
        $filename = time().'_'.$file->getClientOriginalName();
        $location = "images/";
        $file->move($location, $filename);
        \App\Models\product::create([
            "name_tovar" => $req->input("name_tovar"),
            "price" => $req->input("price_tovar"),
            "image" => $location.$filename
        ]);
        return redirect(route('admin'));
    }   
}
