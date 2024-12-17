<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NgdVattuController extends Controller
{
    //
     //List(R)/create/edit/delete
public function list(){
    //Lay du lieu tu db qua ORM
    $ngdVattus=ngdvattu::paginate(10);
    return view('NgdVattu.List',['ngdVattus'=>$ngdVattus]);
}
}
