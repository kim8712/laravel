@extends('layouts.lay')


@section('content')
@include('layouts.nav')

<!---------USERS----------->

<div class="container">

<div class="card">
<div class="card-heading">
	Пользователи
</div>	
<div class="card-body">
<table width="100%" class="table table-stripe task-table">	
<thead>
	<th>Имя пользователя </th>
		<th>почта</th>
<th>кнопка</th>
</thead>
<tbody>
   
@foreach($user as $users)
<tr>
<td class="table-text">
	<div>{{$users->name}}<br>{{$users->token}}</div>
</td>
<td class="table-text col-sm-6 ">
	<div> 

{{$users->email}}



	  </div>
</td>
<td>
	<form  action="/user/{{ $users->id }}"             method="POST" >
{{csrf_field()}}
{{method_field(	'DELETE')}}
<button class="btn btn-danger">Delete</button>


</form>
</td>
</tr>
@endforeach
</table> 
</div>
</div>








<!---------THERDS
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
	---------->


@if(count($tasks)>0)
<div class="card">
<div class="card-heading">
	Обьявления 
</div>	
<div class="card-body">
<table width="100%" class="table table-stripe task-table">	
<thead>
	<th>task</th>
		<th>&nbsp;</th>

</thead>
<tbody>
   
@foreach($tasks as $task)
<tr>
<td class="table-text">
	<div>Автор  {{$task->user_id}} </div>
		<div>Время {{$task->created_at}} </div>
	<div><a href="tasks/{{$task->id}}">{{$task->name}}</a></div>
</td>
<td class="table-text col-sm-6 ">
	<div> 
<?php

$body=$task->body;

$body= iconv('UTF-8','windows-1251',$body );
  $body=substr("$body", 0, 150);
$body= iconv('windows-1251','UTF-8',$body );
    echo $body;

?>
...





	  </div>
</td>
<td>
	<form action="{{ url('task/'.$task->id)  }}" method="POST" >
{{csrf_field()}}
{{method_field(	'DELETE')}}
<button class="btn btn-danger">Delete</button>


</form>
</td>
</tr>
@endforeach
</table> 
</div>
</div>
<?php echo $tasks->render(); ?>

@endif





<!-------NEWS--------->
</br></br>
</br>
</br>


    <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Создать новую Тему</h2></div>

                    <div class="panel-body">
                        <form method="POST" action="/news" enctype="multipart/form-data" >
                            {{ csrf_field() }}


 <div class="form-group">
                                <label for="title">Заголовок:</label>
                                <input type="text" class="form-control" id="title" name="name"
                                       value="{{ old('title') }}" required>
                            </div>
 <div class="form-group">
                                <label for="title">Автор</label>
                                <input type="text" class="form-control" id="title" name="avtor"
                                       value="{{ old('title') }}" required placeholder="автор">
                            </div>


                            <div class="form-group">
                                <label for="body">Новость:</label>
                                <textarea name="body" id="body" class="form-control"
                                          rows="8" required>{{ old('body') }}</textarea>
                            </div>

                           <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="select_file">
    <small id="fileHelp" class="form-text text-muted">Выберите фотографию для новости</small>
  </div>  

 <button type="submit" class="btn btn-primary">Опубликовать</button>
                            </div>
  </div>  </div>  




</br></br>
</br>
</br>














<!--------MESEDGE---------->

@foreach($messages as $message)
<tr>
<td class="table-text">
  <div>Автор  {{$message->user_id}} </div>
    <div>Время {{$message->created_at}} </div>
  <div>{{$message->name}}</div>
</td>
<td class="table-text col-sm-6 ">
  <div> 


{{$message->body}}







    </div>
</td>
<td>
  <form action="/message/{{ $message->id }} " method="POST" >
{{csrf_field()}}
{{method_field( 'DELETE')}}
<button class="btn btn-danger">Delete</button>


</form>
</td>
</tr>
</br>

@endforeach
</div></div></div>



@endsection