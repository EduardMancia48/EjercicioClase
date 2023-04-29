@extends('layout.template')
@section('title', 'Lista de editoriales')
@section('content')
    <h3>Detalle del editorial con {{$id}}</h3>
    
  
    @if($id>0)
    <h5>El id es mayor que cero</h5>
    @else
    <h5>El id NO mayor que cero</h5>
    @endif
 
    <h3>Detalle del editorial con {{$id}}</h3>
    @endsection
