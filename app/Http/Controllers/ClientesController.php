<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;




class ClientesController extends Controller
{
    //
    public function index()
    {
        $url = env('APP_URL_SERVER', 'http://localhost');
        $response = Http::get($url . '/clients');
        $data = $response->json();

        return view('clientes', compact('data'));
    }

    public function create()
    {
        return view('cliente');
    }

    //crear por post un nuevo cliente (esto llegará desde el formulario))
    public function store(Request $request)
    {
        $url = env('APP_URL_SERVER', 'http://localhost:8001');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post($url . '/clients', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);


        return redirect()->route('clientes.index');
    }

    //eliminar un cliente
    public function delete($id)
    {


        $url = env('APP_URL_SERVER', 'http://localhost:8001');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->delete($url . '/clients/' . $id);


        return redirect()->route('clientes.index');
    }

    //eliminar un cliente
    public function view($id)
    {
        $url = env('APP_URL_SERVER', 'http://localhost:8001');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get($url . '/clients/' . $id);

        $cliente = $response->json()['client'];
        return view('clienteView', compact('cliente'));
    }

    //actualizar un cliente
    public function update(Request $request)
    {


        $url = env('APP_URL_SERVER', 'http://localhost:8001');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->put($url . '/clients/' . $request->id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);


        return redirect()->route('clientes.index');
    }
}
