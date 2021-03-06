<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
          <a class="navbar-brand" href="/"><img src="/img/logo.png" height=20></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            @if (!Auth::check())
              <li>
                <a href='/login'><span class="fa fa-user"></span>Đăng nhập</a>
              </li>
            @else
              <li>
                <a href='/account'>Account</a>
              </li>
              <li>
                <a href='/logout'>Logout</a>
              </li>
            @endif
            <li id="add-listing-btn">
              <button class="btn btn-info navbar-btn">
                <span class="fa fa-plus"></span>ĐĂNG TIN
              </button>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div>
    @if (@$noContainerClass !== true)
      <div class="container">
        @yield('content')
      </div>
    @else
      @yield('content')
    @endif
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function () {
      $('#add-listing-btn').click(function (e) {
        location.href = '/bat-dong-san/dang-tin';
        e.preventDefault();
      });
    });
    </script>
  </body>
</html>