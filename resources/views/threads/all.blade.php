<!DOCTYPE html>
<!--
Template Name: Miresa
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="ru">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>{{$task->name}} Бенефит.ру</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
<link href="{{ asset('/css/layout.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style >
  .dropdown-menu{
    min-width: 3rem;
    background-color: transparent;
    font-size: 10px;
  }

</style>

</head>
<body>
@include('layouts.nav')
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<img src="/images/{{$task->image}}">
		
		</div>

<div class="col-md-2">
	</div>
<div class="col-md-7">

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">{{$task->name}}</h3>
	</div>
	<div class="panel-body">
	{{$task->body}}
	</div>
<div class="panel-heading">
		<h3 class="panel-title">Номер телефона:</h3>
	</div>
	<div class="panel-body">
	{{$task->tele}}
	</div>
</div>
	</div>



</div>


<form action="{{ url('show')  }}" " >


<button><h4>Назад</h4></button>

</form>

</div>
</body>
</html>