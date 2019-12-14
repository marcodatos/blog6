@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar publicación</div>
                  
                   @if (Session::has('message'))
                    
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                           {{ Session::get('message') }}
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                      
                       @endif

                  
                  <div class="col-xl-8 order-xl-2 mb-5 mb-xl-0">
                     <div class="card-body m-4">
                       <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label class="form-control-label" for="title">Categoría </label>

                              <select class="form-control" name="category_id">
                                  <option value="{{ $post->category_id }}" selected="selected">{{ $post->category->name }}</option>
                                  @foreach ($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                  

                               <div class="form-group">
                                 <label class="form-control-label" for="title">Título </label>
                                 <input type="text" id="title" class="form-control form-control-alternative" placeholder="" value="{{$post->title }}" name="title">
                                  @if ($errors->has('title'))
                                    <strong class="text-danger" >{{ $errors->first('title') }}</strong>
                                  @endif
                               </div>

                                 <div class="form-group">
                               
                            <div class="form-group">
                                <label class="form-control-label" for="competencias">Contenido</label>
                                     <textarea class="form-control" id="mymce" rows="3" name="body">{{ $post->body }}</textarea>
                                      @if ($errors->has('body'))
                                    <strong class="text-danger" >{{ $errors->first('body') }}</strong>
                                  @endif
                            </div>

                             <img src="{{$post->image}}" class="img-fluid" width="200" alt="">

                            <div class="form-group">
                               
                                <label class="form-control-label" for="competencias">Imagen</label>
                                   <input type="file"  class="form-control form-control-alternative" placeholder="" value="{{ $post->image }}" name="image">
                                   @if ($errors->has('image'))
                                     <strong class="text-danger" >{{ $errors->first('image') }}</strong>
                                   @endif
                            </div>

                 
                              

                             <button type="submit" class="btn btn-primary my-4">Actualizar</button>
                         
                           
                       
                       </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection