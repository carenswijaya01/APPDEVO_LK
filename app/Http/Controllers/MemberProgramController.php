<?php

namespace App\Http\Controllers;

use App\Models\MemberProgram;
use App\Models\Program;
use Illuminate\Http\Request;

class MemberProgramController extends Controller
{
    public function index()
    {
        return view('program.registration-program', [
            'programs' => Program::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_id' => 'required',
            'file' => 'required|mimes:pdf|file|max:5120|unique:member_programs,file',
            'reason' => 'required|max:255'
        ]);

        if (!$validated) {
            return redirect('/registration-program')->withErrors($validated);
        } else {
            $fileName = time() . '-' . $request->file->getClientOriginalName();

            $request->file('file')->storeAs('memberprogram-files', $fileName);

            $member_program = new MemberProgram();
            $member_program->program_id = $request->program_id;
            $member_program->user_id = $request->user_id;
            $member_program->file = $fileName;
            $member_program->reason = $request->reason;
            $member_program->save();

            return redirect('/home')->with('success', 'Barhasil!');
        }
    }

    public function show()
    {
        return view('program.validate-memberprogram', [
            'members' => MemberProgram::all()
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'member_program' => 'required',
            'status' => 'required'
        ]);

        MemberProgram::where('member_program', $request->member_program)->update($validated);
        return redirect('/admin/validate-memberprogram');
    }
}
