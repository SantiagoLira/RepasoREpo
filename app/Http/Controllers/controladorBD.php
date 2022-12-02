<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidatorClient;
use App\Http\Requests\validatorForms;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class controladorBD extends Controller
{

    public function indexLibro()
    {
        $resultLibros = DB::table('tb_libros')->get();
        return view('CatLibros',compact('resultLibros'));
        
    }
    public function indexCliente()
    {
        $resultclientes = DB::table('tb_clientes')->get();
        return view('CatClientes',compact('resultclientes'));
    }

    public function createLibro()
    {
        $resultLibros = DB::table('tb_libros')->get();
        return view('CatLibros',compact('resultLibros'));
    }
    public function createCliente()
    {
        $resultclientes = DB::table('tb_clientes')->get();
        return view('CatClientes',compact('resultclientes'));
    }

    public function storeLibro(validatorForms $libro)
    {
        DB::table('tb_libros')->insert([
            "isbn"=> $libro->input('txtISBN'),
            "titulo"=> $libro->input('txtTitulo'),
            "autor"=> $libro->input('txtAutor'),
            "paginas"=> $libro->input('txtPaginas'),
            "editorial"=> $libro->input('txtEditorial'),
            "email"=> $libro->input('txtEmailEditorial'),
            "created_at"=> carbon::now(),
            "updated_at"=> carbon::now()
        ]);
        $data = $libro->input('txtTitulo');
        return redirect('CatLibros/create')->with('exito',compact('data'));
    }

    public function storeCliente(ValidatorClient $cliente)
    {
        DB::table('tb_clientes')->insert([
            "nombre"=> $cliente->input('txtNombre'),
            "apellido"=> $cliente->input('txtApellido'),
            "ine"=> $cliente->input('txtINE'),
            "email"=> $cliente->input('txtEmailCliente'),
            "created_at"=> carbon::now(),
            "updated_at"=> carbon::now()
        ]);
        $data = $cliente->input('txtNombre');
        return redirect('CatClientes/create')->with('exito',compact('data'));
    }

    public function showLibro($idLibro)
    {
        $libro = DB::table('tb_libros')->where('idLibro',$idLibro)->first();
        return redirect('CatLibros',compact('libro'));
    }

    public function showCliente($idCliente)
    {
        $cliente = DB::table('tb_clientess')->where('idCliente',$idCliente)->first();
        return redirect('CatClientes',compact('cliente'));
    }

    public function editLibro($idLibro)
    {
        $libro = DB::table('tb_libros')->where('idLibro',$idLibro)->first();
        return redirect('CatLibros',compact('libro'));
    }
    public function editCliente($idCliente)
    {
        $cliente = DB::table('tb_clientes')->where('idCliente',$idCliente)->first();
        return redirect('CatClientes',compact('cliente'));
    }

    public function updateLibro(Request $request, $idLibro)
    {
        DB::table('tb_libros')->where('idLibro',$idLibro)->update([
            "isbn"=> $request->input('txtISBN'),
            "titulo"=> $request->input('txtTitulo'),
            "autor"=> $request->input('txtAutor'),
            "paginas"=> $request->input('txtPaginas'),
            "editorial"=> $request->input('txtEditorial'),
            "email"=> $request->input('txtEmailEditorial'),
            "updated_at"=> Carbon::now()
        ]);
        $data = $request->input('txtTitulo');
        return redirect('CatLibros')->with('edicion',compact('data'));
    }
    public function updateCliente(Request $request, $idCliente)
    {
        DB::table('tb_clientes')->where('idCliente',$idCliente)->update([
            "nombre"=> $request->input('txtNombre'),
            "apellido"=> $request->input('txtApellido'),
            "ine"=> $request->input('txtINE'),
            "email"=> $request->input('txtEmailCliente'),
            "updated_at"=> Carbon::now()
        ]);
        $data = $request->input('txtNombre');
        return redirect('CatClientes')->with('edicion',compact('data'));
    }

    public function destroyLibro($idLibro)
    {
        DB::table('tb_libros')->where('idLibro',$idLibro)->delete();
        return redirect('CatLibros')->with('libroEliminado','');
    }

    public function destroyCLiente($idCliente)
    {
        DB::table('tb_clientes')->where('idCliente',$idCliente)->delete();
        return redirect('CatClientes')->with('clienteEliminado','');
    }
}
