<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Point;
class pointsController extends Controller
{
    public function index()
    {
       $points=DB::table('points')->get();
       return view('index',['points'=> $points]);
    }
    public function create()
    {
        $model = new Point;
    return view('create',compact('model'));
    }
    public function store(Request $Request)
    {
        //dd($Request);
        $model = new Point;
        $model->point_id= $Request->point_id;
        $model->admin_id= $Request->admin_id;
        $model->user_id= $Request->user_id;
        $model->file= $Request ->file;
        $model->type_point_id= $Request->type_point_id;
        $model->point = $Request->point;
        $model->save();
        return redirect('/admin/points');
    }

    public function show(){
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


