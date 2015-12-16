<!DOCTYPE html>
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" type="image/ico" href="{{Url::assets('img/logo.png')}}">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gliver MVC PHP Framework</title>
   
    <!-- Bootstrap Core CSS -->
    <link href="{{Url::assets('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{Url::assets('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="">Gliver MVC Framework</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{Url::base('home/preface')}}">Documentation</a></li>
                    <li><a href="https://github.com/gliver-mvc/gliver/archive/master.zip">Download</a></li>
                    <li><a href="{{Url::base('#contact')}}">Contact</a></li>
                    <li><a href="http://eddy.glivers.com/blog/gliver-mvc/">Blog</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="{{Url::base('#contribute')}}">Contribute</a></li>
               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Gliver MVC</h1>
                        <h3>All Tools you need to Build a Web Application in one Box</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/gliver-mvc/gliver" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="https://linkedin.com" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://github.com/gliver-mvc/gliver/archive/master.zip" class="btn btn-primary btn-lg"><i class="fa fa-fw"></i> <span class="network-name">Download Gliver v0.0.1</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="{{Url::base('home')}}">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="{{Url::base('home/preface')}}">Documentation</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="https://github.com/gliver-mvc/gliver/archive/master.zip">Download</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Blog</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contribute</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="https://github.com/gliver-mvc/gliver">Github</a>
                        </li>
                     </ul>
                    <p class="copyright text-muted small">Copyright &copy; Glivers Limited 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="{{Url::assets('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{Url::assets('js/bootstrap.min.js')}}"></script>

</body>

</html>
