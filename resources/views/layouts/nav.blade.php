
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('{{ asset('/thumb_1300x500_55ce5e82e79636bab1f0e7eae241a8dd.jpg')}}');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
     <ul class="nospace">
        @auth<li><a href="{{ url('/home')  }}"><i class="fa fa-lg fa-home"></i></a></li>@endauth
        <li><a href="{{ url('/contact')  }}" title="Call Us"><i class="fa fa-phone"></i></a></li>
        <li><a href="{{ url('/message')  }}" title="Send a Mail"><i class="fa fa-envelope-o"></i></a></li>
       
                     
 @guest

        <li><a href="{{ route('login') }}" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
        <li><a href="{{ route('register') }}" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a></li>
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
        <h1><a href="/">Бенефит</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="{{ url('/')  }}">Home</a></li>
          <li class="active"><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="{{ url('news/1')  }}">News</a></li>
              <li ><a href="{{ url('/show')  }}">Rent</a></li>
              <li><a href="{{ url('/home')  }}">Write ad</a></li>
              <li><a href="{{ url('/vakancy')  }}">Vakancy</a></li>
              <li><a href="{{ url('/article')  }}">Article</a></li>
            </ul>
          </li>
         
          <li><a href="{{ url('/about')  }}">About us</a></li>
          <li><a href="{{ url('/contact')  }}">Contact</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ########################################################################################
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>