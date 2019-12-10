@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('categories.create') }}" class="btn btn-success mb-2">Crear categoría</a>
            <div class="card">
                 @if (Session::has('message'))
                   <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

                <div class="card-header">Lista de categorías</div>
                   <table class="table">
                     <thead>
                       <tr>
                         <th scope="col">id</th>
                         <th scope="col">Nombre</th>
                         <th scope="col">Acciones</th>
                         
                       </tr>
                     </thead>
                     <tbody>
                        @foreach ($categories as $category)
                         <tr>
                         <th scope="row">{{ $category->id }}</th>
                         <td>{{ $category->name }}</td>
                         <td></td>
                       
                       </tr>
                        @endforeach
                       
                     
                     </tbody>
                   </table> 
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
