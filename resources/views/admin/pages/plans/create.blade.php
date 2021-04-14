@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Cadastrar novo plano</h1>
   
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
        </ol>
      </nav>
@stop

@section('content')
   <div class="card blue-grey darken-1">
       <div class="card-header">
          
       </div>
       <div class="card-body">
            <form action="{{route('plans.store')}}" class="from" method="post">
                @csrf
                @include('admin.pages.plans._partials.form')    
            </form>
       </div>
   </div>
@stop