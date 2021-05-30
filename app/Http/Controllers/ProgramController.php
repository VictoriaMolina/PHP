<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function index()
    {
        $program = DB::table('programs')
            ->orderby('idProgram', 'asc')
            ->get();

        return view('programs.inicio', [
            'programs' => $program
        ]);
    }


    public function create()
    {
        return view('programs.detalle');
    }


    public function store(Request $request)
    {
        $program = DB::table('programs')->insert([
            'nameProgram' => $request->input('name'),
            'genre' => $request->input('genre'),
            'chapters' => $request->input('chapters'),
            'month' => $request->input('month')
        ]);

        return redirect()->action([ProgramController::class, 'index']);
    }


    public function show($id)
    {
        $program = DB::table('programs')
            ->where('idProgram', '=', $id)
            ->first();

        return view('programs.detalle', ['program' => $program]);
    }


    public function edit($id)
    {
    }


    public function update(Request $request)
    {
        $program = DB::table('programs')
            ->where('idProgram', '=', $request->input('id'))
            ->update([
                'nameProgram' => $request->input('name'),
                'genre' => $request->input('genre'),
                'chapters' => $request->input('chapters'),
                'month' => $request->input('month')
            ]);

        return redirect()->action([ProgramController::class, 'index']);
    }


    public function destroy($id)
    {
        $program = DB::table('programs')
            ->where('idProgram', '=', $id)
            ->delete();
        return redirect()->action([ProgramController::class, 'index']);
    }
}
