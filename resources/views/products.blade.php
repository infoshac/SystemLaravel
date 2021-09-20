@extends('layouts.main')
@section('title','Even Produtos')
 @section('content')

    @if($id!='')
     <p>O numero do id se tiver é: {{$id}}</p>
    @else
        <p>Sem Id</p>    
    @endif
@endsection