<?php

namespace App\Http\Controllers;

 use DB; 
use Illuminate\Http\Request;

class cursocontroller extends Controller
{
public function index(Request $request) {
    $cursos = DB::select('SELECT * FROM cursos');
    return view('cursos',["cursos"=>$cursos]);
}
public function agregar(Request $request) {
    return view('cursosAgregar');
}
    public function guardar(Request $request)
    {

		DB::table('cursos')->insert([
		    [
		        'curso_id' => 0,
		        'nombre' => $request->nombre,
		        'descripcion' => $request->descripcion,
		        'precio' => $request->precio,
		        'duracion_horas' => $request->duracion,
		        'categoria_id' => $request->categoria,
		    ],

		    // Agrega más arrays según sea necesario
		]);

        // Redirecciona a alguna vista o ruta después de guardar el cursos
        return redirect('cursos')->with('success', '¡Curso creado correctamente!');
    }
    public function eliminar($id)
    {

	DB::delete('DELETE FROM cursos WHERE curso_id = '. $id);
			

        // Redirecciona a alguna vista o ruta después de guardar el cursos
        return redirect('cursos')->with('success', '¡Curso eliminado correctamente!');
    }
    public function ver($id)
    {

	$cursos = DB::select('SELECT * FROM cursos WHERE curso_id = '. $id);
    return view('/cursosVer',["cursos"=>$cursos[0]]);		

    }
}

