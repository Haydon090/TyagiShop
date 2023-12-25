<?php

namespace App\Http\Controllers;

use App\Models\Tyaga;
use Illuminate\Http\Request;

class TyagiController extends Controller
{
    public function index()
    {
        $tyagi = Tyaga::all();
        return view("dashboard", compact('tyagi'));
    }
    public function create()
    {
        return view('tyagi.create');
    }

    public function store(Request $request)
    {


        Tyaga::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Tyaga created');
    }
    public function show(int $id)
    {
        $tyaga = Tyaga::find($id);
        return view('tyagi.show', compact('tyaga'));
    }

    public function edit(Tyaga $tyaga)
    {
        return view('tyagi.edit', compact('tyaga'));
    }
    public function update(Tyaga $tyaga, Request $request)
    {

        $tyaga->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Tyaga updated');
    }
    public function destroy(Tyaga $tyaga)
    {
        $tyaga->delete();
        return redirect()->route('dashboard')->with('success', 'Tyaga deleted');
    }
}
