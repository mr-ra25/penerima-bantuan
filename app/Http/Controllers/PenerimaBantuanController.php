<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBantuan;
use Illuminate\Http\Request;

class PenerimaBantuanController extends Controller
{
    public function index()
    {
        $data = PenerimaBantuan::all();
        return view('penerima_bantuan.index', compact('data'));
    }

    public function create()
    {
        return view('penerima_bantuan.create');
    }

    public function store(Request $request)
    {
        PenerimaBantuan::create($request->all());
        return redirect('/penerima-bantuan');
    }

    public function show($id)
    {
        $data = PenerimaBantuan::findOrFail($id);
        return view('penerima_bantuan.show', compact('data'));
    }

    public function edit($id)
    {
        $data = PenerimaBantuan::findOrFail($id);
        return view('penerima_bantuan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = PenerimaBantuan::findOrFail($id);
        $data->update($request->all());
        return redirect('/penerima-bantuan');
    }

    public function destroy($id)
    {
        $data = PenerimaBantuan::findOrFail($id);
        $data->delete();
        return redirect('/penerima-bantuan');
    }
}