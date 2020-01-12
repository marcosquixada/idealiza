<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Atendentes;
use Illuminate\Http\Request;

class AtendentesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $atendentes = Atendentes::get();
        return view('atendentes.lista', ['atendentes' => $atendentes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atendentes.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atendente = new Atendentes();

        $atendente = $atendente->create($request->all());

        \Session::flash('mensagem_sucesso', 'Atendente cadastrado(a) com sucesso!');

        return Redirect::to('atendentes/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atendentes  $atendente
     * @return \Illuminate\Http\Response
     */
    public function show(Atendentes $atendente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atendentes $atendente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atendente = Atendentes::findOrFail($id);
        return view('atendentes.formulario', ['atendente' => $atendente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atendentes $atendente
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $atendente = Atendentes::findOrFail($id);

        $atendente->update($request->all());

        \Session::flash('mensagem_sucesso', 'Atendente atualizado(a) com sucesso!');

        return Redirect::to('atendentes/'.$atendente->id.'/editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atendentes $atendente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atendente = Atendentes::findOrFail($id);

        $atendente->delete();

        \Session::flash('mensagem_sucesso', 'Atendente excluído(a) com sucesso!');

        return Redirect::to('atendentes');
    }

}
