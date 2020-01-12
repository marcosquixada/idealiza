<?php

namespace App\Http\Controllers;

use App\Mail\VerificaEmailMail;
use App\Pessoa;
use App\User;
use Auth;
use DNS1D;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mail;
use PDFSNAPY;
use Validator;


class AdminController extends Controller
{
//    public function index(Request $request){
//        if($request->is('*/folha')){
//            $files = Storage::allDirectories("/arquivos/folha");
//            return view('files.lista', ['files' => $files]);
//        } elseif ($request->is('*/certidoes')) {
//            $files = Storage::allDirectories("/arquivos/certidoes");
//            //dd($files);
//            return view('files.lista', ['files' => $files]);
//        } elseif ($request->is('*/contratos')) {
//            $files = Storage::allDirectories("/arquivos/contratos");
//            return view('files.lista', ['files' => $files]);
//        } elseif ($request->is('*/impostos')) {
//            $files = Storage::allDirectories("/arquivos/impostos");
//            return view('files.lista', ['files' => $files]);
//        } elseif ($request->is('*/demonstracoes')) {
//            $files = Storage::allDirectories("/arquivos/demonstracoes");
//            return view('files.lista', ['files' => $files]);
//        }
//    }

    public function redefinir(){
        return view('admin.redefinir');
    }

    public function verificaemail(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else{
            $usercount = User::where('email',$request->email)->count();

            if($usercount > 0){
                $user = $user = User::where('email',$request->email)->first();
                Mail::to($user->email)->send(new VerificaEmailMail($user));
                return redirect()->back()->with('success','Verificado com sucesso! Um email foi enviado com um link para redefinição de senha');
            }else{
                return redirect()->back()->with('error','Este email não existe em nossa base de dados.');
            }
        }

    }

    public function newpassword($id,$hash){
        $user = User::where('id',$id)->where('email',\App\Providers\Util::encrypt_decrypt('D',$hash))->first();

        if(empty($user)){
            abort(404);
        }

        return view('admin.newpassword',['user'=>$user]);
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }else{
            $remember = $request->remember;
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password], $remember)){
                return redirect()->intended('painel');
            }else{
                return redirect('/')->with('msg','Usuário inválido');
            }
        }
    }

//    public function update(Request $request)
//    {
//        $user = Auth::getUser();
//
//        $users = User::all();
//
//        $tipo = "";
//        if($request->is('*/folha/create')){
//            $tipo = "folha";
//        } elseif ($request->is('*/certidoes/create')) {
//            $tipo = "certidoes";
//        } elseif ($request->is('*/contratos/create')) {
//            $tipo = "contratos";
//        } elseif ($request->is('*/impostos/create')) {
//            $tipo = "impostos";
//        } elseif ($request->is('*/demonstracoes/create')) {
//            $tipo = "demonstracoes";
//        }
//
//        $arquivo = $request->file('file')->getClientOriginalName();
//
//        $request->file('file')->move(
//            base_path() . '/storage/app/arquivos/'.$tipo.'/'.$user->nome.'/', $arquivo
//        );
//
//        \Session::flash('mensagem_sucesso', 'Arquivo enviado com sucesso!');
//
//        return view('files.formulario', ['tipo' => $tipo, '' => $users]);
//    }

    public function create(Request $request)
    {
        $users = User::where('perfil', null)->get();
        return view('files.formulario', ['request' => $request, 'clientes' => $users]);
    }

    function upload(Request $request){
        $users = User::where('perfil', 'USER')->get();
        $arquivo = $request->file('file')->getClientOriginalName();

        $request->file('file')->move(
            base_path() . '/storage/app/arquivos/'.$request->tipo.'/'.$request->dir.'/', $arquivo
        );

        \Session::flash('mensagem_sucesso', 'Arquivo enviado com sucesso!');

        return view('files.formulario', ['request' => $request, 'clientes' => $users]);
    }

    public function listaArquivos(Request $request){
        $user = Auth::getUser();
        if($user->perfil == "ADMIN"){
            if($request->dir != null){
                $files = Storage::allFiles("/arquivos/".$request->tipo."/".$request->dir);
                return view('files.listaArq', ['files' => $files, 'request' => $request]);
            } else {
                $files = Storage::allDirectories("/arquivos/".$request->tipo);
                return view('files.listaDir', ['files' => $files, 'request' => $request]);
            }
        } else {
            $files = Storage::allFiles("/arquivos/".$request->tipo."/".Auth::getUser()->name);
            return view('files.listaArq', ['files' => $files, 'request' => $request]);
        }
    }

    function getFile(Request $request){
        //dd($url);
        $file= storage_path().'/app/arquivos/'.$request->tipo.'/'.$request->dir.'/'.$request->nome;
        return response()->download($file, 'arquivo.pdf');
    }
}
