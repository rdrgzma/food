@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
   <div class="card blue-grey darken-1">
       <div class="card-header">
           #filtros
       </div>
       <div class="card-body">
           <table class="table table-condensed">
                <thead>
                        <tr>
                            <th data-field="name">Nome</th>
                            <th data-field="price">Preço</th>
                            <th data-field="action">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($plans as $plan)
                           <tr>
                            <td>{{$plan->name}}</td>
                            <td>{{$plan->price}}</td>
                            <td>
                                <a href="#" class="btn btn-warning">acao</a>
                            </td>
                        </tr> 
                    @endforeach
                    </tbody>
           </table> 
       </div>
   </div>
@stop