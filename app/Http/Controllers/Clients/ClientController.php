<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientStoreRequest;

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
        return view ('Clients/create');

        //$clientModel = app(Client::class);
        //$client = $clientModel->create([
        //    'name'=>'name teste2',
        //   'cpf'=>12345678901,
        //    'email'=>'teste2@email.com',
        //   'active_flag'=>false,
        //]);
        
        dd($client);
    }

    public function store(ClientStoreRequest $request){
        $data = $request->all();
        $clientModel = app(Client::class);
        $client = $clientModel->create([
            'name'=>$data['name'],
            'cpf'=>preg_replace("/[^A-Az-z0-9]/", "",$data['cpf']),
            'email'=>$data['email'],
            'endereco'=>$data['endereco'] ?? null,
            'active_flag'=>isset($data['ativo']) ? true : false,
        ]);

        return redirect()->route('client.index');
        
    }
        
    

    
}
