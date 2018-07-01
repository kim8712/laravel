@if(count($tasks)>0)
<div class="card">
<div class="card-heading">
<h5> Квартиры в аренду</h5>
</div>  
<div class="card-body">
<table width="100%" class="table table-stripe task-table">  
<thead>
  <th>Фото</th>
              <th> Название</th>
              <th>Обьявление</th>

</thead>
<tbody>
   
@foreach($tasks as $task)
<tr>
<td class="table-text col-sm-2 col-xs-6">
<img src="images/{{$task->image}}" alt="{{$task->name}}" style="width: 100%; height: 100%">
</td>
<td class="table-text col-xs-3">
  <div><a href="tasks/{{$task->id}}">{{$task->name}}</a></div>
</td>
<td class="table-text col-sm-6 col-xs-3">
  <div> {{$task->body}}</div>
</td>

</tr>


@endforeach
@endif