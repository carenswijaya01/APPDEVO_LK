<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::where('role', 'event')->paginate(10);
        return view('proposal.index', ['events'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proposal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'nim'     => 'required',
            'name'     => 'required',
            'email'     => 'required',
            'password'   => 'required | confirmed',
        ]);
        $data['password'] = Hash::make($data['password']);
        $admin = Admin::create($data + ['role' => 'event']);

        if ($admin) {
            //redirect dengan pesan sukses
            return redirect()->route('proposal.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $proposal)
    {
        return view('proposal.edit', ['event' => $proposal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $proposal)
    {
        $data = $this->validate($request, [
            'nim' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'confirmed'
        ]);

        $data['password'] = is_null($data['password']) ? $proposal->password : Hash::make($request->password);

        $proposal->update($data);
        return redirect()->route('proposal.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $proposal)
    {
        $proposal->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
