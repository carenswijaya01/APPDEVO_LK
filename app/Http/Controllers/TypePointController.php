<?php

namespace App\Http\Controllers;

use App\Models\TypePoint;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TypePointController extends Controller
{
    public function index(): View
    {
        return view('type-point.index',['typePoints'=> TypePoint::all()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $typePoint = TypePoint::whereName($request->name)->firstOrFail();
        $validated = $this->validate($request,[ 'limit'=> 'required|numeric' ]);
        $typePoint->update($validated);

        return back()->withSuccess("Berhasil merubah point ".$typePoint->name." menjadi ". $request->max_point);
    }
}
