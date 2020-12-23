<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cachorro;
class CachorroController extends Controller
{
    public function index(){

      $registros = Cachorro::all();
      return view('admin.cachorros.index', compact('registros'));
    }

    public function adicionar(){

      return view('admin.cachorros.adicionar');
    }

    public function salvar(Request $req){

      $dados = $req->all();
      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/cachorros";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }

      Cachorro::create($dados);
      return redirect()->route('admin.cachorros');
    }

    public function deletar($id){
      Cachorro::find($id)->delete();
      return redirect()->route('admin.cachorros');
    }
}
