<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategory extends Controller
{
    protected $table = 'kategories';
    public function delete_kat($id)
    {
        \App\Models\product::where('id_kat', $id)->delete();
        \App\Models\kategory::find($id)->delete();
        
        return redirect(route('admin'));
    }
}
