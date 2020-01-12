<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Processo;
use Illuminate\Http\Request;

class ProcessoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        $processos = Processo::get();
        return view('processos.lista', ['processos' => $processos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('processos.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $processo = new Processo();

        $processo = $processo->create($request->all());

        \Session::flash('mensagem_sucesso', 'Processo cadastrado com sucesso!');

        return Redirect::to('processos/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function show(Processo $processo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Processo $processo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $processo = Processo::findOrFail($id);
        return view('processos.formulario', ['processo' => $processo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Processo $processo
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $processo = Processo::findOrFail($id);

        $processo->update($request->all());

        \Session::flash('mensagem_sucesso', 'Processo atualizado com sucesso!');

        return Redirect::to('processos/'.$processo->id.'/editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Processo $processo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $processo = Processo::findOrFail($id);

        $processo->delete();

        \Session::flash('mensagem_sucesso', 'Processo excluído com sucesso!');

        return Redirect::to('processos');
    }

}
