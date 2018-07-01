
@extends('layouts.lay')


@section('content')
@include('layouts.nav')


  <div class="container"> 

@if(Session::has('message'))
        <div class="alert alert-dismissible alert-success">
        {{Session::get('message')}}
          </div>
    @endif


@if(count($errors)>0)
<div class="alert alert-danger">
    <strong> Something is wrong</strong>
    <ul>
    @foreach($errors->all() as $error)  
<li>{{$error}}</li>
    @endforeach
    </ul>

</div>
@endif


@if(count($tasks)<5)

 <div class="row">
 <div class="col-md-2"></div>
 <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Написать админу</h2></div>

                    <div class="panel-body">
                        <form method="POST" action="/messages" enctype="multipart/form-data" >
                            {{ csrf_field() }}


 <div class="form-group">
                                <label for="title">Тема:</label>
                                <input type="text" class="form-control" id="title" name="name"
                                       value="{{ old('title') }}" required>
                            </div>



                            <div class="form-group">
                                <label for="body">Содержание:</label>
                                <textarea name="body" id="body" class="form-control"
                                          rows="8" required>{{ old('body') }}</textarea>
                            </div>

                            

 <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
  </div>  </div> 
  </div>
  @endif
@if(count($tasks)>4)
<h2>Слишком много  сообщений напишите пожалуйста познее</h2>
 @endif

  </div>  



  @endsection