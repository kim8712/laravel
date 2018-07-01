  
@extends('layouts.lay')


@section('content')

@include('layouts.nav')
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

  <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Создать новую Тему</div>

                    <div class="panel-body">
                        <form action="{{ url('edit/'.$task->id)  }}"method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}


 <div class="form-group">
                                <label for="title">Заголовок:</label>
                                <input type="text" class="form-control" id="title" name="name"
                                       value="{{ old('title') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="body">Описание:</label>
                                <textarea name="body" id="body" class="form-control"
                                          rows="8" required>{{ old('body') }}</textarea>
                            </div>

                             <div class="form-group">
                                <label for="title">Телефон</label>
                                <input type="text" class="form-control" id="title" name="tel"
                                       value="{{ old('title') }}" required placeholder="номер   начинается с восьмерки">
                            </div>

                            <div class="form-group">
 <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="select_file">
    <small id="fileHelp" class="form-text text-muted">*Выберите фотографию для обновления</small>
  </div>

                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
  </div>  </div>  </div>
@endsection