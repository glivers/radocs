@include('header')
 

@include('navbar')

    <!-- Page Content -->
    <div class="container">

        <div class="row">


            @include('sidebar')
            
            <div class="col-md-9">

                <a href="{{Url::base('home/preface')}}"><h1>Preface</h1></a><br>
                <a href="{{Url::base('home/preface#introduction')}}" class="lead">Introduction</a><br>
                <a href="{{Url::base('home/preface#quick_start')}}" class="lead">Quick Start</a><br>
                <a href="{{Url::base('home/preface#release_notes')}}" class="lead">Release Notes</a><br>
                <a href="{{Url::base('home/preface#upgrade_guide')}}" class="lead">Upgrade Guide</a><br>
                <a href="{{Url::base('home/preface#contribution_guide')}}" class="lead">Contribution Guide</a><br>


                <h3 id="introduction" class="text-danger">Introduction</h3>


            
                <p>The Gliver MVC Framework is for PHP developers, both new and seasoned to write cutting edge web applicaitions, APIs, Web Services, Software Back ends and much more just in a matter of minutes. 
                This framework is inspired by a community of developers who needed a light weight framework with a relatively faster execution time on the server as compared to other frameworks based on <a href="http://php.net/releases/5_4_0.php"> <strong>PHP >=5.4</strong> </a>. Gliver comes with a built in
                templating engine that removes all the monotonous repeated php tags, therefore being less scary for a front end developer with almost no learning curve</p>
                       



                <h3 id="quick_start" class="text-danger">Quick Start</h3>




                <p>To get started with Gliver MVC , you need a runing web server and then head to <a href="https://github.com/gliver-mvc/gliver">Github.com</a> and download the source code. You might choose to use 
                the various distributions of Apache, depending on your operating system and that would suffice. No special software or environment will you need again to use this framework.  </p>
                <p>Once you have downloaded the source code, extract it into the root directory of your web server and access the application vai a web browser, specifying the name of your installation directory, and there you go! Wish you a happy coding experience after...</p>
                <p>For example, let's say you extracted your code into a folder in your web root called <code>gliver</code>, you access via your url in this manner <code>http://localhost/gliver</code> </p>
                <p>By default, the page that loads the application home page... How did we get here? Check the directory structure below</p>
<pre>
application
bin
config
public
system
vendor
.htaccess
license.txt
readme.md
composer.json
</pre>

                <p>At the very top is the application folder. This is where all of your code is gonna reside. In here you are going to write your code for the <code>Controllers</code>, <code>Models</code>, <code>Views</code> <code>Libraries</code> among others... For instance, you get to your controllers in this manner <code>application/controllers/</code>. In here
                you will always find a <code>BaseController.php</code> class, do not delete this class as all controllers need to extend this class</p>
                <p>Next is the <code>bin</code> folder. In here we have three directories,as below:
                <pre>
bin
../cache
../logs/error.log
../sessions
                </pre>
                If you chose to enable caching through either Memcached or Redis, all the cached content would be written into the <code>cache</code> directory<br />
                All error messages during your application are logged into the <code>logs</code> directory in a file called <code>error.log</code>. So if you want to read the error messages,
                you will open up this file in a text editor. You will have an option of choosing to either only write error logs to file, this is ideal for a production environment and an option to as
                well display error messages in the browser, in the configuration settings. If you choose to display errors in the browser, ideal for a development environment, the error messages would
                as well be written to the log file though, for your future reference. You can always clear the contents of the <code>bin/logs/error.log</code> file at any time you feel like.
                The <code>sessions</code> directory is where all the session data is stored. </p>
                <br />
                <p>Following is the <code>config</code> folder. All of your application specific settings reside here, including the database configuration settings. The settings are stored in an array format from where they are loaded at run time. So you will want to ensure you maintain a valid array after making your changes.
                We have two configuration files...</p>
                <pre>
config
../config.php
../database.php
                </pre>
                <p>The <code>config.php</code> file is for all the general configuration while the <code>database.php</code> is particularly for the database configuration settings. There are already placeholders for you
                 in the form of array keys, so you don't have to add any array for a new configutation, all you do is to change the values as you wish. Besides, there are comment lines to guide on what fits where... <br/>
                 For instance, say you would like to change the application enviroment to development so that errors are displayed in the browser, you would so as below:
                 <pre>
