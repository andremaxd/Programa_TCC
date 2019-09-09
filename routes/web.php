<?php
use Illuminate\Http\Request;
use App\Cliente;
use App\Reserva;
use App\Proprietarios;
use App\Apartamento;


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
    $apartamento = Apartamento::all();
    return view('criar_reserva', compact('apartamento'));   //testa ---ok
})->name('criar_reserva');

Route::get('/menu_valores', function () {
    return view('menu_valores');
})->name('menu_valores');

Route::get('/menu_proprietarios', function () {
    return view('menu_prop');
})->name('menu_prop');

Route::get('/cadastrar_proprietario', function () {
    return view('cadastrar_prop');
})->name('cadastrar_prop');

Route::get('/cadastrar_apartamento', function () {
    $proprietarios = Proprietarios::all();
    return view('cadastrar_ap', compact('proprietarios'));
})->name('cadastrar_ap');

Route::get('/dados_pessoais', function () {
    return view('dados_pessoais');
})->name('dados_pessoais');

Route::get('/cadastrar_cliente', function () {
    return view('cadastrar_cliente');
})->name('cadastrar_cliente');

Route::get('/cadastrar_reserva', function () {
    $apartamento = Apartamento::all();
    $cliente = Cliente::all();
    return view('cadastrar_reserva', compact('apartamento', 'cliente'));
})->name('cadastrar_reserva');

Route::get('/02_dormitorios', function () {
    $reservas = Reserva::all();
    return view('02_dorm', compact('reservas'));
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

Route::post('/cadastrar_cliente', function(Request $request){
    $cliente = new Cliente;
    $cliente->nome        = $request->nome;
    $cliente->cpf = $request->cpf;
    $cliente->endereco    = $request->endereco;
    $cliente->telefone       = $request->telefone;
    $cliente->email       = $request->email;
    $cliente->sexo       = $request->sexo;
    $cliente->save();

    return redirect()->route('criar_reserva')->with('message', 'cleinte cadastrado com sucesso!');
})->name('cadastrar_cliente');

Route::post('/cadastrar_reserva', function(Request $request){
    $apto = explode("-", $request->residencial);
     $reserva = new Reserva;
     $reserva->cliente_id = $request->cliente_id;
     $reserva->dormitorios = $request->dormitorios;
     $reserva->residencial = $apto[0];
     $reserva->ap = $apto[1];
     $reserva->entrada = $request->entrada;
     $reserva->saida = $request->saida;
     $reserva->diarias = $request->diarias;
     $reserva->valor_diaria = $request->valor_diaria;
     $reserva->valor_limpeza = $request->valor_limpeza;
     $reserva->save();

    return redirect()->route('criar_reserva')->with('message', 'Reserva cadastrada com sucesso!');
})->name('cadastrar_reserva');


Route::post('/cadastrar_prop', function(Request $request){
    $proprietario = new Proprietarios;
    $proprietario->nome       = $request->nome;
    $proprietario->cpf        = $request->cpf;
    $proprietario->endereco   = $request->endereco;
    $proprietario->telefone   = $request->telefone;
    $proprietario->email      = $request->email;
    $proprietario->sexo       = $request->sexo;
    $proprietario->banco      = $request->banco;
    $proprietario->agencia    = $request->agencia;
    $proprietario->conta      = $request->conta;
    $proprietario->tipo_conta = $request->tipo_conta;
    $proprietario->save();

    return redirect()->route('cadastrar_prop')->with('message', 'Reserva cadastrada com sucesso!');
})->name('cadastrar_prop_ap');

Route::post('/cadastrar_apto', function(Request $request){
    $apartamento= new Apartamento;
    $apartamento->id_proprietario = $request->id_proprietario;
    $apartamento->dormitorios = $request->dormitorios;
    $apartamento->residencial = $request->residencial;
    $apartamento->ap = $request->ap;
    $apartamento->save();

    return redirect()->route('cadastrar_ap')->with('message', 'Reserva cadastrada com sucesso!');
})->name('cadastrar_apto');
