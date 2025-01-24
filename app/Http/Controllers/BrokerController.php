<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use Illuminate\Http\Request;

class BrokerController extends Controller
{

    protected $model;

    public function __construct()
    {
        $this->model = new Broker();
    }

    public function index()
    {
        $brokers = $this->model::all();

        $title = 'Cadastro de Corretores';
        return view('brokers.index', compact('brokers', 'title'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'cpf' => 'required|cpf|digits:11|unique:brokers',
            'creci' => 'required|min:2|max:10|unique:brokers',
            'name' => 'required|max:255|min:2',
        ]);

        $this->model::create($request->all());

        return redirect()->route('brokers.index')->with('success', 'Cadastrado com sucesso!');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'cpf' => 'required|cpf|digits:11|unique:brokers,cpf,'.$id,
            'creci' => 'required|max:10|min:2|unique:brokers,creci,'.$id,
            'name' => 'required|max:255|min:2',
        ]);

        $broker = $this->model::find($id);

        $broker->update($request->all());
        // dd($broker);

        return redirect()->route('brokers.index')->with('success', 'Atualizado com sucesso!');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $broker = $this->model::findOrFail($id);

        $title = 'Edicao de Cadastro';
        return view('brokers.edit', compact('broker', 'title'));

    }

    public function destroy($id)
    {
        $broker = $this->model::find($id);

        if(!$this->model::find($id)) {
            return response()->json([
                "status" => false,
                "message" => "Corretor nao encontrado"
            ]);
        }

        $this->model::find($id)->delete();

        return redirect()->route('brokers.index')->with('success', 'Corretor excluido com sucesso!');
    }
}
