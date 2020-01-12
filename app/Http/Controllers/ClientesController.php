<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clientes = Clientes::get();
        return view('clientes.lista', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Clientes();

        $cliente = $cliente->create($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');

        return Redirect::to('clientes/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.formulario', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes $cliente
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $cliente = Clientes::findOrFail($id);

        $cliente->update($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente atualizado com sucesso!');

        return Redirect::to('clientes/'.$cliente->id.'/editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Clientes::findOrFail($id);

        $cliente->delete();

        \Session::flash('mensagem_sucesso', 'Cliente excluído com sucesso!');

        return Redirect::to('Clientess');
    }

}
