<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = Produto::with('produto')->get();
        return view('produto.index', compact('produto'));
    }

    public function create()
    {
        $produto = Produto::all();
        $categoria = Categoria::all();
        return view('produto.create', compact('produto', 'categoria'));
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->produto_nome = $request->input('produto_nome');
        $produto->preco = $request->input('preco');
        $produto->estoque = $request->input('estoque');
        $produto->categoria_id = $request->input('categoria_id');
        $produto->save();
        return redirect()->route('produto.index', compact('produto'));
    }

    public function show($id)
    {
        $produto = Produto::where('id', $id)->first();
        $chapter = $produto->categoria_id()->first();
        return view('produto.show', compact('produto', 'chapter'));
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            return view('produto.edit', compact('produto'));
        }
        return view('produto.index');
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->produto_nome = $request->input('produto_nome');
            $produto->preco = $request->input('preco');
            $produto->estoque = $request->input('estoque');
            $produto->categoria_id = $request->input('categoria_id');
            $produto->save();
        }
        return redirect()->route('produto.index', compact('produto'));
    }

    public function destroy(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->status = false;
            $produto->save();
        }
        return redirect()->route('produto.index', compact('produto'));
    }
}
