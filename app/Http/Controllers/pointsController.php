<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class pointsController extends Controller
{
    public function index()
    {
       $points=DB::table('points')->get();
       dd($points)::
       //return view('index',['points'=> $points]);
    }
    public function create()
    {
//form creaate data
    }
    public function store(Request $Request)
    {
DB::table('points')->inset([
    'point_id'=> $Request->point_id,
    'admin_id'=> $Request->admin_id,
    'user_id'=> $Request->user_id,
    'file'=> $Request ->file,
    'type_point_id'=> $Request->type_point_id,
    'point'=> $Request->point
]);
return redirect('/points');
    }

    public function edit($id)
    {

    }
    public function update(Request $Request)
    {

    }
    public function destroy($id)
    {

    }
    
}


