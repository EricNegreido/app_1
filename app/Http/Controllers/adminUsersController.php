<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Foto;
use Illuminate\Support\Facades\Session;


class adminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("admin.users.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.users.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $result = $request->all();
        if($archivo = $request->file("foto_id")){
            $nombre = $archivo->getClientOriginalName();
            $archivo->move(public_path("images"), $nombre);
            $foto = Foto::create(['ruta_foto'=>$nombre]);
            $result['foto_id'] = $foto->id;
        }
        $result['password'] = bcrypt($request->password);
        User::create($result);
        return redirect('admin/users');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $result = $request->all();
        if($archivo = $request->file("foto_id")){
            $nombre = $archivo->getClientOriginalName();
            $archivo->move(public_path("images"), $nombre);
            $foto = Foto::create(['ruta_foto'=>$nombre]);
            $result['foto_id'] = $foto->id;
        }
        $user->update($result);
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        Session::flash('usuario_borrado','El usuario a sido elminado');
        $user->delete();
        return redirect('admin/users');

    }
}
