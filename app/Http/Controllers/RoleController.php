<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::all();
        return $role;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verifyRole = Role::find($request->id);

        if( $verifyRole == null ){

            $role = new Role();
            $type = $request->type;
            $description = $request->description;

            if( !(is_numeric( $type )) and !(is_numeric( $description )) ){
                Role::create([
                    'type' => $type,
                    'description' => $description
                ]);
            }else{
                return "Error en los parámetros ingresados";
            }
        }else{
            return "Error al ingresar Rol, llave primaria ya existente";
        }
        return Role::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        if( $role != null ){
            return $role;
        }else{
            return "No se ha encontrado el Rol buscado";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $verifyRole = Role::find($role->id);

        if( $verifyRole != null ){

            $type = $request->type;
            $description = $request->description;

            if( !(is_numeric( $type )) and !(is_numeric( $description )) ){

                $role->updateOrCreate([
                    'id' => $role->id
                ],
                [
                    'type' => $type,
                    'description' => $description
                ]);
            }

            else{
                return "Error en los parámetros ingresados";
            }
        }

        else{
            return "Error al actualizar Rol, llave primaria no existente";
        }

        return Role::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */

    public function destroy(Role $role)
    {
        if( $role != null ){
            $role->delete();
            return "Se ha eliminado un Rol";
        }else{
            return "No se ha encontrado el Rol a eliminar";
        }
    }
}
