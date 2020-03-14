<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;


class BookController extends Controller
{
    


    public function create(){
      return view ('Books/create');
    }


    public function store(Request $request){
      $data = $request->all();
      $clientModel = app(Client::class);
      $client = $clientModel->create([
          'name'=>$data['name'],
          'writer'=>$data['writer'],
          'page_number'=>$data['page_number'],
      ]);

      return redirect()->route('client.create');
    }

}
