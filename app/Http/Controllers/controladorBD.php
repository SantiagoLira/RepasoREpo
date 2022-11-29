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
        return view('registro',compact('resultLibros'));
        
    }
    public function indexCliente()
    {
        $resultclientes = DB::table('tb_clientes')->get();
        return view('registro',compact('resultclientes'));
    }

    public function createLibro()
    {
        return view('registro');
    }
    public function createCliente()
    {
        return view('resgistarCliente');
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
    }

    public function storeClientes(ValidatorClient $cliente)
    {
        DB::table('tb_clientes')->insert([
            "nombre"=> $cliente->input('txtNombre'),
            "apellido"=> $cliente->input('txtApellido'),
            "ine"=> $cliente->input('txtINE'),
            "email"=> $cliente->input('txtEmailCliente'),
            "created_at"=> carbon::now(),
            "updated_at"=> carbon::now()
        ]);
    }

    public function showLibro($idLibro)
    {
        $libro = DB::table('tb_libros')->where('idLibro',$idLibro)->first();
        return redirect('eliminarLibro',compact('libro'));
    }

    public function showCliente($idCliente)
    {
        $cliente = DB::table('tb_clientess')->where('idCliente',$idCliente)->first();
        return redirect('eliminarCliente',compact('cliente'));
    }

    public function editLibro($idLibro)
    {
        $libro = DB::table('tb_libros')->where('idLibro',$idLibro)->first();
        return redirect('editarLibro',compact('libro'));
    }
    public function editCliente($idCliente)
    {
        $cliente = DB::table('tb_clientes')->where('idCliente',$idCliente)->first();
        return redirect('editarCliente',compact('cliente'));
    }

    public function updateLibro(validatorForms $libro, $idLibro)
    {
        DB::table('tb_libros')->where('idLibro',$idLibro)->update([
            "isbn"=> $libro->input('txtISBN'),
            "titulo"=> $libro->input('txtTitulo'),
            "autor"=> $libro->input('txtAutor'),
            "paginas"=> $libro->input('txtPaginas'),
            "editorial"=> $libro->input('txtEditorial'),
            "email"=> $libro->input('txtEmailEditorial'),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('libros')->with('edicion',"tu cliente se actualizo");
    }
    public function updateCliente(ValidatorClient $cliente, $idCliente)
    {
        DB::table('tb_clientes')->where('idCliente',$idCliente)->update([
            "nombre"=> $cliente->input('txtNombre'),
            "apellido"=> $cliente->input('txtApellido'),
            "ine"=> $cliente->input('txtINE'),
            "email"=> $cliente->input('txtEmailCliente'),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('clientes')->with('edicion',"tu cliente se actualizo");
    }

    public function destroyLibro($idLibro)
    {
        DB::table('tb_libros')->where('idLibro',$idLibro)->delete();
        return redirect('editarLibro')->with('clienteEliminado','');
    }

    public function destroyCLiente($idCliente)
    {
        DB::table('tb_clientes')->where('idCliente',$idCliente)->delete();
        return redirect('editarCliente')->with('clienteEliminado','');
    }
}
