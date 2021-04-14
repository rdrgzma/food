@extends('adminlte::page')

@section('title', 'Editar o <b>{{$plan->name}}</b>')

@section('content_header')
    <h1>Editar plano</h1>
    <p><b>{{$plan->name}}</b></p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
      </nav>
@stop 


@section('content')
   <div class="card blue-grey darken-1">
       <div class="card-header">
          
       </div>
       <div class="card-body">
            <form action="{{route('plans.update', $plan->url)}}" class="from" method="post">
                @csrf
                @method('PUT')
                @include('admin.pages.plans._partials.form')  
            </form>
       </div>
   </div>
@stop