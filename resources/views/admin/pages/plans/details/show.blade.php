@extends('adminlte::page')

@section('title', 'Editar detalhe')

@section('content_header')
    <h1>Detalhe do {{ $plan->name }}:{{$detail->name}} </h1>
   
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('details.plan.index', $plan->url) }}" class= "active">Detalhes</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('details.plan.show', [$plan->url, $detail->id]) }}" class= "active">{{$detail->name}} do {{ $plan->name }}</a></li>
      </ol>
    </nav>
@stop

@section('content')
   <div class="card blue-grey darken-1">
       <div class="card-header">
          
       </div>
       <div class="card-body">
          <ul>
            <li>
                <strong>Nome: </strong>{{$detail->name}}
            </li>
          </ul>
       </div>
       <div class="card-footer">
        <form action="{{route('details.plan.destroy',[$plan->url, $detail->id])}}" method="post">
          @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Apagar {{$detail->name}} do {{ $plan->name }}</button>
          </form>
       </div>
   </div>
@stop