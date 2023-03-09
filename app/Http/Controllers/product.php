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
        $sort = \App\Models\kategory::orderby($name, $sort)->get();
        return view('katalog', ['prod'=>$prod, 'sort'=>$sort]);
    }
    // public function katal_s($name='id', $sort = 'desc')
    // {
    //     $prod = \App\Models\kategory::orderby($name, $sort)->get();
    //     return view('katalog', ['prod'=>$prod]);
    // }
    public function katal_sort($id)
    {
        $prod = \App\Models\product::where('id', $id)->get();
        return view('katalog', ['prod'=>$prod]);
    }
    public function sort_min()
    {
        $prod = \App\Models\product::orderby('price', 'asc')->get();
        return view('katalog', ['prod'=>$prod]);
    }
    public function sort_max()
    {
        $prod = \App\Models\product::orderby('price', 'desc')->get();
        return view('katalog', ['prod'=>$prod]);
    }
    public function admin_bd($name='id', $sort = 'desc')
    {
        $prod = \App\Models\product::orderby($name, $sort)->get();
        $kat = \App\Models\kategory::all();
        return view('admin', ['prod'=>$prod, 'kat' => $kat]);
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
            "image" => $location.$filename,
            "froms" => $req->input("country"),
            "kolvo" => $req->input("count"),
            "data_create" => $req->input("data_create"),
            "text" => $req->input("text"),
            "id_kat" => $req->input("id_kat")
        ]);
        
        return redirect(route('admin'));
    }   
    public function add_kategory(Request $req)
    {
        \App\Models\kategory::create([
            "name_kategory" => $req->input("kategory_name"),
        ]);
        return redirect(route('admin'));
    }
   
}
