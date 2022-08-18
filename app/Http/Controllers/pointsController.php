<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Point;
use App\Models\TypePoint;
use Illuminate\Http\Request;
use Storage;

class pointsController extends Controller
{
    private string $path = '/point';

    public function index()
    {
        return view('point.index', ['users' => User::paginate(10)]);
    }
    public function create()
    {
        $typePoints = TypePoint::all();
        $users = User::all();
        $model = new Point;
        return view('point.create', compact('model', 'typePoints', 'users'));
    }
    public function store(Request $request)
    {
        $typePoint = TypePoint::findOrFail($request->type_point_id);

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'point' => 'required|numeric',
            'file' => 'required|file|mimes:pdf|max:10000', // 10mb
            'type_point_id' => 'required|numeric|exists:type_points,id',
        ]);

        $validated['file'] = $request->file('file')->store($this->path);
        Point::create($validated + ['admin_id' => auth()->guard('admin')->user()->id]);
        return redirect('/admin/points')->withSuccess("berhasil menambahkan point");
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $points = $user->point()->with(['user','admin','type_point'])->latest()->paginate(10);
        return view('point.show',compact('points','user'));
    }

    public function edit(Point $point)
    {
        $typePoints = TypePoint::all();
        $users = User::all();
        return view('point.edit', compact('point', 'users', 'typePoints'));
    }

    public function update(Point $point, Request $request)
    {
        $typePoint = TypePoint::findOrFail($request->type_point_id);
        $rules = [
            'user_id' => 'required|exists:users,id',
            'point' => 'required|numeric',
            'type_point_id' => 'required|numeric|exists:type_points,id',
        ];
        if (!is_null($request->file))
            $rules['file'] = 'required|file|mimes:pdf|max:30000'; // 30mb
        $validated = $request->validate($rules);

        if (!is_null($request->file)) {
            Storage::delete($point->file);
            $validated['file'] = $request->file('file')->store($this->path);
        } else {
            $validated['file'] = $point->file;
        }
        $point->update($validated + ['admin_id' => auth()->guard('admin')->user()->id]);
        return redirect()->route('points.index')->withSuccess("berhasil menambahkan point");
    }

    public function destroy(Point $point)
    {
        $point->delete();
        Storage::delete($point->file);
        return redirect()->back()->with('success', "Berhasil menghapus Point");
    }
}
