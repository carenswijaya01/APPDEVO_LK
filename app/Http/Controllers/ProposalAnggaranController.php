<?php

namespace App\Http\Controllers;

use App\Models\ProposalAnggaran;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ProposalAnggaranController extends Controller
{

    private $validRole;

    public function __construct()
    {
        $this->validRole = Role::where('sub_admin', true)->whereNotIn('role', [Role::ADMIN, Role::INPOS])->get(['id','role'])->toArray();
    }

    public function index()
    {
        $datas = ProposalAnggaran::with('kegiatan')->where('admin_id', auth()->id())->get();
        $roles = $this->validRole;
        return view('pemegang-kegiatan.proposal-anggaran.tentang-anggaran', compact('datas', 'roles'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'file' => 'file|required|max:5120|mimes:xls,xlsx',
            'description' => 'required|string',
            'role_id'=> 'required|numeric',
        ]);

        if(array_search($request->role_id, array_column($this->validRole,'id')) !== false){
            $file = $request->file('file')->store('anggaran');
            $validated['file'] = $file;

            ProposalAnggaran::create($validated+ ['admin_id'=>auth()->id()]);
            return redirect()->route('tentang-anggaran')->with('success','Berhasil menambahkan proposal anggaran');
        }
        return redirect()->route('tentang-anggaran')->with('error','Gagal menambahkan proposal anggaran');
    }

    public function download(ProposalAnggaran $proposalAnggaran)
    {
        if(auth()->user()->role->role == $proposalAnggaran->role->role) {
            return Storage::disk('public')->download($proposalAnggaran->file);
        }
        return redirect()->back()->with("error","Gagal mendownload data");
    }

//    ADMIN Role
    public function indexStatus()
    {
        $allowed = array_search(auth()->user()->role->role, array_column($this->validRole,'id')) !== false;

        $proposals = ProposalAnggaran::with('role')->where('role_id', auth()->user()->role_id)->get();
        return view("role.proposal-anggaran-all",compact('proposals'));
    }

    public function setStatus(ProposalAnggaran $proposalAnggaran, Request $request)
    {
        $validated = $request->validate(['status'=>'required|in:fix,revisi']);

        if(auth()->user()->role->role == $proposalAnggaran->role->role){
            ProposalAnggaran::where('id',$proposalAnggaran->id)->update($validated);
            return redirect()->back()->with('success',"Berhasil merubah status menjadi ". $request->status);
        }
        return redirect()->back()->with('error',"Gagal merubah status");
    }
}
