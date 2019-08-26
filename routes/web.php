<?php
    use Illuminate\Http\Request;
    use App\Cliente;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login');


Route::get('/menu', function () {
    return view('Menu');
})->name('menu');

Route::get('/menu_calendario', function () {
    return view('menu_calendario');
})->name('menu_calendario');

Route::get('/criar_reserva', function () {
    return view('criar_reserva');
})->name('criar_reserva');

Route::get('/menu_valores', function () {
    return view('menu_valores');
})->name('menu_valores');

Route::get('/menu_proprietarios', function () {
    return view('menu_prop');
})->name('menu_prop');

Route::get('/02_dormitorios', function () {
    return view('02_dorm');
})->name('02_dorm');

Route::get('/03_dormitorios', function () {
    return view('03_dorm');
})->name('03_dorm');

Route::get('/04_dormitorios', function () {
    return view('04_dorm');
})->name('04_dorm');

Route::get('/comissao', function () {
    return view('comissao');
})->name('comissao');

Route::get('/indiviudal_por_apartamento', function () {
    return view('indv_apto');
})->name('indv_apto');

Route::get('/comissao_geral', function () {
    return view('com_geral');
})->name('com_geral');

Route::get('/valor_limpeza', function () {
    return view('limpeza');
})->name('limpeza');

Route::get('/clientes_cadastrados', function () {
    return view('clientes_cadastrados');
})->name('clientes_cadastrados');

Route::get('/valor_por_proprietario', function () {
    return view('propr_valores');
})->name('propr_valores');

Route::get('/inserir_cliente', 'ClienteController@store')->name('inserir_cliente');

Route::post('/cadastrar_reserva', function(Request $request){
    dd($request);
    $cliente = new Cliente;
        $cliente->nome        = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->endereco    = $request->endereco;
        $cliente->telefone       = $request->telefone;
        $cliente->email       = $request->email;
        $cliente->sexo       = $request->sexo;
        $cliente->save();

        $reserva->dormitorios = $request->dormitorios;
        $reserva->residencial = $request->residencial;
        $reserva->ap = $request->ap;
        $reserva->entrada = $request->entrada;
        $reserva->saida = $request->saida;
        $reserva->diarias = $request->diarias;
        $reserva->valor_diaria = $request->valor_diaria;
        $reserva->valor_limpeza = $request->valor_limpeza;
        $reserva->save();


        return redirect()->route('criar_reserva')->with('message', 'Reserva cadastrada com sucesso!');
})->name('cadastrar_reserva');

