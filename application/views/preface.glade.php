@include('header')
 

@include('navbar')

    <!-- Page Content -->
    <div class="container">

        <div class="row">


            @include('sidebar')
            
            <div class="col-md-9">

                <a href="{{Url::link('home/preface')}}"><h1>Preface</h1></a><br>
                <a href="{{Url::link('home/preface#introduction')}}" class="lead">Introduction</a><br>
                <a href="{{Url::link('home/preface#quick_start')}}" class="lead">Quick Start</a><br>
                <a href="{{Url::link('home/preface#release_notes')}}" class="lead">Release Notes</a><br>
                <a href="{{Url::link('home/preface#upgrade_guide')}}" class="lead">Upgrade Guide</a><br>
                <a href="{{Url::link('home/preface#contribution_guide')}}" class="lead">Contribution Guide</a><br>


                <h2 id="introduction" class="text-danger">Introduction</h2>


            
                <p>The Gliver MVC Framework is for PHP developers, both new and seasoned to write cutting edge web applicaitions, APIs, Web Services, Software Back ends and much more just in a matter of minutes. 
                This framework is inspired by a community of developers who needed a light weight framework with a relatively faster execution time on the server as compared to other frameworks based on <a href="http://php.net/releases/5_4_0.php"> <strong>PHP >=5.4</strong> </a>. Gliver comes with a built in
                templating engine that removes all the monotonous repeated php tags, therefore being less scary for a front end developer with almost no learning curve</p>
                       



                <h2 id="quick_start" class="text-danger">Quick Start</h2>




                <p>To get started with Gliver MVC , you need a runing web server then <a href="https://github.com/gliver-mvc/gliver">download</a> the source code. You might choose to use 
                the various distributions of Apache, depending on your operating system and that would suffice. No special software or environment will you need again to use this framework.  </p>
                <p>Once you have downloaded the source code, extract it into the root directory of your web server and access the application vai a web browser, specifying the name of your installation directory, and there you go! Wish you a happy coding experience after...</p>
                <p>For example, let's say you extracted your code into a folder in your web root called <code>gliver</code>, you access via your url in this manner <code>http://localhost/gliver</code> </p>
      In order to add a package for installation inside Gliver, use composer. Add the package as a dependancy on the <code>composer.json</code> file in your root directory as follows:
<pre>
{
    "require": {
        "vendor/package": "1.3.2",
        "vendor/package2": "1.*",
        "vendor/package3": "^2.0.3"
    }
}                
</pre>
                after this you can run a <code>composer update</code> to download and install package contents. NOTE that you need to have composer installed on your local computer if you would like this to work. There is a more in depth guide on how to use <a href="https://getcomposer.org/" target="_blank">Composer </a> and <a href="https://packagist.org/" target="_blank">Packagist</a>  repositories on the respective sites.
                </p>


                <h2 id="release_notes" class="text-danger">Releases</h2>
                
                <p>The official stable release of Gliver framework is <span class="text-danger">v1.0.0</span>. Gliver MVC is, however, under active developemnt and updates are being pushed to the <a href="https://github.com/gliver-mvc/gliver">repository</a> every day. However, the syntax defined in version 0.0.1 will not change, only functionlity will be added. 
                So if you have already learnt the syntax with this version, you are good to go, nothing would change, only for better functionality. However, you might want to keep checking out for new updates, 
                so remember to subscribe to our newsletter so that we can keep you informed of every advancement. The updates would only include the very cool features that you have been waiting for...you don't want to miss out on this.</p>   

                   <h3 class="text-success">Gliver v.1.0.1  Release</h3> 
                   <p>We are happy that there is continuous development of this framework - Thanks to all who are supporting this project so that we can take this framework to the level we would desire.
                    This is an update of the v1.0.0 with a few additions and subtractions</p>

                    <h4 class="text-danger"> Release Notes</h4>
                    <ul>
                        <li>Namespace change of Helpers\View\View class to <span class="text-info">Drivers\Templates\View;</span> </li>
                        <li>Ability to set default timezone and file upload_path in the config.php file</li>
                        <li>Release of the Helpers\Upload\Upload class and related API</li>
                        <li>Inclusion of <span class="text-info"> MySQLResponseObject</span> as default response class for all MySQL queries</li>
                        <li>Addition of the ability of the View class to return json header and parsed template files through methods <code>View::renderJson()</code>  and <code>View::get()</code> </li>
                        <li>You can now get site title from your controller using <code>$this->site_title</code></li>
                        <li>You can now benchmark your request execution time using <code>$this->request_exec_time()</code>  method</li>
                    </ul>       
       


                        <h3 class="text-success">Gliver v1.0.0 Release</h3> 
                        <p>This is the first stable official release of Gliver framework after the many alpha versions released earlier. Out of the box, this version has</p>
                        <h4 class="text-danger"> Release Notes</h4>
                        <ul>
                            <li>Glade Templating Implementation with .glade.php extension for all view files</li>
                            <li>Advanced Routing with ability to name url parameters</li>
                            <li>Express Query Builder and Model Class for automated query generation and execution</li>
                        </ul>      

                <h2 id="upgrade_guide" class="text-danger">Upgrade Guide</h2>
                
                    <p>Things can only always get better. If you realize that we have updates and there are some really cool 
                    features that you like in the updates, you can always pull the new code and put you application on steriods. At the moment, for you to 
                    pull down updates to your application, you need to <a href="https://github.com/gliver-mvc/gliver/archive/master.zip"> download </a> the framework extract and replace only the content of the system directory
                    with the contents of the system directory in your application. You thought there was more to it? We are sorry, that's all, your framework is now  up to date. Enjoy the new funcitonality.
                    </p>


                <h2 id="contribution_guide" class="text-danger">Contribution Guide</h2>
                


                <p>We are really grateful you are amazed by this wonderful light weight framework and would like to contribute code to make it better. We can't wait to see you getting started! Contribution of code is as easy. You need to bundle you code in packages
                , use psr-0 or psr-4 namespacing and publish then on the <a href="https://packagist.org/">packagist repository</a>, you can then install them via composer. With this you can contribute to the core of the framework as well. There is a more in depth guide on contributing code in the tutorials sections. Be sure to check it out.
                . We welcome your contributions as the main drive for this framework is to develop an active community around this code base. To contribute just folk this repository and fire on... Once we have some cool features in, do a pull request and we will be in touch to get the code merged in a reasonable time</p>     
        


            </div>

        </div>

    </div>

@include('footer')
