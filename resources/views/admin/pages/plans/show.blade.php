@extends('adminlte::page')

@section('title', "Detalhes do plano <b>{{$plan->name}}")

@section('content_header')
<p>Detalhes <b>{{$plan->name}}</b></p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalhar</li>
        </ol>
      </nav>
@stop    

@section('content')
   <div class="card blue-grey darken-1">
       <div class="card-header">
        <p><b>{{$plan->name}}</b></p>
       </div>
       <div class="card-body">
          <ul>
            <li>
                <strong>Nome: </strong>{{$plan->name}}
            </li>
            <li>
                <strong>Preço: </strong>R$ {{number_format($plan->price, 2, ',', '.')}}
            </li>
            <li>
                <strong>Descrição: </strong>{{$plan->description}}
            </li>
         </ul>
         <form action="{{route('plans.destroy',$plan->url )}}" method="post">
         @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Apagar {{$plan->name}}</button>
         </form>
       </div>
   </div>
@stop