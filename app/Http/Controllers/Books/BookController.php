<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    


    public function create(){
      return view ('Books/create');
    }

    public function index() {
      $bookModel = app(Book::class);
      $books = $bookModel->all(); //traz todos os resultados *
      //$clients = $clientModel->find(1); //traz pelo id
      //$clients = $clientModel->where('cpf',12345678900)->get(); //traz resultado com condição


      //dd($clients);
      return view ('Books/index',compact('books'));

    }


    public function store(Request $request){
      $data = $request->all();
      $bookModel = app(Book::class);
      $book = $bookModel->create([
          'name'=>$data['name'],
          'writer'=>$data['writer'],
          'page_number'=>$data['page_number'],
      ]);

      return redirect()->route('book.create');
    }

}
