
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('the-city-3371626_1920.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        @auth<li><a href="home"><i class="fa fa-lg fa-home"></i></a></li>@endauth
        <!---<li><a href="#" title="Call Us"><i class="fa fa-phone"></i></a></li>--->
        <li><a href="message" title="Написать админу"><i class="fa fa-envelope-o"></i></a></li>
       
                     
 @guest

        <li><a href="{{ route('login') }}" title="Войти"><i class="fa fa-lg fa-sign-in"></i></a></li>
        <li><a href="{{ route('register') }}" title="Зарегестрироватся"><i class="fa fa-lg fa-edit"></i></a></li>
        @else
                            


                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul style='min-width: none' class="dropdown-menu ">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="/"> Калуга   Аренда недвижимости</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="{{Request::is('/')? 'active':null}}"><a href="/">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="news/1">News</a></li>
              <li><a href="show">Rent</a></li>
              <li><a href="home">Write ad</a></li>
              <li class="{{Request::is('vakancy')? 'active':null}}" ><a href="{{route('vakancy')}}">Vakancy</a></li>
              <li class="{{Request::is('article')? 'active':null}}"><a href="{{route('article')}}">Article</a></li>
            </ul>
          </li>
         
          <li class="{{Request::is('about')? 'active':null}}"><a href="{{route('about')}}">About us</a></li>
          <li class="{{Request::is('contact')? 'active':null}}"><a href="{{route('contact')}}">Contact</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Агенство Недвижмости</p>
      <h3 class="heading">Бенефит</h3>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="show">Аренда недвижимости</a></li>
          <li><a class="btn inverse" href="home">Оставить обьявление</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>