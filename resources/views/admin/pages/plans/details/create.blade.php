@extends('adminlte::page')

@section('title', 'Adicionar novo detalhe')

@section('content_header')
    <h1>Adicionar novo detalhe ao {{ $plan->name }}</h1>
   
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('details.plan.index', $plan->url) }}" class= "active">Detalhes</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('details.plan.create', $plan->url) }}" class= "active">Novo</a></li>
      </ol>
    </nav>
@stop

@section('content')
   <div class="card blue-grey darken-1">
       <div class="card-header">
          
       </div>
       <div class="card-body">
            <form action="{{route('details.plan.store', $plan->url)}}" class="from" method="post">
                @csrf
              @include('admin.pages.plans.details._partials.form')
            </form>
       </div>
   </div>
@stop