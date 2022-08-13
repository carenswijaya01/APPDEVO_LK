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
    public function store(Request $request)
    {
        // $validated = $this->validate($request,[

        // ]);
        $model = new Point;
        $model->point_id= $request->point_id;
        $model->admin_id= $request->admin_id;
        $model->user_id= $request->user_id;
        $model->file= $request->file;
        $model->type_point_id= $request->type_point_id;
        $model->point = $request->point;
        $model->save();
        return redirect('/admin/points');
    }

    public function show(){
    }
    public function edit($id)
    {

    }
    public function update(Request $request)
    {

    }
    public function destroy($id)
    {

    }

}


