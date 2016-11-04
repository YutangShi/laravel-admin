<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="" />
<meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/base.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/tablet.css"/>
    <link rel="stylesheet" type="text/css" href="css/mobile.css"/>
    
    <title>漢你中文-Han You Chinese Language Institute in Delhi</title>
    <link rel="shortcut icon" href="images/favicon.png">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=908066355897581";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</head>
<body>
    <header>
      @yield('menu')
    </header> 
    
    <section class="section2">
      @yield('content')
    </section>
    <section class="footer_menu section5">
        <div class="container">
          @yield('footer_menu')
        </div>
        <div class="container">
<div class="fb-comments" data-href="http://www.hanyouchinese.com/" data-width="100%" data-numposts="100"></div>
        </div>
    </section>

    <footer>
        @yield('footer')
  </footer>

  </body>
</html>