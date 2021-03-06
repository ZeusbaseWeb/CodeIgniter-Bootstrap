
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <title>Boske - Bootstrap 3 Skin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Boske Bootstrap 3 skin">
  <meta name="keywords" content="bootstrap 3, skin">
  <meta name="author" content="@geedmo">

  <!-- Font -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
  
  <!-- Bootstrap Styles -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <!-- Docs Custom styles -->
  <style>
    .row {
      margin-top: 30px;
      margin-bottom: 30px;
    }
    .btn-group, .input-group {
      margin-bottom: 15px;
    }
    
    .bs-header { 
      position: relative;
      margin-bottom: 60px;
      padding: 200px 0;
      color: #fff;
      background-color: #f0eeeb ;
      background-image: url('assets/img/main-bg.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center bottom;
      background-size: cover;
    }
    .bs-header > h1, .bs-header > h2 { color: #fff;}
    .bs-header > h1 { font-size: 6em; font-weight: 700; margin-top: 0;}
    .bs-header > h2 { margin-bottom: 0;}

    .logo-top {
      display: inline-block;
      font-size: 60px;
      width: 2.1em;
      height: 2.1em;
      line-height: 2em;
      border-radius: 50%;
      border: .1em solid #fff;
      color: #fff;
    }
  </style>
  


</head>

<body>


  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><em class="fa fa-fw fa-leaf"></em></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-main">
        <ul class="nav navbar-nav navbar-left">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              Examples <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="examples/blog/index.html">blog</a></li>
              <li><a href="examples/carousel/index.html">carousel</a></li>
              <li><a href="examples/cover/index.html">cover</a></li>
              <li><a href="examples/dashboard/index.html">dashboard</a></li>
              <li><a href="examples/grid/index.html">grid</a></li>
              <li><a href="examples/jumbotron/index.html">jumbotron</a></li>
              <li><a href="examples/jumbotron-narrow/index.html">jumbotron-narrow</a></li>
              <li><a href="examples/justified-nav/index.html">justified-nav</a></li>
              <li><a href="examples/navbar/index.html">navbar</a></li>
              <li><a href="examples/navbar-fixed-top/index.html">navbar-fixed</a></li>
              <li><a href="examples/navbar-static-top/index.html">navbar-static</a></li>
              <li><a href="examples/non-responsive/index.html">non-responsive</a></li>
              <li><a href="examples/offcanvas/index.html">offcanvas</a></li>
              <li><a href="examples/signin/index.html">signin</a></li>
              <li><a href="examples/starter-template/index.html">starter-template</a></li>
              <li><a href="examples/sticky-footer/index.html">sticky-footer</a></li>
              <li><a href="examples/sticky-footer-navbar/index.html">sticky-footer</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="http://codecanyon.net/item/boske-skin-for-bootstrap-3/6125958?ref=geedmo" style="padding: 6px 10px">
              <span class="btn btn-primary btn-bold">
                Get this skin <em class="fa fa-fw fa-download"></em>
              </span>
            </a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

  <div class="bs-header text-center">
      <div class="logo-top"><em class="fa fa-fw fa-leaf"></em></div>
      <h1>Boske</h1>
      <h2>Skin for Bootstrap 3 Components</h2>
  </div>

  <div class="container">

    <!-- Navbar =========================================================== -->
    <div class="row">
      <div class="col-sm-12 col-lg-12 navbar-demo ">
        <h2 class="page-header">Navbar</h2>

        <div class="row">
          <div class="col-sm-12 col-lg-12">

              <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse1">
                  <ul class="nav navbar-nav ">
                    <li class="active"><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                  </form>
                  <ul class="nav navbar-nav  navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-lg-12">

              <nav class="navbar navbar-inverse" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse2">
                  <ul class="nav navbar-nav ">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                  </form>
                </div><!-- /.navbar-collapse -->
              </nav>
          </div>
        </div>

      </div>
    </div>
    <!-- Buttons =========================================================== -->
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        
        <h2 class="page-header">Buttons</h2>
          <table class="table table-bordered table-striped buttons-table">
              <thead>
                <tr>
                  <th>Button</th>
                  <th class="hidden-xs">Large Button</th>
                  <th>Small Button</th>
                  <th class="hidden-xs">Disabled Button</th>
                  <th class="hidden-xs">Button with Icon</th>
                  <th>Block Button</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a class="btn btn-default" href="#">Default</a></td>
                  <td class="hidden-xs"><a class="btn btn-lg btn-default" href="#">Default</a></td>
                  <td><a class="btn btn-sm btn-default" href="#">Default</a></td>
                  <td class="hidden-xs"><a class="btn disabled btn-default" href="#">Default</a></td>
                  <td class="hidden-xs"><a class="btn btn-default" href="#"><i class="fa fa-cog"></i> Default</a></td>
                  <td><a class="btn btn-block btn-default" href="#">Default</a></td>
                </tr>
                <tr>
                  <td><a class="btn btn-primary" href="#">Primary</a></td>
                  <td class="hidden-xs"><a class="btn btn-primary btn-lg" href="#">Primary</a></td>
                  <td><a class="btn btn-primary btn-sm" href="#">Primary</a></td>
                  <td class="hidden-xs"><a class="btn btn-primary disabled" href="#">Primary</a></td>
                  <td class="hidden-xs"><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Primary</a></td>
                  <td><a class="btn btn-primary btn-block" href="#">Primary</a></td>
                </tr>
                <tr>
                  <td><a class="btn btn-info" href="#">Info</a></td>
                  <td class="hidden-xs"><a class="btn btn-info btn-lg" href="#">Info</a></td>
                  <td><a class="btn btn-info btn-sm" href="#">Info</a></td>
                  <td class="hidden-xs"><a class="btn btn-info disabled" href="#">Info</a></td>
                  <td class="hidden-xs"><a class="btn btn-info" href="#"><i class="fa fa-sun-o fa-fw"></i> Info</a></td>
                  <td><a class="btn btn-info btn-block" href="#">Info</a></td>
                </tr>
                <tr>
                  <td><a class="btn btn-success" href="#">Success</a></td>
                  <td class="hidden-xs"><a class="btn btn-success btn-lg" href="#">Success</a></td>
                  <td><a class="btn btn-success btn-sm" href="#">Success</a></td>
                  <td class="hidden-xs"><a class="btn btn-success disabled" href="#">Success</a></td>
                  <td class="hidden-xs"><a class="btn btn-success" href="#"><i class="fa fa-check fa-fw"></i> Success</a></td>
                  <td><a class="btn btn-success btn-block" href="#">Success</a></td>
                </tr>
                <tr>
                  <td><a class="btn btn-warning" href="#">Warning</a></td>
                  <td class="hidden-xs"><a class="btn btn-warning btn-lg" href="#">Warning</a></td>
                  <td><a class="btn btn-warning btn-sm" href="#">Warning</a></td>
                  <td class="hidden-xs"><a class="btn btn-warning disabled" href="#">Warning</a></td>
                  <td class="hidden-xs"><a class="btn btn-warning" href="#"><i class="fa fa-warning fa-fw"></i> Warning</a></td>
                  <td><a class="btn btn-warning btn-block" href="#">Warning</a></td>
                </tr>
                <tr>
                  <td><a class="btn btn-danger" href="#">Danger</a></td>
                  <td class="hidden-xs"><a class="btn btn-danger btn-lg" href="#">Danger</a></td>
                  <td><a class="btn btn-danger btn-sm" href="#">Danger</a></td>
                  <td class="hidden-xs"><a class="btn btn-danger disabled" href="#">Danger</a></td>
                  <td class="hidden-xs"><a class="btn btn-danger" href="#"><i class="fa fa-times fa-fw"></i> Danger</a></td>
                  <td><a class="btn btn-danger btn-block" href="#">Danger</a></td>
                </tr>
              </tbody>
          </table>

        <div class="row">
          <div class="col-sm-12 col-lg-4">
            <p class="lead text-muted">Groups</p>
            <div class="row">
              <div class="col-sm-8 col-lg-8">
                <div class="btn-group">
                    <button class="btn btn-default">Left</button>
                    <button class="btn btn-default">Middle</button>
                    <button class="btn btn-default">Right</button>
                </div>
                <div class="btn-group">
                   <button class="btn btn-default">1</button>
                   <button class="btn btn-default">2</button>
                   <button class="btn btn-default">3</button>
                   <button class="btn btn-default">4</button>
                </div>
                <div class="btn-group">
                   <button type="button" class="btn btn-default"><i class="fa fa-fw fa-envelope"></i></button>
                   <button type="button" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></button>
                   <button type="button" class="btn btn-default"><i class="fa fa-fw fa-heart"></i></button>
                   <button type="button" class="btn btn-default"><i class="fa fa-fw fa-camera"></i></button>
                </div>                    
              </div>
              <div class="col-sm-4 col-lg-4">
                 <div class="btn-group btn-group-vertical">
                     <button type="button" class="btn btn-default"><i class="fa fa-align-left"></i></button>
                     <button type="button" class="btn btn-default"><i class="fa fa-align-center"></i></button>
                     <button type="button" class="btn btn-default"><i class="fa fa-align-right"></i></button>
                     <button type="button" class="btn btn-default"><i class="fa fa-align-justify"></i></button>
                    </div>
                    <div class="btn-group btn-group-vertical">
                     <button type="button" class="btn btn-default"><i class="fa fa-fw fa-envelope"></i></button>
                     <button type="button" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></button>
                     <button type="button" class="btn btn-default"><i class="fa fa-fw fa-heart"></i></button>
                     <button type="button" class="btn btn-default"><i class="fa fa-fw fa-camera"></i></button>
                    </div>                    
               </div>
             </div>
           </div>
           <div class="col-sm-12 col-lg-8">
            <p class="lead text-muted">Button dropdowns</p>
            <div class="btn-toolbar" style="margin: 0;">
                <div class="btn-group">
                  <button class="btn dropdown-toggle btn-default" data-toggle="dropdown">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
              </div>          
            <div class="btn-toolbar" style="margin: 0;">
                <div class="btn-group">
                  <button class="btn btn-default">Action</button>
                  <button class="btn dropdown-toggle btn-default" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-primary">Action</button>
                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-danger">Danger</button>
                  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-warning">Warning</button>
                  <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-success">Success</button>
                  <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button class="btn btn-info">Info</button>
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
              </div>          
            <div class="row">
              <div class="col-sm-6 col-lg-6">
                  <div class="btn-toolbar">
                    <div class="btn-group">
                      <button class="btn btn-lg btn-default">Large action</button>
                      <button class="btn btn-lg dropdown-toggle btn-default" data-toggle="dropdown"><span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                  </div>
                <div class="btn-toolbar">
                    <div class="btn-group">
                      <button class="btn btn-sm btn-default">Standard action</button>
                      <button class="btn btn-sm dropdown-toggle btn-default" data-toggle="dropdown"><span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                  </div>
                <div class="btn-toolbar">
                    <div class="btn-group">
                      <button class="btn btn-default btn-xs">Small action</button>
                      <button class="btn dropdown-toggle btn-default btn-xs" data-toggle="dropdown"><span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                  </div>
              </div>
              <div class="col-sm-6 col-lg-6">
                <div class="btn-toolbar" style="margin: 0;">
                  <div class="btn-group dropup">
                    <button class="btn btn-default">Dropup</button>
                    <button class="btn dropdown-toggle btn-default" data-toggle="dropdown"><span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div><!-- /btn-group -->
                  <div class="btn-group dropup">
                    <button class="btn primary btn-default">Right dropup</button>
                    <button class="btn primary dropdown-toggle btn-default" data-toggle="dropdown"><span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div><!-- /btn-group -->
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>


    <!-- Tables =========================================================== -->
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <h2 class="page-header">Tables</h2>
        <div class="row">
          <div class="col-sm-6 col-lg-6">
            <p class="lead text-muted">Striped</p>
            <table class="table table-striped" data-effect="fade">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>          
          </div>
          <div class="col-sm-6 col-lg-6">
            <p class="lead text-muted">Bordered</p>
            <table class="table table-bordered" data-effect="fade">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="2">1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@TwBootstrap</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>            
          </div>
        </div>
      </div>
    </div>


    <!-- Forms =========================================================== -->
    <div class="row"  >
      <div class="col-sm-12 col-lg-12">
        <h2 class="page-header">Forms</h2>
        <div class="row">
          <div class="col-sm-7 col-lg-7" data-effect="slide-left">
            <p class="lead text-muted">Inline</p>
            <form class="form-inline" role="form">
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-default">Sign in</button>
            </form>
          </div>
          <div class="col-sm-5 col-lg-5" data-effect="slide-right">
            <p class="lead text-muted">Horizontal</p>
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" class="btn btn-default">Sign in</button>
                </div>
              </div>
            </form>          
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Controls -->
      <div class="col-sm-12 col-lg-12">
        <h2 class="page-header">Form Controls</h2>
        <div class="row">
          <div class="col-sm-4 col-lg-3">
            <p class="lead text-muted">Inputs</p>
            <input type="text" class="form-control" placeholder="Text input">
            <br>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <div class="col-sm-4 col-lg-2">
            <p class="lead text-muted">Checkbox</p>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="" checked="">
                Checked
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="">
                Unchecked
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="" disabled="">
                Disabled
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="" disabled="" checked="">
                Disabled Checked
              </label>
            </div>
            <br>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
            </label>           
          </div>
          <div class="col-sm-4 col-lg-2">
            <p class="lead text-muted">Radio</p>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                Checked 
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Unchecked 
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                Disabled 
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios2" id="optionsRadios4" value="option4" disabled="" checked="">
                Disabled Checked 
              </label>
            </div>
          </div>
          <div class="clearfix visible-sm visible-md"></div>
          <div class="col-sm-6 col-lg-2">
            <p class="lead text-muted">Select</p>
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="col-sm-6 col-lg-3">
            <p class="lead text-muted">Multiple Select</p>
            <select multiple class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Extended -->
      <div class="col-sm-12 col-lg-12">
        <h2 class="page-header">Form Controls Extended</h2>
        <div class="row">
          <div class="col-sm-4 col-lg-4">
            <p class="lead text-muted">Prepend / Append</p>
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>
          </div>

          <div class="col-sm-4 col-lg-4">
            <p class="lead text-muted">Buttons</p>

            <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
              <input type="text" class="form-control">
            </div><!-- /input-group -->

            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div><!-- /input-group -->

            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input type="text" class="form-control">
            </div><!-- /input-group -->


          </div>
          <div class="col-sm-4 col-lg-4">
            <p class="lead text-muted">Checkboxes and radio</p>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="checkbox">
              </span>
              <input type="text" class="form-control">
            </div><!-- /input-group -->
            <div class="input-group">
              <span class="input-group-addon">
                <input type="radio">
              </span>
              <input type="text" class="form-control">
            </div><!-- /input-group -->
          </div>
        </div>
      </div>
    </div>

    <!-- Navs -->
    
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <h2 class="page-header">Navs</h2>
        <div class="row">
          <div class="col-sm-4 col-lg-4">
            <p class="lead text-muted">Pills</p>
            <ul class="nav nav-pills">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Messages</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-lg-4">
            <p class="lead text-muted">Stacked Pills</p>
            <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Messages</a></li>
            </ul>            
          </div>
          <div class="col-sm-4 col-lg-4">
            <p class="lead text-muted">Stacked Pills in well </p>
            <div class="well">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Applications</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-6">
            <p class="lead text-muted">Tabs</p>
            <div class="tabbable">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab11" data-toggle="tab">Section 1</a></li>
                <li><a href="#tab12" data-toggle="tab">Section 2</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab11">
                  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>
                </div>
                <div class="tab-pane" id="tab12">
                  <p>Howdy, I'm in Section 2.Morbi vel nibh et arcu pretium adipiscing. Ut vestibulum est eget justo facilisis ullamcorper.  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <p class="lead text-muted">Justified</p>
            <div class="tabbable">
              <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#just1" data-toggle="tab">Home</a></li>
                <li><a href="#just2" data-toggle="tab">Profile</a></li>
                <li><a href="#just3" data-toggle="tab">Messages</a></li>
              </ul> 
              <div class="tab-content">
                <div class="tab-pane active" id="just1">
                  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>
                </div>
                <div class="tab-pane" id="just2">
                  <p>Howdy, I'm in Section 2.Morbi vel nibh et arcu pretium adipiscing. Ut vestibulum est eget justo facilisis ullamcorper.  </p>
                </div>
                <div class="tab-pane" id="just3">
                  <p>Integer ac nisl et urna gravida malesuada. Pellentesque iaculis tortor metus. Quisque scelerisque nibh id nisl feugiat eu vestibulum mauris vestibulum. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Breadcrumbs -->
      <div class="col-sm-6 col-lg-4">
        <h2 class="page-header">Breadcrumbs</h2>
        <ul class="breadcrumb">
          <li class="active">Home</li>
        </ul>
        <ul class="breadcrumb">
          <li><a href="#">Home</a> </li>
          <li class="active">Library</li>
        </ul>
        <ul class="breadcrumb breadcrumb-light breadcrumb-divider-middot">
          <li><a href="#">Home</a> </li>
          <li><a href="#">Library</a> </li>
          <li class="active">Data</li>
        </ul>
      </div>
      <!-- Pagination -->
      <div class="col-sm-6 col-lg-4">
        <h2 class="page-header">Pagination</h2>
        <!-- Pagination Large -->
        <ul class="pagination pagination-lg">
          <li><a href="#">«</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li class="disabled"><a href="#">»</a></li>
        </ul>
      
        <!-- Pagination Normal -->
        <ul class="pagination">
          <li><a href="#">«</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="disabled"><a href="#">»</a></li>
        </ul>
      
        <!-- Pagination Small -->
        <ul class="pagination pagination-sm">
          <li><a href="#">«</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="disabled"><a href="#">»</a></li>
        </ul>
      
        <ul class="pager">
          <li class="previous">
            <a href="#">← Older</a>
          </li>
          <li class="next">
            <a href="#">Newer →</a>
          </li>
        </ul>
      </div>
      <!-- Labels / Budgets -->
      <div class="col-sm-12 col-lg-4">
        <h2 class="page-header">Labels</h2>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Label</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                Default
              </td>
              <td class="cleafix">
                  <span class="label label-default pull-left" data-effect="pop">Default</span>
              </td>
            </tr>
            <tr>
              <td>
                Primary
              </td>
              <td class="cleafix">
                  <span class="label label-primary pull-left" data-effect="pop">Success</span>
              </td>
            </tr>
            <tr>
              <td>
                Success
              </td>
              <td class="cleafix">
                  <span class="label label-success pull-left" data-effect="pop">Success</span>
              </td>
            </tr>
            <tr>
              <td>
                Warning
              </td>
              <td class="cleafix">
                  <span class="label label-warning pull-left" data-effect="pop">Warning</span>
              </td>
            </tr>
            <tr>
              <td>
                Info
              </td>
              <td class="cleafix">
                  <span class="label label-info pull-left" data-effect="pop">Info</span>
              </td>
            </tr>
            <tr>
              <td>
                Danger
              </td>
              <td class="cleafix">
                  <span class="label label-danger pull-left" data-effect="pop">Danger</span>                
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Thumbnails -->
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <h2 class="page-header">Thumbnails</h2>
        <div class="row">
          <div class="col-sm-12 col-lg-6 " data-effect="slide-bottom">
            <p class="lead text-muted">Default</p>
            <!-- thumbnails container -->
            <div class="row">
              <div class="col-lg-6 col-sm-6 ">
                <a href="#" class="thumbnail">
                  <img src="assets/img/thumb1.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6 col-sm-6 ">
                <a href="#" class="thumbnail">
                  <img src="assets/img/thumb2.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6 col-sm-6 ">
                <a href="#" class="thumbnail">
                  <img src="assets/img/thumb3.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6 col-sm-6 ">
                <a href="#" class="thumbnail">
                  <img src="assets/img/thumb4.jpg" alt="">
                </a>
              </div>
            </div>
            <!-- /Thumbnails container -->
          </div>
          <div class="col-sm-12 col-lg-6 " data-effect="slide-bottom">
            <p class="lead text-muted">With Captions</p>
            <!-- Thumbnails container -->
            <div class="row">
              <div class="col-lg-6 col-sm-6 ">
                <div class="thumbnail">
                  <img src="assets/img/thumb5.jpg" alt="">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn btn-default">Action</a></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6 ">
                <div class="thumbnail">
                  <img src="assets/img/thumb6.jpg" alt="">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn btn-danger">Action</a></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Thumbnails container -->
          </div>
        </div>
      </div>
    </div>

    <!-- Alerts -->
    <div class="row">
      <div class="col-sm-4 col-lg-4" data-effect="slide-left">
        <h2 class="page-header">Alerts</h2>
        <div class="alert alert-warning">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Oh snap!</strong> Change a few things up and try submitting again.
        </div>
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Well done!</strong> You successfully read this important alert message.
        </div>
        <div class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
        </div>
      </div>
      <div class="col-sm-4 col-lg-4" data-effect="slide-top">
        <h2 class="page-header">Progress Bar</h2>
        <div class="progress ">
          <div class="progress-bar" style="width: 20%"><span>default</span></div>
        </div>
        <div class="progress ">
          <div class="progress-bar progress-bar-info" style="width: 40%"><span>.info</span></div>
        </div>
        <div class="progress ">
          <div class="progress-bar progress-bar-success" style="width: 60%"><span>.success</span></div>
        </div>
        <div class="progress ">
          <div class="progress-bar progress-bar-warning" style="width: 75%"><span>.warning</span></div>
        </div>
        <div class="progress ">
          <div class="progress-bar progress-bar-danger" style="width: 90%"><span>.danger</span></div>
        </div>
        <div class="progress progress-striped">
          <div class="progress-bar progress-bar-success" style="width: 40%"></div>
        </div>
      </div>
      <div class="col-sm-4 col-lg-4" data-effect="slide-right">
        <h2 class="page-header">Media List</h2>
          <ul class="media-list">
            <li class="media">
              <a class="pull-left" href="#" style="width: 74px; height: 74px;">
                <img class="media-object img-thumbnail" data-src="holder.js/64x64" alt="64x64" src="assets/img/thumb-small.jpg">
              </a>
              <div class="media-body">
                <h5 class="media-heading"><a href="#">Media heading</a></h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                <div class="media">
                  <a class="pull-left" href="#" style="width: 74px; height: 74px;">
                    <img class="media-object img-thumbnail"  alt="64x64" src="assets/img/thumb-small.jpg">
                  </a>
                  <div class="media-body">
                    <h5 class="media-heading"><a href="#">Media heading</a></h5>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#" style="width: 74px; height: 74px;">
                <img class="media-object img-thumbnail" data-src="holder.js/64x64" alt="64x64" src="assets/img/thumb-small.jpg">
              </a>
              <div class="media-body">
                <h5 class="media-heading"><a href="#">Media heading</a></h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
              </div>
            </li>
          </ul>
      </div>
    </div>


    <!-- Wells -->
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <h2 class="page-header">Wells</h2>
        <div class="well">
          Look, I'm in a well!
        </div>
      </div>
    </div>


    <!-- JAVASCRIPT =========================================================== -->

    <div class="row">
      <!-- Tooltips -->
      <div class="col-sm-5 col-lg-5">
        <h2 class="page-header">Tooltip</h2>
        <br>
        <br>
        <ul class="list-inline">
          <li><a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a></li>
          <li><a href="#" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
          <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a></li>
          <li><a href="#" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
        </ul>
      </div>
      <!-- Popovers -->
      <div class="col-sm-7 col-lg-7">
        <h2 class="page-header">Popover</h2>
        <br>
        <br>

        <ul class="list-inline">
          <li><a href="#" class="btn btn-default" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on top">Popover on top</a></li>
          <li><a href="#" class="btn btn-default" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on right">Popover on right</a></li>
          <li><a href="#" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on bottom">Popover on bottom</a></li>
          <li><a href="#" class="btn btn-default" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on left">Popover on left</a></li>
        </ul>
      </div>
    </div>

    <!-- Buttons toggls -->
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <h2 class="page-header">JavaScript Button</h2>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <p class="lead text-muted">Stateful</p>
            <button type="button" id="fat-btn" class="btn btn-primary" data-loading-text="Loading..." data-effect="fall">Loading state</button>
          </div>
          <div class="col-sm-6 col-lg-3">
            <p class="lead text-muted">Single toggle</p>
            <button type="button" class="btn btn-primary" data-toggle="button" data-effect="fall">Single Toggle</button>
          </div>
          <div class="col-sm-6 col-lg-3">
            <p class="lead text-muted">Checkbox</p>
            <div class="btn-group" data-toggle="buttons" data-effect="fall">
              <label class="btn btn-primary">
                <input type="checkbox"> Option 1
              </label>
              <label class="btn btn-primary">
                <input type="checkbox"> Option 2
              </label>
              <label class="btn btn-primary">
                <input type="checkbox"> Option 3
              </label>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <p class="lead text-muted">Radio</p>
            <div class="btn-group" data-toggle="buttons" data-effect="fall">
              <label class="btn btn-primary">
                <input type="radio" name="options" id="option1"> Option 1
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="options" id="option2"> Option 2
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="options" id="option3"> Option 3
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Collapsible panels -->
    <div class="row">

      <div class="col-sm-6 col-lg-6">
        <h3>Collapsible Panels</h3>
        <div class="panel-group" id="accordion-panel">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel" href="#collapseOnePanel">
                  Collapsible Group Item #1
                </a>
              </h4>
            </div>
            <div id="collapseOnePanel" class="panel-collapse collapse in">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel" href="#collapseTwoPanel">
                  Collapsible Group Item #2
                </a>
              </h4>
            </div>
            <div id="collapseTwoPanel" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel" href="#collapseThreePanel">
                  Collapsible Group Item #3
                </a>
              </h4>
            </div>
            <div id="collapseThreePanel" class="panel-collapse collapse">
              <div class="panel-body">
                Aliquam facilisis, orci in vulputate posuere, sapien dolor dapibus orci, vitae venenatis dui elit vitae lorem. Sed porta fermentum felis in molestie. Sed porta fermentum felis in molestie. Sed porta fermentum felis in molestie. 
              </div>
            </div>
          </div>
        </div>        
      </div>

      <div class="col-sm-6 col-lg-6">
        <h3>With panel styles </h3>

        <div class="panel-group" id="accordion-panel2">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseOnePanel2">
                  Collapsible Group Item #1
                </a>
              </h4>
            </div>
            <div id="collapseOnePanel2" class="panel-collapse collapse in">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
              </div>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseTwoPanel2">
                  Collapsible Group Item #2
                </a>
              </h4>
            </div>
            <div id="collapseTwoPanel2" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
              </div>
            </div>
          </div>
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseThreePanel2">
                  Collapsible Group Item #3
                </a>
              </h4>
            </div>
            <div id="collapseThreePanel2" class="panel-collapse collapse">
              <div class="panel-body">
                Aliquam facilisis, orci in vulputate posuere, sapien dolor dapibus orci, vitae venenatis dui elit vitae lorem. Sed porta fermentum felis in molestie. Sed porta fermentum felis in molestie. Sed porta fermentum felis in molestie. 
              </div>
            </div>
          </div>
        </div>           
      </div>
    </div>


    <!-- Slider -->
    <div class="row">
      
      <div class="col-sm-6 col-lg-6">
        <h2 class="page-header">Carousel</h2>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="item active">
              <img src="assets/img/thumb1.jpg" alt="">
              <div class="carousel-caption caption-right">
                <h4 class="carousel-caption-heading">Carousel Title 1</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="item">
              <img src="assets/img/thumb2.jpg" alt="">
              <div class="carousel-caption caption-left">
                <h4 class="carousel-caption-heading">Carousel Title 2</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="item">
              <img src="assets/img/thumb3.jpg" alt="">
              <div class="carousel-caption">
                <h4 class="carousel-caption-heading">Carousel Title 3</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next fa fa-angle-right"></span>  
          </a>
        </div>        
      </div>

      <!-- Modal -->
      <div class="col-sm-6 col-lg-6">
        <h2 class="page-header">Modal</h2>
        <div class="row">
            <div class="text-center">
              <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch modal</a>
            </div>
            <br><br>
            <div class="modal" style="position: relative; display: block; overflow: auto; z-index: 0">
              <div class="modal-dialog" style="padding-top: 0; width: auto; position: relative; margin-left: 0; left: 0">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>

             <!-- sample modal content -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                  </div>
                  <div class="modal-body">
                    <h4>Text in a modal</h4>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

                    <h4>Popover in a modal</h4>
                    <p>This <a href="#" role="button" class="btn btn-default" data-toggle="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on click.</p>

                    <h4>Tooltips in a modal</h4>
                    <p><a href="#" data-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" data-toggle="tooltip" title="Tooltip">that link</a> should have tooltips on hover.</p>

                    <hr>

                    <p>Fusce dolor lacus, interdum eu tincidunt sed, aliquet vel turpis. Proin ut eros quis purus cursus laoreet. Proin ut eros quis purus cursus laoreet. </p>

                    <div class="btn btn-lg btn-block btn-primary">Fully centered modal</div>
        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div>
      </div>
     
    </div>
    <h1 class="page-header">Typography <small>A small text</small></h1>
    <!-- Headings & Paragraph Copy -->
    <div class="row">
      <div class="col-sm-6 col-lg-3" data-effect="slide-left">
          <h1>h1. Heading 1</h1>
          <h2>h2. Heading 2</h2>
          <h3>h3. Heading 3</h3>
          <h4>h4. Heading 4</h4>
          <h5>h5. Heading 5</h5>
          <h6>h6. Heading 6</h6>
      </div>
      <div class="col-sm-6 col-lg-5" data-effect="slide-bottom">
        <h3>Paragraph</h3>
        <p>Lorem ipsum dolor sit amet, <mark>a mark here</mark> adipisicing elit. Atque, iusto, minus sequi natus nesciunt rerum tenetur corrupti autem officiis fugiat <a href="#">expedita laudantium</a> ea aspernatur</p>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, velit, facere eos molestias rerum nesciunt consequatur voluptate minus quod</b></p>
        <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, vitae, dolore, ratione, neque deleniti officia atque dignissimos porro.</i></p>
        <p><strong class="text-success">Consectetur adipisicing elit</strong>. Corrupti, aliquam, voluptates, nulla, blanditiis totam voluptatem <strong class="text-danger">voluptatum quod ipsa debitis non</strong> ab odio natus.</p>
      </div>
      <div class="col-sm-12 col-lg-4" data-effect="slide-right">
        <h3>Lead text</h3>
        <p class="lead">Quisquam, dolorum, iusto iste voluptates rerum ea quas expedita. </p>
        <h3>Small text</h3>
        <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et ullam libero repellendus voluptatibus obcaecati magni id nulla dolores nesciunt. Quasi quisquam facilis nobis ullam rem deleniti vero consectetur earum.</small></p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-6 col-lg-6" data-effect="slide-left">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
        </blockquote>
      </div>
      <div class="col-sm-6 col-lg-6">
        <blockquote class="pull-right" data-effect="slide-right">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
        </blockquote>
      </div>
    </div>

    <!-- List Groups -->
  
    <h2 class="page-header">List Groups</h2>
    <div class="row">
      <div class="col-sm-6 col-lg-4">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
      </div>
      <div class="col-sm-6 col-lg-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">Cras justo odio</a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
          </div>
      </div>
      <div class="clearfix visible-md visible-sm"></div>
      <div class="col-sm-12 col-lg-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
      </div>
    </div>

    <!-- Panels -->

    <h2 class="page-header">Panels</h2>
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="panel panel-primary" id="panels" data-effect="helix">
          <div class="panel-heading">This is a header
          </div>
          <div class="panel-body">
            <p>This is a panel paragraph</p>
            <p>This is a panel paragraph</p>
          </div>
          <div class="panel-footer">This is a footer
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 effect-perspective">
        <div class="panel panel-info" data-effect="helix">
          <div class="panel-heading">This is a header
          </div>
          <div class="panel-body">
            <p>This is a panel paragraph</p>
            <p>This is a panel paragraph</p>
          </div>
          <div class="panel-footer">This is a footer
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 effect-perspective">
        <div class="panel panel-danger" data-effect="helix">
          <div class="panel-heading">This is a header
          </div>
          <div class="panel-body">
            <p>This is a panel paragraph</p>
            <p>This is a panel paragraph</p>
          </div>
          <div class="panel-footer">This is a footer
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 effect-perspective">
        <div class="panel panel-warning" data-effect="helix">
          <div class="panel-heading">This is a header
          </div>
          <div class="panel-body">
            <p>This is a panel paragraph</p>
            <p>This is a panel paragraph</p>
          </div>
          <div class="panel-footer">This is a footer
          </div>
        </div>
      </div>
    </div>      
    

    <div class="row">
      <div class="col-lg-12">
        <div class="text-center"><br><br><a href="http://codecanyon.net/item/boske-skin-for-bootstrap-3/6125958?ref=geedmo" class="btn btn-primary btn-lg">Get This Skin</a></div>
      </div>
    </div>

  </div> <!-- /container -->

  <footer class="text-center">
    <p>
      Powered by <a href="http://getbootstrap.com/">Bootstrap</a>
       | Made by <a href="http://geedmo.com">Geedmo</a></p>
  </footer>

  <!-- Main Scripts-->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- Demo -->
  <script src="assets/js/application.js"></script>


</body>
</html>