/**
*Set the application environment. Set boolean true for development and false for production 
*all without quotes.
*/
'dev' => false,
                 </pre>
                 We would set the value of the <code>'dev' => true</code> to turn into development mode, <code>'dev' => false,</code> toggles production. These are booleans, so no need for quotes on the values. 
                 </p>

                <p>Just below the config directory is the <code>public</code> directory. Here you put the resources that you need for your applicaiton. These include the <code>css, javascript</code> and <code>images</code>
                To load the content in here to your from end view files you will use a <code>Url::assets()</code> helper class, by passing in the name directory and name of the file as a first parameter to the method.
                For instance, let's say you want to load your bootstrap.min.css file in you header file, and say your bootstrap file lies in this folder <code>public/css/bootstrap.min.css</code>, you will call the helper class as follows,
                <code>Url::assets('css/bootstrap.min.css')</code>. You will learn more of these in the <code>Helpers</code> class sections </p>
                <p>Next is the <code>system</code> directory.This is the core of the Gliver MVC Framework. All the code upon which this framework is built reside here. There is nothing for you to configure or touch here. However, 
                you can browse and appreciate the directory structure if you will to. Do not make any changes though as any changes made here would be overriden when you update the framework, plus you might make modifications 
                that could ground you application and fail to be able to fix it..</p>
                <p>Last is the  <code>vendor</code> directory. Gliver has the ability to fetch code from the <code>packagist</code> repository and install them for use in this framework. So if you have some decoupled libraries that you would wanna use
                in your application, and it exists at <a href="https://packagist.org/"> packagist</a>, you can do a <a href="https://getcomposer.org/"><code>composer install</code></a> and it would be right here! This is ideal for those who would like to contribute by writing packages for use by the gliver framework, 
                . Again in here you don't wanna edit anything.<br/>
                In order to add a package for installation using composer, you add the package as a dependancy on the <code>composer.json</code> file in your root directory as follows:
<pre>
{
    "require": {
        "vendor/package": "1.3.2",
        "vendor/package2": "1.*",
        "vendor/package3": "^2.0.3"
    }
}                
</pre>
                after this you can run a <code>php composer.phar install</code> to download package contents. Note that you need to have composer installed on your local computer if you would like this to work. There is a more in depth guide on how to use composer with Gliver in the tutorials sections.
                </p>


                <h3 id="release_notes" class="text-danger">Release Notes</h3>
                
                <p>This is the official release of the Gliver mvc version 0.0.1. Gliver MVC is, however, under active developemnt and updates are being pushed to the <a href="https://github.com/gliver-mvc/gliver">repository</a> every day. However, the syntax defined in version 0.0.1 will not change, only functionlity will be added. 
                So if you have already learnt the syntax with this version, you are good to go, nothing would change, only for better functionality. However, you might want to keep checking out for new updates, 
                so remember to subscribe to our newsletter so that we can keep you informed of every advanced made or inline. The updates would only include the very cool features that you have been waiting for...you don't want to be left out.</p>           

                <h3 id="upgrade_guide" class="text-danger">Upgrade Guide</h3>
                
                    <p>Things can only always get better. If you realize that we have updates and there are some really cool 
                    features that you like in the updates, you can always pull the new code and put you application on steriods. At the moment, for you to 
                    pull down updates to your application, you need to <a href="https://github.com/gliver-mvc/gliver/archive/master.zip"> download </a> the framework extract and replace only the content of the system directory
                    with the contents of the system directory in your application. You thought there was more to it? We are sorry, that's all, your framework is now  up to date. Enjoy the new funcitonality.
                    We are working on a way to be able to update your whole application by a simple composer update statement on the command line, this is more reason you wanna subscribe to our newsletter, so that you be the first to know when
                    this is done so that you can begin using it right away. </p>


                <h3 id="contribution_guide" class="text-danger">Contribution Guide</h3>
                


                <p>We are really grateful you are amazed by this wonderful light weight framework and would like to contribute code to make it better. We can't wait to see you getting started! Contribution of code is as easy. You need to bundle you code in packages
                , use psr-0 or psr-4 namespacing and publish then on the <a href="https://packagist.org/">packagist repository</a>, you can then install them via composer. With this you can contribute to the code of the application as well. There is a more in depth guide on contributing code in the tutorials sections. Be sure to check it out.
                . We welcome your contributions as the main drive for this framework is to develop an active communicaty around this code base. To contribute just folk this repository and fire on... Once we have some cool features in, do a pull request and we will be in touch to get the code merged in a reasonable time</p>     
        


            </div>

        </div>

    </div>

@include('footer')
