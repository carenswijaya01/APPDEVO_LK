<?php

namespace App\Http\Controllers;

use App\Models\MemberProgram;
use Illuminate\Http\Request;

class MemberProgramController extends Controller {
    public function store(Request $request) {
        $validated = $request->validate([
            'program_id' => 'required',
            'file' => 'required|mimes:pdf',
            'reason' => 'required|max:255'
        ]);

        if (!$validated) {
            return redirect('/registration-program')->withErrors($validated);
        } else {
            $request->file('file')->store('files');

            $member_program = new MemberProgram();
            $member_program->program_id = $request->program_id;
            $member_program->file = $request->file->getClientOriginalName();
            $member_program->reason = $request->reason;
            $member_program->status = 'mendaftar';
            $member_program->save();

            return redirect('/')->with('success', 'Barhasil!');
        }
    }
}
