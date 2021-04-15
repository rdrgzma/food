@extends('adminlte::page')

@section('title', "Detalhes $plan->name")

@section('content_header')
    <h1>Detalhes de {{ $plan->name }} <a href="{{route('details.plan.create', $plan->url)}}" class="btn btn-dark"><i class="fas fa-plus"></i></a></h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
          <li class="breadcrumb-item" aria-current="page"><a href="{{ route('plans.index') }}">Planos</a></li>
          <li class="breadcrumb-item" aria-current="page"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('details.plan.index', $plan->url) }}" class= "active">Detalhes</a></li>
        </ol>
      </nav>
@stop

@section('content')
   <div class="card blue-grey darken-1">
       <div class="card-body">
        @include('admin.includes.alerts')
           <table class="table table-condensed">
                <thead>
                        <tr>
                            <th data-field="name">Nome</th>
                         
                            <th data-field="action">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>{{$detail->name}}</td>
                            <td>
                                <a href="{{route('details.plan.edit',[$plan->url, $detail->id])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                                <a href="{{route('details.plan.show',[$plan->url, $detail->id])}}" class="btn btn-warning"><i class="far fa-eye"></i></a>
                            </td>
                        </tr> 
                    @endforeach
                    </tbody>
           </table> 
       </div>
       <div class="card-footer">
            @if (isset($filters))
              {{$details->appends($filters)->links()}}
            @else
                {{$details->links()}}
            @endif 
       </div>
   </div>
@stop