<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::orderBy('created_at', 'desc');
        return view('clientes_cadastrados',['clientes_cadastrados' => $cliente]);
    }
  
    public function create()
    {
        return view('criar_reserva');
    }
  
    public function store(ProductRequest $request)
    {
        $cliente = new Cliente;
        $cliente->nome        = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->endereco    = $request->endereco;
        $cliente->telefone       = $request->telefone;
        $cliente->email       = $request->email;
        $cliente->sexo       = $request->sexo;
        $cliente->save();
        return redirect()->route('criar_reserva')->with('message', 'Reserva cadastrada com sucesso!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente_edit',compact('cliente'));
    }
  
    public function update(ProductRequest $request, $id)
    {
        $cliente = Product::findOrFail($id);
        $cliente->nome        = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->endereco    = $request->endereco;
        $cliente->telefone       = $request->telefone;
        $cliente->email       = $request->email;
        $cliente->sexo       = $request->sexo;
        $cliente->save();
        return redirect()->route('criar_reserva')->with('message', 'Reserva cadastrada com sucesso!');
    }
  
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes')->with('alert-success','Cliente excluído!');
    }
}
