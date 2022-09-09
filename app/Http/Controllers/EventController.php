<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
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
        $event = Admin::where('role_id', Role::getId(Role::KEGIATAN))->paginate(10);
        return view('event.index', ['events'=>$event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
        $admin = Admin::create($data + ['role_id' => Role::getId(Role::KEGIATAN)]);

        if ($admin) {
            //redirect dengan pesan sukses
            return redirect()->route('event.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(Admin $event)
    {
        return view('event.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $event)
    {
        $data = $this->validate($request, [
            'nim' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'confirmed'
        ]);

        $data['password'] = is_null($data['password']) ? $event->password : Hash::make($request->password);

        $event->update($data);
        return redirect()->route('event.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $event)
    {
        $event->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
