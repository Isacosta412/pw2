<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $dados = Aluno::all();
        //dd($dados);

        return view("aluno.list", ["dados"=>$dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("aluno.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller
        Aluno::create(
            [
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'cpf' => $request->cpf,
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Aluno:: findOrFail($id);
        //findorfail: busque mesmo se der erro
        $dado->delete();
        return redirect('aluno');
    }
    public function search()
    {
        if(!empty($request->nome)){
        $dados = Aluno::where(
            "nome",
            "like",
            "%". $request->nome . "%"
        )->get();
        } else {
            $dados = Aluno::all();
        }

        return view("aluno.list", ["dados"=>$dados]);
    }
}
