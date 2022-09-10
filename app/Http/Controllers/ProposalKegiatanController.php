<?php

namespace App\Http\Controllers;

use App\Models\ProposalKegiatan;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ProposalKegiatanController extends Controller
{
    private $validRole;

    public function __construct()
    {
        $this->validRole = Role::where('sub_admin', true)->whereNotIn('role', [Role::INPOS])->get(['id', 'role'])->toArray();
    }

    public function index()
    {
        $datas = ProposalKegiatan::with('kegiatan')->where('admin_id', auth()->id())->get();
        $datass = Admin::where('id', auth()->id())->first();
        $roles = $this->validRole;
        // dd($datass);
        return view('pemegang-kegiatan.proposal-kegiatan.tentang-kegiatan', compact('datas', 'roles', 'datass'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'file' => 'file|required|max:5120|mimes:doc,docx',
            'description' => 'required|string',
            'role_id' => 'required|numeric',
        ]);

        if (array_search($request->role_id, array_column($this->validRole, 'id')) !== false) {
            $file = $request->file('file')->store('kegiatan');
            $validated['file'] = $file;

            ProposalKegiatan::create($validated + ['admin_id' => auth()->id()]);
            return redirect()->route('tentang-kegiatan')->with('success', 'Berhasil menambahkan proposal kegiatan');
        }
        return redirect()->route('tentang-kegiatan')->with('error', 'Gagal menambahkan proposal kegiatan');
    }

    public function download(ProposalKegiatan $proposalKegiatan)
    {
        if (auth()->user()->role->role == $proposalKegiatan->role->role) {
            return Storage::disk('public')->download($proposalKegiatan->file);
        }
        return redirect()->back()->with("error", "Gagal mendownload data");
    }

    //    ADMIN Role
    public function indexStatus()
    {
        $allowed = array_search(auth()->user()->role->role, array_column($this->validRole, 'id')) !== false;

        $proposals = ProposalKegiatan::with('role')->where('role_id', auth()->user()->role_id)->get();
        return view("role.proposal-kegiatan-all", compact('proposals'));
    }

    public function detailProposal($id)
    {
        $datas = ProposalKegiatan::where('id', $id)->first();
        // dd($datas);
        return view("detailProposal", compact('datas'));
    }

    public function setStatus(ProposalKegiatan $proposalKegiatan, Request $request)
    {
        $validated = $request->validate(['status' => 'required|in:fix,revisi']);

        if (auth()->user()->role->role == $proposalKegiatan->role->role) {
            ProposalKegiatan::where('id', $proposalKegiatan->id)->update($validated);
            return redirect()->back()->with('success', "Berhasil merubah status menjadi " . $request->status);
        }
        return redirect()->back()->with('error', "Gagal merubah status");
    }
}
