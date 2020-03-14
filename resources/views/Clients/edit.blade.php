@extends('Layouts.LayoutFull')

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
@endpush

@section('conteudo')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>   
@endif             
<div class="container">
    <form method="POST" action="{{route('client.update',[$client->id])}}" 
            class="form-horizontal form-validate">
            {{csrf_field()}}
             @method('PUT')               
        <div class="form-group">

            <label>
                CPF:
            </label></br>
            <input id="cpf" name="cpf" type="text" class='cpf-mask form-control' required value='{{old("cpf",$client->cpf)}}'> <br>

            <label>
                Nome:
            </label></br>
            <input id="name" name="name" class="form-control" type="text" required value='{{old("name",$client->name)}}'> </br>

            <label>
                E-mail:
            </label></br>
            <input id="email" name="email" class="form-control" type="text"value='{{old("email",$client->email)}}'> </br>
            <label>
                Endereço:
            </label></br>
            <input id="endereco" name="endereco" class="form-control" type="text"value='{{old("endereco",$client->endereco)}}'> </br>

      <!--  <label>
                Endereço:
            </label></br>
            <input id="endereco" name="endereco"class="form-control" type="text"> </br> -->

            <label>
                Ativo?
            </label>
            <input id="ativo" name="ativo" type='checkbox' @if($client->active_flag) checked='checked' @endif>
            <br> <br>

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
