<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::with('role')->where('role_id', '!=', Role::getId(Role::KEGIATAN))->paginate(10);
        return view('admin.dataadmin', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('sub_admin', true)->get();
        return view('admin.admin', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'nim' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required | confirmed',
            'role_id' => 'required|numeric',
        ]);
        $data['password'] = Hash::make($data['password']);
        $admin = Admin::create($data);

        if ($admin) {
            //redirect dengan pesan sukses
            return redirect('/admin/admin')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $roles = Role::where('sub_admin', true)->orWhere('role',Role::SUPERADMIN)->get();
        return view('admin.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $data = $this->validate($request, [
            'nim' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'confirmed',
            'role_id'=> 'required|numeric',
        ]);

        if($admin->role_id == Role::getId(Role::SUPERADMIN)) $data['role_id'] = Role::getId(Role::SUPERADMIN);

        $data['password'] = is_null($data['password']) ? $admin->password : Hash::make($request->password);

        $admin->update($data);
        return redirect('/admin/admin')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        if ($admin->role == Role::SUPERADMIN) return redirect()->back()->with('error', 'Data tidak bisa dihapus!');
        $admin->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
