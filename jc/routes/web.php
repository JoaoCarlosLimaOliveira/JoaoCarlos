<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProfileController;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $livros = Livro::where('id_do_usuario', Auth::id())->paginate(50);
    return view('dashboard')->with("livros", $livros);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cadastrar', function() {
        return view('cadastro');
    });

    Route::get('/editar/{id}', function($id) {
        return view('editar')->with("livro", Livro::where('id', $id)->first());
    });

    Route::post('/cadastrar', [LivroController::class, 'create']);
    Route::post('/editar/{id}', [LivroController::class, 'update']);
    Route::get('/deletar/{id}', [LivroController::class, 'delete']);
});

require __DIR__.'/auth.php';
