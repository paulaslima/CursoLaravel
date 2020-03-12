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
@section('conteudo')

<a href="" class="btn btn-secondary">Adicionar</a> <br><br>

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
    <td><a href="" class="btn btn-success btn-sm">Adicionar</a> 
        <a href="" class="btn btn-danger btn-sm">Excluir</a> 
  </tr>
  @endforeach




 <!-- <tr>
    <td>12345678903</td>
    <td>Francisco Chang</td>
    <td>franciscochang@email.com</td>
    <td><a href="" class="btn btn-secondary btn-sm">Adicionar</a> 
        <a href="" class="btn btn-secondary btn-sm">Excluir</a></td>
  </tr>
  <tr>
    <td>12345678904</td>
    <td>Roland Mendel</td>
    <td>rolandmandel@email.com</td>
    <td><a href="" class="btn btn-secondary btn-sm">Adicionar</a> 
        <a href="" class="btn btn-secondary btn-sm">Excluir</a></td>
  </tr>
  <tr>
    <td>12345678904</td>
    <td>Roland Mendel</td>
    <td>rolandmandel@email.com</td>
    <td><a href="" class="btn btn-secondary btn-sm">Adicionar</a> 
        <a href="" class="btn btn-secondary btn-sm">Excluir</a></td>
  </tr> -->
 

</table>
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
