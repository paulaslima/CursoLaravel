@extends('Layouts.LayoutFull')

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
@endpush

@section('conteudo')

@if($errors->any())
    <div class="alert alert-danger">        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>   
@endif             
<div class="container">
    <form method="POST" action="{{route('book.store')}}" 
            class="form-horizontal form-validate">
            {{csrf_field()}}
                            
        <div class="form-group">

            <label>
                Nome:
            </label></br>
            <input id="name" name="name" type="text" class='form-control' required value='{{old("name")}}'> <br>

            <label>
                Escritor:
            </label></br>
            <input id="writer" name="writer" class="form-control" type="text" required value='{{old("writer")}}'> </br>

            <label>
                Número de Páginas:
            </label></br>
            <input id="page_number" name="page_number" class="form-control" type="text"value='{{old("page_number")}}'> </br>

            
      <!--  <label>
                Endereço:
            </label></br>
            <input id="endereco" name="endereco"class="form-control" type="text"> </br> -->



            <input type="submit" class="btn btn-success btn" value="Enviar"> 

               
        </div>
    </form>
    </div>
    @endsection
    @push('scripts')
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

<script>
        $(".cpf-mask").mask('000.000.000-00');
</script>
@endpush
