<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['trabajadores']=Empleado::paginate(5);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');
        if($request->hasFile('foto')){
            $datosEmpleado['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        DB::table('empleado')->insert($datosEmpleado);

        return response()->json($datosEmpleado, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    /* public function edit(Empleado $empleado) */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    /* public function update(Request $request, Empleado $empleado)*/
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {
            // Eliminamos la foto antigua antes de subir la nueva
            $empleado2 = Empleado::findOrFail($id);
            if (Storage::exists('public/'.$empleado2->Foto)) {
                Storage::delete('public/'.$empleado2->Foto);
            } else {
                dd('File does not exists.');
            }
            $datosEmpleado['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        Empleado::where('id','=', $id)->update($datosEmpleado);

        // consulta temporal y regresa al mismo formulario
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(Empleado $empleado)*/
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('empleados'); //retorna a la lista
    }
}
