<?php
namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VeiculoController extends Controller
{
   
    public function MostrarHome() {
        return view('homeadm');
    }

 
    public function MostrarVeiculo() {
        return view('cadastra-veiculo');
    }

  
    public function CadastrarVeiculo(Request $request) {
        $registros = $request->validate([
            'nomeveiculo' => 'string|required',
            'corVeiculo' => 'string|required',
            'fabricacao' => 'date|required',
            'montadora' => 'string|required',
        ]);

        Veiculo::create($registros);

        return redirect()->route('lista-veiculos'); 
    }

    // listar veículos
    public function ListaVeiculo() {
        $veiculos = Veiculo::all(); 
        return view('listaveiculos', compact('veiculos')); 
    }
}
