<?php

namespace App\Http\Controllers;
Use App\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());

        return response()->json($categoria, 201);
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());

        return response()->json($categoria, 200);
    }

    public function delete(Categoria $categoria)
    {
        $categoria->delete();

        return response()->json(null, 204);
    }
}
