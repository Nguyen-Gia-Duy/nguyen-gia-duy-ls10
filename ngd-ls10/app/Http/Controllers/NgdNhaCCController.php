<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NgdNhaCCController extends Controller
{
    //List(R)/create/edit/delete
public function list(){
    //Lay du lieu tu db qua ORM
    $ngdNhaCCs=NgdNhaCC::all();
    return view('NgdNhaCC.List',['ngdNhaCCs'=>$ngdNhaCCs]);
}
}
