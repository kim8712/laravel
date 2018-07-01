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
<title>  {{$post->name}} Бенефит.ру</title>
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
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="/">Home</a></li>

      <li><a href="/news/1">News</a></li>
      <li><a href="/news/{{$post->id}}">{{$post->name}}</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Новости сайта </h6>
      <nav class="sdb_holder">
        <ul>
         

@foreach($nav as $navs)
          <li><a href="/news/{{$navs->id}}">{{$navs->name}}</a></li>
          @endforeach
        </ul>
      </nav>
   <div class="sdb_holder">
        <article>
          <h6>Погода</h6>
          <a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.ru/pogoda/213" target="_blank"><img src="https://info.weather.yandex.net/213/1_white.ru.png?domain=ru" border="0" alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" border="0"/></a>
        </article>
      </div>
        <div class="sdb_holder">
        <article>
          <h6>Недвижимость Калуги</h6>
        <p> На сайте <a href="/"> www.kalugarent.ru</a> представлена информация о недвижимости в Калуге и Калужской области. Каждый день на  нашем сайте вы найдете актуальные объявления  о аренде жилой и коммерческой недвижимости Калуги. </p>Читайте самые интересные новости, обзоры рынка жилья, знакомьтесь с предложениями собственников недвижимости региона. 
        </article>
      </div>
      <div class="sdb_holder">
        <h6>Курс валют</h6>
        <address>
    <link rel="stylesheet" type="text/css" href="https://fortrader.org/informers/css?id=62420"><div class='FTinformersWrapper FTba4a6a19e71beb3ed24164f29dada7f2 FT662018404'><script>document.querySelector(".FTba4a6a19e71beb3ed24164f29dada7f2.FT662018404").style.opacity=0;</script><div class="informer_box informer_box_example clearfix alignCenter"><div class="inlineBlock"><table class="informer_table informer1"><thead><tr><th colspan="2"><a target="_blank" href="https://fortrader.org/currencyrates">Курсы валют ЦБ РФ</a></th></tr></thead><tbody><tr class="col1"><th class="bd_l">Валюта</th><th class="bd_r">RUB</th></tr><tr class="col2 trClass " data-symbol="Доллар США" data-id="2"><td class="icon_amount arrow"><a target="_blank" class="symbolContainer symbolContainerba4a6a19e71beb3ed24164f29dada7f2" title="Доллар США" href="https://fortrader.org/currencyrates/usd">USD</a></td><td class="changeVal" data-column="todayCourse"></td></tr><tr class="col3 trClass " data-symbol="Евро" data-id="21"><td class="icon_amount arrow"><a target="_blank" class="symbolContainer symbolContainerba4a6a19e71beb3ed24164f29dada7f2" title="Евро" href="https://fortrader.org/currencyrates/eur">EUR</a></td><td class="changeVal" data-column="todayCourse"></td></tr></tbody></table></div></div></div><script async src="https://fortrader.org/informers/js?id=62420&m=662018404" type="text/javascript"></script>
        </address>
      </div>
      
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1 style="text-align: center;">  {{$post->name}}</h1>
          <img class="imgr borderedbox inspace-5" src="/images/news/{{$post->image}}" style="width: 240px;height: 240px;">
      <p>  {!!$post->body!!}</p> 
      
      </div>

@include('layouts.footer')


</body>
</html>