@extends('Layouts.LayoutFull')

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
@endpush
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

@if(Session::has('success'))
    toastr["success"]("<b>SUCESSO: </b> </br>
    {{Session::get('success') }} ");
@endif    

@section('conteudo')
<a href="{{route('client.create')}}" class="btn btn-secondary">Adicionar</a> <br><br>

<table>
  <tr>
    <th>ID</th>
    <th>CPF</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>
  </tr>
    @foreach($clients as $client)
  <tr>
    <td>{{$client->id}}</td>
    <td>{{$client->cpf}}</td>
    <td>{{$client->name}}</td>
    <td>{{$client->email}}</td>
    <td>
        <a href="{{ route('client.edit',[$client->id]) }}" 
          class="btn btn-primary btn-sm">Editar</a> 


        <span data-url="{{ route('client.destroy',[$client->id]) }}" 
              data-idClient='{{$client->id}}' 
              class="btn btn-danger btn-sm text-white deleteButton">
              <span class='d-none d-md-inline'>Deletar</span>
        </span> 
  </tr>
  @endforeach

</table>
    @endsection
    @push('scripts')
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
  <script>
  $('.deleteButton').on('click', function (e) {
        var url = $(this).data('url');
        var idClient = $(this).data('idClient');
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            method: 'DELETE',
            url: url
        });
        $.ajax({
            data: {
                'idClient': idClient,
            },
            success: function (data) {
                console.log(data);
                if (data['status'] ?? '' == 'success') {
                    if (data['reload'] ?? '') {
                        location.reload();
                    }
                } else {
                   console.log('error');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
      });  
  </script>
  <script>
        $(".cpf-mask").mask('000.000.000-00');
  </script>
@endpush
