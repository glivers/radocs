<!DOCTYPE html>
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" type="image/ico" href="{{Url::assets('img/logo.png')}}">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gliver - Official Site</title>
   
    <!-- Bootstrap Core CSS -->
    <link href="{{Url::assets('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{Url::assets('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{Url::assets('css/font-css.css')}}" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand topnav" href=""><img src="img/logo.png" width="40px" height="40px"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{Url::link('home/preface')}}">Documentation</a></li>
                    <li><a href="https://github.com/gliver-mvc/gliver/archive/master.zip">Download</a></li>
                    <li><a href="{{Url::link('#contact')}}">Contact</a></li>
                    <li><a href="http://eddy.glivers.com/blog/gliver-mvc/">Blog</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="{{Url::link('#contribute')}}">Contribute</a></li>
               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
        <div class="container">
            <div style="height:70px;"></div>
            
            <!--controllers-->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="col-lg-8 col-lg-offset-2">

                        <h1 class="text-center" style="color:green;">Gliver Framework</h1>
                        <h3 class="text-center">Gliver Framework offers you very lightweight and therefore lightning fast MVC environment for writing Web Applications using PHP!</h3>

                        <br>
                        <img src="img/logo.png" class="img img-responsive center-block" width="60px" height="60px">

                        <p class="text-center">All Controllers are namespaced so you can have as many controllers classes as your application needs without fear of conflicting class names...</p>
                    </div>

                </div>

                <div class="col-lg-12">

                    <div class="col-lg-8 col-lg-offset-2">

                            <img src="img/controllers.png" class="img img-responsive">

                    </div>

                </div>

            </div>

            <br>
            <hr>

            <!--Routing-->
            <div class="row">

                <div class="col-lg-12">

                    <div class="col-lg-6">

                        <h2 style="color:green;">Fast Routing</h2>
                        <p>Routing is very first - no classes to instantiate! Routes are defined in an array which gives a miriad of 
                            flexibility for configuration. You can specify a controller, a controller/method pair and parameter names to pass when route is accessed. Basically all you need in a route.</p>
                    </div>

                    <div class="col-lg-6">
                        <img src="img/routing.png" class="img img-responsive">
                    </div>


                </div>


            </div>

            <br>
            <hr>

            <!--Models-->
            <div class="row">

                <div class="col-lg-12">


                    <div class="col-lg-6">
                        <img src="img/models.png" class="img img-responsive">
                    </div>

                    <div class="col-lg-6">

                        <h3 style="color:green;">Intuitive ORM Model</h3>

                        <p>All the sweat that goes into query generation, keeping track of database connection resources, error handling has already been automated for you out of the box! 
                            All you need is provide database settings in the database config file and sit back, relax and watch your queries generated and executed</p>

                    </div>

                </div>

            </div>

            <br>
            <hr>

            <!--View Loading-->
            <div class="row">

                <div class="col-lg-12">

                    <div class="col-lg-6">

                        <h3 style="color:green;">Express View Loader</h3>
                        <p>Once you have done your data processing, you want to represent this data through a user interface. Your work is done! 
                            Why should you go through the hassle of locating your view files and prefilling them with data? All you do is call the View::render() Helper class, pass
                            the file name and data variables to prefill it with, this will load including the embedded views in this file - cool huh?</p>

                    </div>

                    <div class="col-lg-6">
                        <img src="img/view-loading.png" class="img img-responsive">
                    </div>


                </div>

            </div>

            <br>
            <hr>

            <!--Templating-->
            <div class="row">

                <div class="col-lg-12">


                    <div class="col-lg-6">
                        <img src="img/view-templating.png" class="img img-responsive">
                    </div>

                    <div class="col-lg-6">

                        <h3 style="color:green;">Glade Templating...</h3>
                        <p>As a developer I know you are sick of seeing PHP code loitered everywhere in the HTML view files - but what options do you have?
                            We have already looked into this. Gliver framework implements a very light weight templating class that is only loaded by one class file
                            and emulates plain HTML. An elegant way of substituting the ECHO command and most LOOPING functions - all for you to enjoy!</p>

                    </div>

                </div>


            </div>

            <br>
            <hr>

            <!--Libraries-->
            <div class="row">

                <div class="col-lg-12">

                    <div class="col-lg-6">

                        <h3 style="color:green;">Bring In Your Old Code</h3>
                        <p>I know you have that favorite library or class of yours that you use to perform certain repeated tasks or to excecute as 
                            a cron job. DON'T take time to think about them - we are not separating you from what you LOVE! Bring that code with you into Gliver.
                            Out of the box, Gliver supports addition of namespaced, psr-4 libraries of code for pasting into the libraries directory and loading these code from
                            your controller never got easier...
                        </p>

                    </div>

                    <div class="col-lg-6">
                        <img src="img/library-loading.png" class="img img-responsive">
                    </div>


                </div>


            </div>

            <br><br>


            <!-- Packages from Packagist Repository-->
            <div class="row">




            </div>

        </div>
        <!-- /.container -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="{{Url::link('home')}}">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="{{Url::link('home/preface')}}">Documentation</a>
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
