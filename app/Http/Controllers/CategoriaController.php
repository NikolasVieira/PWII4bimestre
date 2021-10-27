<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = Categoria::where('status', '=', true)->get();
        return view('categoria.index', compact('categoria'));
    }

    public function create()
    {
        $categoria = Categoria::all();
        return view('categoria.create', compact('categoria'));
    }

    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->categoria_nome = $request->input('categoria_nome');
        $categoria->save();
        return redirect()->route('categoria.index', compact('categoria'));
    }

    public function show($id)
    {
        $categoria = Categoria::where('id', $id)->first();
        return view('categoria.show', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        if (isset($categoria)) {
            return view('categoria.edit', compact('categoria'));
        }
        return view('categoria.index');
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        if (isset($categoria)) {
            $categoria->categoria_nome = $request->input('categoria_nome');
            $categoria->save();
        }
        return redirect()->route('categoria.index', compact('categoria'));
    }

    public function destroy(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        if (isset($categoria)) {
            $categoria->status = false;
            $categoria->save();
        }
        return redirect()->route('categoria.index', compact('categoria'));
    }
}
