@section('menu')
     <div class="container">
    	<nav class="navbar navbar-default">
          	<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="/"><h1>漢你中文</h1></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse mainmenu" id="bs-example-navbar-collapse-1">
              <!--
Han You Chinese Language Institute in Delhi
-->
              <ul class="nav navbar-nav navbar-right menu_bar">
                <!--
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">關於我們 <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><small>關於我們</small></a></li>
                    <li><a href="#"><small>我們的服務</small></a></li>
                    <li><a href="#"><small>我們的服務</small></a></li>
                    <li><a href="#"><small>商業諮詢</small></a></li>
                    <li><a href="#"><small>我們的據點</small></a></li>
                  </ul>
                </li>
                -->
                 <li><a href="/aboutus">About Us</a></li>
                 <li><a href="/staff">The Team</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/courses"><small>Courses</small></a></li>
                    <li><a href="/Testimonial">Testimonial</a></li>
                  </ul>
                </li>
                 <li><a href="/services">Services</a></li>
                 <li><a href="/studyabroad">Study Abroad</a></li>
                 <li><a href="/faq">FAQ</a></li>
                 <!---<li><a href="#">Subscribe訂閱</a></li>-->
              </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
      </div><!-- /.container-fluid -->
@stop