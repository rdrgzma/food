@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{route('plans.create')}}" class="btn btn-dark"><i class="fas fa-plus"></i></a></h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Planos</li>
        </ol>
      </nav>
@stop

@section('content')
   <div class="card blue-grey darken-1">
       <div class="card-header">
           <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
               @csrf
               <input type="text" name="filter" id="filter" class="form-control" value="{{ $filters['filter'] ?? '' }}">
               <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i> Pesquisar</button>     
           </form>
       </div>
       <div class="card-body">
           <table class="table table-condensed">
                <thead>
                        <tr>
                            <th data-field="name">Nome</th>
                            <th data-field="price">Preço</th>
                             <th data-field="price">Descrição</th>
                            <th data-field="action">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{$plan->name}}</td>
                            <td>R$ {{number_format($plan->price, 2, ',', '.')}}</td>
                            <td>{{$plan->description}}</td>
                            <td>
                                <a href="{{route('plans.edit',$plan->url)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                                <a href="{{route('plans.show',$plan->url)}}" class="btn btn-warning"><i class="far fa-eye"></i></a>
                            </td>
                        </tr> 
                    @endforeach
                    </tbody>
           </table> 
       </div>
       <div class="card-footer">
            @if (isset($filters))
              {{$plans->appends($filters)->links()}}
            @else
                {{$plans->links()}}
            @endif 
       </div>
   </div>
@stop