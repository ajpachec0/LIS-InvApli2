<?php


namespace App\Http\Controllers;



use Auth;
use App\Libro;
use Illuminate\Http\Request;




class LibrosControllerApi extends Controller
{
    
    ///////////////////////////////////////////////////////////
    //METODO INDEX PARA OBTENCION DE LOS REGISTROS
    public function index()
    {
      $libros = Libro::all();
      return $libros;
    }
    ///////////////////////////////////////////////////////////


    ///////////////////////////////////////////////////////////
      //METODO STORE PARA GUARDAR LOS REGISTROS
    public function store(Request $request)
    {
      $libro = new Libro;
      $libro->titulo          = $request->titulo;
      $libro->descripcion          = $request->descripcion;
      $libro->precio          = $request->precio;
      $libro->save();
      return $libro;
    }

    ///////////////////////////////////////////////////////////




    ///////////////////////////////////////////////////////////
      //METODO STORE PARA MOSTRAR UN REGISTRO ESPECIFICO

    public function showlibro($libro)
    {

        $libro = Libro::find($libro);

        if(!empty($libro) ){
            return $libro;
        }else{
            return response([
                "message" => "No encontrado"

            ]);
        }
    }
    ///////////////////////////////////////////////////////////


    ///////////////////////////////////////////////////////////
      //METODO STORE PARA BORRAR UN REGISTRO ESPECIFICO

    public function deletelibro(Libro $libro){

        $libro->delete();

        return response([
                "message" => "Borrado Exitoso"
            ]);
    }
    ///////////////////////////////////////////////////////////


}
