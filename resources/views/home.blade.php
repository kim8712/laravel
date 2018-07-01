@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!



<!---<h1>You LOGIN THANKS  {{ Auth::user()->name }}</h1>-->

        <h3>  {{auth()->user()->verified()  ?'' :'Ваша почта не подтверждена кликните на ссылку в письме.'    }}</br></h3>
      

 @if (auth()->user()->verified()==false)  
<br>
<div class="alert alert-danger">
    <strong> Подтвердите ваш акаунт чтобы оставлять объявления.Если письмо не пришло значит ваш  адрес почты неверен ({{ Auth::user()->email }}) или письмо попал в спам</strong>
</div>

@endif

 @if (auth()->user()->verified()==true)  








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

@if(count($tasks)<3)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Подать объявление</div>

                    <div class="panel-body">
                        <form method="POST" action="/task" enctype="multipart/form-data" >
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

                             <div class="form-group" style="font-family: sans-serif;">
                                <label for="title">Телефон</label>
                                <input type="text" class="form-control" id="title" name="tel"
                                       value="{{ old('title') }}" required placeholder="номер   начинается восьмерки">
                            </div>

                            <div class="form-group">
 <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="select_file">
    <small id="fileHelp" class="form-text text-muted">Выберите фотографию для обьявления</small>
  </div>

                                <button type="submit" class="btn btn-primary">Опубликовать</button>
                            </div> </form>
  </div>  </div>  </div>

 <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Мои обьявления</div>

                    <div class="panel-body">
@endif


@if(count($tasks)>0)
<div class="card">
<div class="card-heading">
<h5> Квартиры в аренду</h5>
</div>  
<div class="card-body">
<table width="100%" class="table table-stripe task-table">  
<thead>
 <!-- <th>Фото</th> -->
              <th> Название</th>
             <!--  <th>Обьявление</th> -->
 <th>Правка</th>
</thead>
<tbody>
   
@foreach($tasks as $task)
<tr>
 <!-- <td class="table-text col-sm-2 col-xs-6">
<img src="images/{{$task->image}}" alt="{{$task->name}}" style="width: 100%; height: 50px;">
</td>-->
<td style="width: 80%;" class="table-text col-xs-3">
  <div><a href="tasks/{{$task->id}}">{{$task->name}}</a></div>
</td>
<!--<td class="table-text col-sm-6 col-xs-3">
  <div> {{$task->body}}</div>
</td>-->
<td class="table-text">
<form action="{{ url('task/'.$task->id)  }}" method="POST" >
{{csrf_field()}}
{{method_field( 'DELETE')}}



<button class="btn btn-primary">Delete</button>
</form>

<form action="{{ url('edit/'.$task->id)  }}">
{{csrf_field()}}




<button  class="btn btn-danger">Edit</button>
</form>
</td>
 





</tr>


@endforeach
@endif
    @endif 

                    </div>







 <!--

<form action="{{ url('task')  }}" method="POST" class="form-horizontal">
    {{csrf_field()}}

<div class="row">
    <div class="form-group">
    <label for="Task" class="col-sm-3">

    Task    </label>
<div class="row">
    
<div class="col-sm-6">
    <input type="text" name="name" id="task-name" class="form-control">
    </div>
    <div class="col-sm-6">
     <input type="text" name="body" id="task-name" class="form-control">
    <div class="col-sm-6">
        <button type="submit" class="btn btn-success">Add task</button>
    
</div>

</div>

    </div>


</div>


</form>

---->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
