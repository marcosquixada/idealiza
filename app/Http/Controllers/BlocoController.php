<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlocoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $blocos = Bloco::get();
        return view('blocos.lista', ['blocos' => $blocos]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('blocos.formulario');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $bloco = new Processo();

        $bloco = $bloco->create($request->all());

        \Session::flash('mensagem_sucesso', 'Bloco cadastrado com sucesso!');

        return Redirect::to('blocos/novo');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $bloco = Bloco::findOrFail($id);
        return view('blocos.formulario', ['bloco' => $bloco]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $bloco = Bloco::findOrFail($id);

        $bloco->update($request->all());

        \Session::flash('mensagem_sucesso', 'Bloco atualizado com sucesso!');

        return Redirect::to('blocos/'.$bloco->id.'/editar');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $bloco = Bloco::findOrFail($id);

        $bloco->delete();

        \Session::flash('mensagem_sucesso', 'Bloco excluído com sucesso!');

        return Redirect::to('blocos');
	}

}
