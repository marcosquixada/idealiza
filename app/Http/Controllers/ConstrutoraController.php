<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Construtora;
use Illuminate\Http\Request;

class ConstrutoraController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $construtoras = Construtora::get();
        return view('construtoras.lista', ['construtoras' => $construtoras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('construtoras.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $construtora = new Construtora();

        $construtora = $construtora->create($request->all());

        \Session::flash('mensagem_sucesso', 'Construtora cadastrada com sucesso!');

        return Redirect::to('construtoras/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Construtora  $construtora
     * @return \Illuminate\Http\Response
     */
    public function show(Construtora $construtora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Construtora $construtora
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $construtora = Construtora::findOrFail($id);
        return view('construtoras.formulario', ['construtora' => $construtora]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Construtora $construtora
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $construtora = Construtora::findOrFail($id);

        $construtora->update($request->all());

        \Session::flash('mensagem_sucesso', 'Construtora atualizada com sucesso!');

        return Redirect::to('construtoras/'.$construtora->id.'/editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Construtora $construtora
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $construtora = Construtora::findOrFail($id);

        $construtora->delete();

        \Session::flash('mensagem_sucesso', 'Construtora excluída com sucesso!');

        return Redirect::to('construtoras');
    }

}
