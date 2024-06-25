<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivroController extends Controller
{
    public function create(Request $request){
        $livro = $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'edicao' => 'required',
            'editora' => 'required',
            'ano_de_publicacao' => 'required'
        ]);

        $livro = new Livro();
        $livro->id_do_usuario = Auth::id();
        $livro->autor = $request->autor;
        $livro->titulo = $request->titulo;
        $livro->subtitulo = $request->subtitulo;
        $livro->edicao = $request->edicao;
        $livro->editora = $request->editora;
        $livro->ano_de_publicacao = $request->ano_de_publicacao;

        $livro->save();

        return redirect('/dashboard');
    }
    public function delete($id){
        Livro::find($id)->delete();
        return redirect('/dashboard');
    }
    public function update(Request $request, $id){
        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'edicao' => 'required',
            'editora' => 'required',
            'ano_de_publicacao' => 'required'
        ]);

        
        $livro = Livro::find($id);
        $livro->autor = $request->autor;
        $livro->titulo = $request->titulo;
        $livro->subtitulo = $request->subtitulo;
        $livro->edicao = $request->edicao;
        $livro->editora = $request->editora;
        $livro->ano_de_publicacao = $request->ano_de_publicacao;

        $livro->update();

        return redirect('/dashboard');
    }
}
