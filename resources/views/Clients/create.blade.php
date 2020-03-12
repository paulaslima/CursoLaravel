@extends('Layouts.LayoutFull')

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
@endpush

@section('conteudo')
<div class="container">
    <form action='/action_page.php'>
        <div class="form-group">

            <label>
                CPF:
            </label></br>
            <input id="cpf" name="cpf" type="text" class='cpf-mask form-control'> <br>

            <label>
                Nome:
            </label></br>
            <input class="form-control" type="text"> </br>

            <label>
                E-mail:
            </label></br>
            <input class="form-control" type="text"> </br>

            <label>
                E-mail:
            </label></br>
            <input class="form-control" type="text"> </br>

            <button type="submit" class="btn btn-warning">Enviar</button>

               
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
