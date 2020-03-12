<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index() {
        $clientModel = app(Client::class);

        $clients = $clientModel->all(); //traz todos os resultados *
        //$clients = $clientModel->find(1); //traz pelo id
        //$clients = $clientModel->where('cpf',12345678900)->get(); //traz resultado com condição


        //dd($clients);
        return view ('Clients/index',compact('clients'));
  
      }

    public function create(){
        $clientModel = app(Client::class);
        $client = $clientModel->create([
            'name'=>'name teste2',
            'cpf'=>12345678901,
            'email'=>'teste2@email.com',
            'active_flag'=>false,
        ]);
        
        dd($client);
    }
}
