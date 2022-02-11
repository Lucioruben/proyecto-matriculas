<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Matricula;
use Illuminate\Http\Request;

class MatriculasController extends Controller
{

	function getAll()
	{
		$response = new \stdClass();
		$response->success = true;

		$matriculas = Matricula::all();
		$response->data=$matriculas;

		return response()->json($response,200);
	}

	function getItem($id)
	{
		$response = new \stdClass();
		$response->success = true;

		$matricula = Matricula::find($id);
		$response->data = $matricula;

		return response()->json($response,200);
	}

	function store(Request $request)
	{
		$response = new \stdClass();
		$response->success = true;

		$matricula=Matricula::where("dni","=",$request->dni)->first();
		if($matricula)
		{
			$response->success=false;
			$response->errors=[];
			$response->errors[]="Ya existe estudiante con dni ".$request->dni;
			return response()->json($response,400);
		}

		$matricula = new Matricula();
		$matricula->dni = $request->dni;
		$matricula->apellidos = $request->apellidos;
		$matricula->nombres = $request->nombres;
		$matricula->nivel = $request->nivel;
		$matricula->grado = $request->grado;
		$matricula->codigoseguro = $request->codigoseguro;
		$matricula->dnipadre = $request->dnipadre;
		$matricula->apellidospadre = $request->apellidospadre;
		$matricula->nombrespadre = $request->nombrespadre;
		$matricula->celularpadre = $request->celularpadre;
		$matricula->ocupacionpadre = $request->ocupacionpadre;
		$matricula->direccionpadre = $request->direccionpadre;
		$matricula->dnimadre = $request->dnimadre;
		$matricula->apellidosmadre = $request->apellidosmadre;
		$matricula->nombresmadre = $request->nombresmadre;
		$matricula->celularmadre = $request->celularmadre;
		$matricula->ocupacionmadre = $request->ocupacionmadre;
		$matricula->direccionmadre = $request->direccionmadre;
		$matricula->dniapoderado = $request->dniapoderado;
		$matricula->apellidosapoderado = $request->apellidosapoderado;
		$matricula->nombresapoderado = $request->nombresapoderado;
		$matricula->celularapoderado = $request->celularapoderado;
		$matricula->ocupacionapoderado = $request->ocupacionapoderado;
		$matricula->direccionapoderado = $request->direccionapoderado;		
		$matricula->save();

		$response->data = $matricula;

		return response()->json($response,201);
	}

	function update(Request $request)
	{
		$response = new \stdClass();
		$response->success=true;

		$matricula = Matricula::find($request->id);
		$matricula->dni = $request->dni;
		$matricula->apellidos = $request->apellidos;
		$matricula->nombres = $request->nombres;
		$matricula->nivel = $request->nivel;
		$matricula->grado = $request->grado;
		$matricula->codigoseguro = $request->codigoseguro;
		$matricula->dnipadre = $request->dnipadre;
		$matricula->apellidospadre = $request->apellidospadre;
		$matricula->nombrespadre = $request->nombrespadre;
		$matricula->celularpadre = $request->celularpadre;
		$matricula->ocupacionpadre = $request->ocupacionpadre;
		$matricula->direccionpadre = $request->direccionpadre;
		$matricula->dnimadre = $request->dnimadre;
		$matricula->apellidosmadre = $request->apellidosmadre;
		$matricula->nombresmadre = $request->nombresmadre;
		$matricula->celularmadre = $request->celularmadre;
		$matricula->ocupacionmadre = $request->ocupacionmadre;
		$matricula->direccionmadre = $request->direccionmadre;
		$matricula->dniapoderado = $request->dniapoderado;
		$matricula->apellidosapoderado = $request->apellidosapoderado;
		$matricula->nombresapoderado = $request->nombresapoderado;
		$matricula->celularapoderado = $request->celularapoderado;
		$matricula->ocupacionapoderado = $request->ocupacionapoderado;
		$matricula->direccionapoderado = $request->direccionapoderado;
		$matricula->save();

		$response->data = $matricula;

		return response()->json($matricula,200);		
	}

	function patch(Request $request)
	{
		$response = new \stdClass();
		$response->success=true;

		$matricula = Matricula::find($request->id);

		if(isset($request->dni))
		$matricula->dni = $request->dni;

		if(isset($request->apellidos))
		$matricula->apellidos = $request->apellidos;

		if(isset($request->nombres))
		$matricula->nombres = $request->nombres;

		if(isset($request->nivel))
		$matricula->nivel = $request->nivel;

		if(isset($request->grado))
		$matricula->grado = $request->grado;

		if(isset($request->codigoseguro))
		$matricula->codigoseguro = $request->codigoseguro;

		if(isset($request->dnipadre))
		$matricula->dnipadre = $request->dnipadre;

		if(isset($request->apellidospadre))
		$matricula->apellidospadre = $request->apellidospadre;

		if(isset($request->nombrespadre))
		$matricula->nombrespadre = $request->nombrespadre;

		if(isset($request->celularpadre))
		$matricula->celularpadre = $request->celularpadre;

		if(isset($request->ocupacionpadre))
		$matricula->ocupacionpadre = $request->ocupacionpadre;

		if(isset($request->direccionpadre))
		$matricula->direccionpadre = $request->direccionpadre;

		if(isset($request->dnimadre))
		$matricula->dnimadre = $request->dnimadre;

		if(isset($request->apellidosmadre))
		$matricula->apellidosmadre = $request->apellidosmadre;

		if(isset($request->nombresmadre))
		$matricula->nombresmadre = $request->nombresmadre;

		if(isset($request->celularmadre))
		$matricula->celularmadre = $request->celularmadre;

		if(isset($request->ocupacionmadre))
		$matricula->ocupacionmadre = $request->ocupacionmadre;

		if(isset($request->direccionmadre))
		$matricula->direccionmadre = $request->direccionmadre;

		if(isset($request->dniapoderado))
		$matricula->dniapoderado = $request->dniapoderado;

		if(isset($request->apellidosapoderado))
		$matricula->apellidosapoderado = $request->apellidosapoderado;

		if(isset($request->nombresapoderado))
		$matricula->nombresapoderado = $request->nombresapoderado;

		if(isset($request->celularapoderado))
		$matricula->celularapoderado = $request->celularapoderado;

		if(isset($request->ocupacionapoderado))
		$matricula->ocupacionapoderado = $request->ocupacionapoderado;

		if(isset($request->direccionapoderado))
		$matricula->direccionapoderado = $request->direccionapoderado;

		$matricula->save();

		$response->data = $matricula;

		return response()->json($matricula,200);		
	}

	function delete($id)
	{
		$response = new \stdClass();
		$response->success=true;

		$response_code;

		$matricula = Matricula::find($id);

		if($matricula)
		{
			$matricula->delete();
			$response_code=200;
		}
		else
		{
			$response->success=false;
			$response->errors = [];
			$response->errors[]="El estudiante ya ha sido eliminado previamente";
			$response_code=400;
		}

		return response()->json($response,$response_code);
	}

}

?>