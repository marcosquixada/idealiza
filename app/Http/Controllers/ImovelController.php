<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $imoveis = Imovel::get();
        return view('imoveis.lista', ['imoveis' => $imoveis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imoveis.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imovel = new Imovel();

        $imovel = $imovel->create($request->all());

        \Session::flash('mensagem_sucesso', 'Imovel cadastrado com sucesso!');

        return Redirect::to('imoveis/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function show(Imovel $imovel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Imovel $imovel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imovel = Imovel::findOrFail($id);
        return view('imoveis.formulario', ['imovel' => $imovel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Imovel $imovel
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $imovel = Imovel::findOrFail($id);

        $imovel->update($request->all());

        \Session::flash('mensagem_sucesso', 'Imovel atualizado com sucesso!');

        return Redirect::to('imoveis/'.$imovel->id.'/editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imovel $imovel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imovel = Imovel::findOrFail($id);

        $imovel->delete();

        \Session::flash('mensagem_sucesso', 'Imovel excluído com sucesso!');

        return Redirect::to('imoveis');
    }

}
