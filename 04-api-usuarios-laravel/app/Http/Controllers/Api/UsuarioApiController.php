<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsuarioApiRequest;
use App\Http\Resources\UsuarioApiResource;
use App\Models\UsuariosApi;
use Illuminate\Http\Request;

class UsuarioApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = UsuariosApi::all();
        return UsuarioApiResource::collection($usuarios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioApiRequest $request)
    {
        $usuario = UsuariosApi::create($request->validated());
        return new UsuarioApiResource($usuario);
    }

    /**
     * Display the specified resource.
     */
    public function show(UsuariosApi $usuario)
    {
       return response()->json([
            'status' => true,
            'usuario' => $usuario,
       ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUsuarioApiRequest $request, UsuariosApi $usuario)
    {
        $usuario->update($request->validated());
        return new UsuarioApiResource($usuario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsuariosApi $usuario)
    {
        $usuario->delete();
        return response(null, 204);
    }
}
