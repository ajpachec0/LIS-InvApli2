<?php


namespace App\Http\Controllers;



use Auth;
use App\Libro;
use Illuminate\Http\Request;




class LibrosControllerApi extends Controller
{
    
    public function index()
    {
      $libros = Libro::all();
      return $libros;
    }



    public function store(Request $request)
    {
      $libro = new Libro;
      $libro->titulo          = $request->titulo;
      $libro->descripcion          = $request->descripcion;
      $libro->precio          = $request->precio;
      $libro->save();


      return $libro;
    }




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




    public function deletelibro(Libro $libro){

        $libro->delete();

        return response([
                "message" => "Borrado"
            ]);

    }


}
