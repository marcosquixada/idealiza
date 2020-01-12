<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Condominio;
use Illuminate\Http\Request;

class CondominioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $condominios = Condominio::get();
        return view('condominios.lista', ['condominios' => $condominios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('condominios.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $condominio = new Condominio();

        $condominio = $condominio->create($request->all());

        \Session::flash('mensagem_sucesso', 'Condominio cadastrado com sucesso!');

        return Redirect::to('condominios/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function show(Condominio $condominio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Condominio $condominio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condominio = Condominio::findOrFail($id);
        return view('condominios.formulario', ['condominio' => $condominio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condominio $condominio
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $condominio = Condominio::findOrFail($id);

        $condominio->update($request->all());

        \Session::flash('mensagem_sucesso', 'Condominio atualizado com sucesso!');

        return Redirect::to('condominios/'.$condominio->id.'/editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Condominio $condominio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condominio = Condominio::findOrFail($id);

        $condominio->delete();

        \Session::flash('mensagem_sucesso', 'Condominio excluído com sucesso!');

        return Redirect::to('condominios');
    }

}
