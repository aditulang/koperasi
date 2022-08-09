<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;


class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('types.index', compact('types'));        
    }
    public function store(TypesRequest $request)
    {

        Type::create($request->all());

        flash('Jenis pinjaman berhasil ditambahkan.');

        return redirect()->route('types.index');
    }
}
