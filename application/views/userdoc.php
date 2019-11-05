<div class="jumbotron">
            <h1>Gliver Documentation</h1>

            <br><br>

              <p>The Gliver MVC Framework is for PHP developers, both new and seasoned to write cutting edge web applicaitions, APIs, Web Services, Software Back ends and much more just in a matter of minutes. 

              <p>This framework is inspired by a community of developers who needed a light weight framework with a relatively faster execution time on the server as compared to other frameworks based on <a href="http://php.net/releases/5_4_0.php"> <strong>PHP >=5.4</strong> </a>.</p>

              <p>Gliver comes with a built in templating engine that removes all the monotonous repeated php tags, therefore being less scary for a front end developer with almost no learning curve</p>
                       
            <br>
            <p>The project is hosted on <a class="projectLinks" href="https://github.com/gliverphp/gliver" target="_blank">Github</a> and is available for use under the <a class="projectLinks" href="https://github.com/gliverphp/gliver/blob/master/LICENSE" target="_blank">MIT software license</a>.  You can report bugs and discuss features on the <a href="https://github.com/gliverphp/gliver/issues" target="_blank">GitHub issues page</a>, or send tweets to <a href="https://twitter.com/gliverframework" target="_blank">@GliverFramework</a>.
            </p>
            <p><a class="btn btn-primary btn-lg" href="https://github.com/gliverphp/gliver" target="_blank">Fork on Github »</a></p>
          </div>


                <h2>Installation</h2>


                <h3 >System Requirements</h3>

                <p class="well">Gliver Framework requires PHP version 5.4 or greater to run. In order to avoid broken functionality or code and opening security holes in your application, upgrade to version >=5.4.</p>

                <h3>Downloading Gliver</h3>

                <p class="well">One option of installing Gliver framework is to <a href="https://github.com/gliver-mvc/gliver/archive/master.zip">download the source code</a>  directly to your local hard drive and run it!</p>

                <p>This will always give you the latest stable version of Gliver. Most of the time the source has the most upto date code, but to ensure you are using the latest versions of all the 
                    dependencies and Helper classes, you can run a <code>composer update</code> from the root of your installation to get the framework core to latest stable distribution. </p>

                <p>Once you download or install Gliver, run the folder itself in this manner <code>localhost/gliver</code> 
                </p>

                <h3>Via Composer</h3>

                <p>You can as well install Gliver framework directly using <span class="text-danger"> Composer </span> without having to manually download anything! Composer is a package management tool for PHP applications. Note that you will need to have composer installed on your computer in order to do this installation with success. For a more detailed instruction on how to install composer, look at this <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">documentation</a> </p> 

                <p>Create an installation of Gliver using the <span class="text-danger">create-project</span> command, specifying the Gliver framework name on packagist and the name of the directory in which to install Gliver</p>
                <p> <code>composer create-project gliver/core myapp</code> </p>
                <p>This command would download the latest stable version of Gliver framework and all dependencies and install them in the directory <span class="text-danger">myapp</span>. You can change the name of the directory to your directory of choice, or better still rename it after installation... This might be the best way to install Gliver!</p>               


                <h3>Upgrading from previous versions</h3>

                <p>The Gliver core code resides in the <span class="text-danger">system</span> directory. Once you application is up and running and there are updates that you would like to incorporate into your application download the Gliver framework core and replace the contents of the <span class="text-danger">system</span> directory with the contents of the system directory freshly downloaded, forget about the rest of the code: that's all you need for this purpose! Thought there was more work to it? No. You are done! </p>
                <p>If you would like to fetch updates for the <span class="text-danger">Gliverich console</span> commands run <code>composer update</code> </p>
 

                <h3>Troubleshooting</h3>

                <p>Something not working right might mean a number of things with either your application or your server environment, assuming your server is up and running...</p>
                <ul>

                <li>Error display is turned off by default, but every error message is always logged into a log file located here <code>bin/logs/error.log</code>. You can however change this by setting 
                    <span class="text-danger"> dev</span> environment to true in the <span class="text-danger">config.php</span> file.</li>
                <li>When running your installation, only specify the installation directory, don't mention the public folder. If this gives you a blank page : check that your server software is up and running, blank page still? Check that the directory name you specified
                    is the correct name of your installation directory, blank page still? Check that you have enabled <span class="text-danger">mode rewrite rule</span> in your php.ini file, no success Roger? Check the error message in your error.log file found here <code>bin/logs/error.log</code>.
                     Nothing in your error log file, gotcha! Enable write permission in your installation directory and there you go! </li>
                </ul>






                  <h2>Getting Started</h2>

                  <h3>Gliver at a glance</h3>

                  <h4 id="glance"></h4>
            
                  <p>Gliver: An extensible light weight Application framework. Gliver is an application framework based on PHP <a href="http://php.net/ChangeLog-5.php#5.6.16">v5.6</a>. It is an essential tool for PHP web developers who want easy to use yet powerful framework. It is specially designed for each level of PHP developer. Novice PHP developers can benefit from this by simple installation and start developing cutting edge applications. It is equally useful for middle level to advanced programmers with very useful Helper classes. </p>
                  <p>Its ORM based database architecture is beneficial for developing scalable and complex Large scale applications. Memcache is also supported in this framework. Developers who do not want to use structured database have freedom to use NoSQL database like MongoDB.</p>
        
                  <h3>Supported Features</h3>
            
                  <p>What is unique about Gliver framework so that it stands out?</p>

                  <ul>
                  <li>Gliver is very lightweight with a very small footprint, so your server memory is optmally utilized.</li>
                  <li>Configuration is very simple. You just specify all in array format, something you are already familiar with and can be changed any time as you feel like.</li>
                  <li>With the use of namespaces in your controllers, you can have as many controllers with similar names without any name conflict.</li>
                  <li>Defined routes, specified in an array format, makes route mapping very fast thereby reducing your request response time significantly.</li>
                  <li>PHP code loitered in the views files? Not looking nice. Glade templating out of the box, beatiful syntax as substitute for PHP code.</li>
                  <li>You deal with databases and you know writing query strings is not where you want to spend your time. With Intuitive ORM Model class - all these automated Rodger!</li>
                  <li>Having to keep memorizing your directory structure in order to load views files cannot help but introduce errors because you are human and will definitely forget - look, Express View loader comes to your help, all automated! Sounds cool huh?</li>
                  <li>So yesterday you wrote that sweet user management library, and now you thinking of Gliver and you wonder, what about your library of code! It's not going to be any distance from you. Either submit it as a package
                      to the packagist repository then intall it into Gliver via <code>Composer</code> as a dependency or copy and paste that code into the <code>libraries</code> directory and enjoy functionality at full speed...</li>
                  <li>With advanced rules in our .htaccess file, you can only have but pretty clean urls. </li>
                  <li>Helper Classes for all general purpose tasks like Form building, Calendar,Captcha, Cart, Directory, Email, Pagination, Security, Unit testing...you needed more? Talk about it <a target="_target" href="https://github.com/gliver-mvc/gliver/issues">here</a>  and it will be up tomorrow morning.</li>
                 </ul>
               
                  <h3 >Application Flowchart</h3>
                  <div>
                      <img class="img img-resposive" src="{{ Url::assets('img/gliverarch.png') }}" alt="gliver application flow chart" width="100%" />
                  </div>

                  <h3>Configuration</h3>

                  <p>Configuring your application is the fun part after installing Gliver - and i bet you wanna do this before you begin writing any code. Configuring Gliver comes in different flavors depending on what you would like to configure.</p>
            
                  <p class="alert alert-success">Note that the configutation files are always autoloaded by default and so do not require any special action from you - all you need to do is specify the values against the keys in the respective files. Do not modify key names as these are used to access the values that you specify as is.</p>

                  <p>There are four configuration files where you can specify options for your application. These options are always available throughout the entire application and can be accessed from anywhere in your application using the right classes. Include your configuration in either <span class="text-success">config.php, database.php or constants.php</span> </p>
            
                  <h4>Config.php</h4>  

                  <p>This file contains the general configuration options of your application. The config.php resides in the <code>config/config.php</code> directory. Comments appear before every config element to describe the purpose of the option. Most of the options are set to defaults with the associated datatype. So you can set the config options to your value of choice. Always be sure of what you are doing before you make changes to configuration. Not all options in this file are alterable, for example, do not alter the root option.  </p> 

                  <p>Among other options, the values you can set in this file include application author, copyright, license, version... e.t.c - these values are automatically used to fill in metadata when generating classes using the <span class="text-primary">gliverich console</span>  terminal commands. </p>

                  <p>Set the value of <code>dev => true</code> if your application is running in development mode and make sure to set this to <code>false</code> as soon as you deploy to production. All that this would do is to ensure that error messages are not shown to the user when in production mode in order to avoid exposing your server directory structure to that malicious jerk.</p>
            
                  <p>An important thing you want to ensure you do before you leave this file is to set your default controller and action. These are key as they will be loaded as your homepage i.e. whenever you access you application without specifying the controller name and action to load - something like this <code>http://localhost/gliver</code></p>

                  <p>If you would like to make take advantage of caching technology, a feature Gliver proudly supports, then this is the place you want to define settings for accessing your Memcached server or Redis for that matter...</p>
            
                  <h4>Database.php</h4>  

                  <p>This is sister to Config.php as they reside in the same directory here <code>config/database.php</code> </p>
                  <p>The database configuration is separated from the general configuration as we intend to support as many databases as we can imagine and would to we would like to set these apart from the rest so as to avoid confusion - noting that database settings changed frequently (as soon as you realize your password is leaked!).</p>
                  <p>In the database configuration, you can specify the settings for any supported database then specify the default database you would like the application to alwasy connect to. As soon as you change your mind and would like to use a different database, just set it as the default and that's all you need - all database database connections henceforth would default to you new set default. Ensure to enclose all you database setting values within single or double quotes. As well you do not need to modify the key names or add to any. They are already good to go.</p>
            
                  <h4>Constants.php</h4>  

                  <p>Here you can define all the values that you will need throughout all your application. Defining constants here would follow the same rules you observe when defining constants in PHP. Once you define your contants here, you can access them from anywhere in your application by using the constant name.</p>
                  <p>You define constants of in this manner <code>define('NETWORK_ID', 'gliver');</code> then you can access them from anywhere in this manner <code> echo NETWORK_ID; </code> </p>

 
                  <h3>Routing</h3>

                  <p>The routing feature enables mapping of defined keywords to particular controllers/action pairs. Routing also enabels you to pass url parameters to your controllers which it parses and includes as part of the Input parameters and you access them via the Input helper class. The routing class gives much flexibility so that you can map a defined route to a controller, a controller method pair and optionally name the parameters that you expect to recieve along with the Url request</p>

                  <p>Defined routes are set in the <span class="text-success">routes.php</span> file that resides in the <code>application/routes.php</code> directory. The routing class would then get the contents of this file at execution time and parse the route accordingly. Defining routes is, however, optional as you can decide to call your controllers directly from the url and pass unamed parameters - accessing them using numbered indexes.</p>
                  <p>The comments in the routes.php file give a pretty self explanatory example of how to define routes, but let's take sometime and look at this into details</p>
                  <p class="alert alert-info">Remember that the routes.php file is an array and therefore should maintain a valid array format.</p>
                  <p>First be able to locate the routes.php file from within the <code>application/</code> directory then follow along...</p>
<pre>
<code data-language="php">
/**
 *The admin users route.This route loads the home controller and getUser() method
 *@param int $id The user id for which to load profile
 *@param string $mode Whether to load profile in edit or view mode
 */
'adminusers' => 'Home@getUser/id/mode',
/**
 *This routes loads the controller that display blog posts
 *@param string $category The category from which to get blog content
 *@param int $id The id of the post to load in this category
 */
 'blog' => 'Load/category/id',
</code>
</pre>

                  <p>Say you have a controller class named <span class="text-info">LoadController</span> that you would like to invoke using the word <span class="text-info">blog</span>. In order to achieve this you will define this name value pair in the routes file as <code>"blog" => "Load",</code> - this simply means that word blog maps to the LoadController class, so that when you access the LoadController class from the url you use the word blog in this manner <code>http://localhost/gliver/blog</code>. May be you have many articles so that you have put them into categories, and that each blog has a unique id. Inorder to load the right article, you  might wanna pass along with the route name the blog category and the particular article id to load as part of the url. To make this even better, you can define the names with which to access the values of these parameters in your routes so that your work is made even easier. You do this by separating the controller name by a forward slash and then specifying the names of the parameters - each separated with a forward slash without any whitespace as so <code>"blog"=>"Load/category/id"</code>. A sampe url would be this <code>http://localhost/gliver/blog/pages/electronics/45</code></p>

                  <p>The above is rather general purpose. A case in study is where you would like to be more specific and define a route that maps to a controller class with the particular method to be executed. Sounds right? Yeah. Specifying a controller and method pair involves separating the controller class name with an @ symbol. We have a <span class="text-info">HomeController</span> class that among other things, helps us load user profiles for view by the account admin. We can define an adminusers routes that maps to this controller and to be particular, the getUser() method in order to assist in loading user profiles. Look at this <code>"adminusers"=>"Home@getUser"</code>. Of course each user on your system has a unique indentifier - this could be a unique integer value or id. Besides, you would like to load different pages for editing mode or for just viewing - sounds complex now? Things never got easier.... You can pass all these parameters in the url and give them names with which to access them in this manner <code>"adminusers"=>"Home@getUser/id/mode"</code>. <br> Here is a sample url   <code>http://localhost/gliver/adminusers/4957450723/edit</code> </p>
                  <p>You may not just want to map a route to a controller alone, but go ahead and also specify a method to be executed along with the controller whenever that route is accessed in the url. We still gat you covered in this - in order to specify a controller method pair you check below... We have our <span class="text-info">HomeController</span> class that we would like ti invoke by calling 'adminhome' in the url.</p>
                  <div class="alert alert-info">
                  NOTE:
                  <ul>
                  <li>If you specify a route to map to a controller without specifying a particular method to be excecuted, then you need to supply the method name as the second parameter in the url, if not the default method set in your config.php would 
                  be excecuted whenever this route is accessed.</li>
                  <li>If you define named url parameters in routes file for a particular route, any additional parameters passed along with the url would be discarded and only the named values would to available.</li>
                  <li>If you don't name your url parameters, you can access unlimited number of url parameters in the order in which they appear in the url by using indexes begining from 0...onwards.</li>
                  </ul>

                  </div>

                  <p>If you would like to define a route for a controller that is within a subdirectory, e.g <code>application/controllers/Admin/HomeController</code>, you specify the namespace in this manner <span class="text-primary">"adminusers"=>"Admin\Home@getUser/id/mode</span>.</p>
                
                  <h3 id="input" class="text-danger">Requests</h3>

                  <p>What would be the purpose of a framework if it were not able to handle requests? Proper and secure request handling is key to a strong framework that wants to be efficient and at the same time safeguard your application and server resources. </p>
                  <p>A request in Gliver is invoked by accessing a url, for example <code>http://localhost/gliver</code>. This would look rather simple but there is much that goes in here Rodger!</p>
                  <p>For the security of our application, excecutable PHP code does not reside in the root of the application. With the use of rules in our .htaccess file in the root directory, all requests are re-routed into the public directory. The second .htaccess file in the public directory would check for the nature of this request. If this is a request for an asset file i.e. a css, js, img files it would return the resource. If not, it would direct this request to the index.php file - thereby infering that this would be a request to load a controller. The controller is the entry point into your application.</p>
                  <p>This means that we would then invoke the routing class. This class would first check and disarm the request url against XXS(Cross Site Scripting), as a security measure, before going ahead to parse the url into controller/method pairs.</p>
                  <p>When making a request Gliver enables you to send with the request data in the form of GET, POST and URL parameters. All these you access using the <span class="text-primary">Input</span> helper class. More would be discussed about the Input helper class in the helpers section but you will need the parameter name in order to access its value. For example, if you submitted a form with field of name email in it, you will access the value of the email parameter in this manner <code>Input::get('email')</code>. </p>
                  <p>If you defined a route in this manner <code>'adminusers' => 'Home@getUser/id/mode',</code> and you have a url of this nature <code>http://localhost/gliver/adminusers/4957450723/edit</code>, you access the value of the id parameter in this manner <code>Input::get('id')</code> - which would return <span class="text-primary">4957450723</span>.</p>
                  <p class="alert alert-info">Gliver framework would only help you map a request to a controller and method pair to excecute passing along the parameters sent by request, besides securing your application from XXS. However, the rest of the logic on how, what and when your request is handled is code that you will have to write yourself.</p>
            
                  <p>Gliver framework can detect the request method - which can either be GET or POST. With this feature comes a cool ability of Gliver to load a controller method based on your request method. This means that you can use the same method name in different request methods. For example:</p>
                  <p>Say you have a controller class named <span class="text-primary">LoginController</span> and would like to use the same method name for loading a login form and at the same time processing user login information - you will do this as below.</p>
                  <p>Create two methods named <span class="text-primary">getLogin()</span> and <span class="text-primary">postLogin()</span>. You will access both methods with the same url as <code>http://localhost/gliver/login/login</code>. Accessing this url in your address bar will load the user login form as the request method would be GET and the <span class="text-primary">getLogin</span> method would be excecuted. Once the user fills up the form, you specify in your action attribute the same url for form submission as this <code>&lt;form action="http://localhost/gliver/login/login" method="post" ></code>. When the user then submits the form, Gliver would detect this as a POST request and therefore submit your form to the <span class="text-primary">postLogin</span> method of the LoginController. So, there you go! Using the same method name to excecute different methods depening on the request method.</p>

                  <h3 id="views" class="text-danger">Responses</h3>

                  <p>Whenever a request is made, there is need for a response - or their might be no point of the request.</p>
                  <p>After processing a url request, it's time to respond back to the user and let them know what you did, the outcome of it and their next steps.... Most, if not all, responses are handled with the <span class="text-primary">View</span> helper class.
                  The result of the request could be loading a view file, responding with json data, csv, pdf and others options as you may wish. You will look more on how to load and use the View helper class in the helpers section but we will show an example of how to load 
                  a view file using the View helper class.</p>
                  <p>Place all your view files in the <code>application/views/</code> directory. Gliver has glade templating inbuilt and is enabled by default and all view files must have a <span class="text-info">.glade.php</span> extension. </p>
                  <p>Say you have a users.glade.php view file under the views/home directory so that your dir structure is <code>application/views/home/users.glade.php</code>, you 
                      will load the users.glade.php view file in this manner <code>View::render('home/users')</code>.</p>
                  <p>If you would like to pass data to be used by your view files, pass it as the second parameter in array format as <code>View::render('home/users', array('title'=>'Gliver - Official Site'))</code>, you will then access this variable in your view file as <span class="text-success">$title</span>.</p>        
                   
                  <h3 id="errors" class="text-danger">Error Handling</h3>

                  <p>Error handling in Gliver comes in two flavors - either through PHP errors or Exceptions.</p>
                  <p>Most likely when writing, testing and deploying your application you are going to break something - you are human, right? Informative error information is a very quick and effective way to troubleshoot and fix the bug. All errors encoutered in your application are logged into the error.log file found in the <code>bin/logs/error.log</code> directory. However, you can also choose to display these errors to the screen - a good idea if you are working in development mode to mend things a little faster. </p>

                  <p>The setting on whether to display or hide and log error messages is defined in the config.php file where you set <code>"dev"=>true,</code> when working in a development environment - this makes error messages to be displayed to the screen. Setting <code>"dev"=>false,</code> would turn off error display on the screen, so that whenever there is an error message it is logged in the log file and a template error page is shown in the browser. This is good for production mode to avoid exposing your application or server directory structure to a malicious jerk.</p>
            

                  <p>You might however want to create custom error messages that might be more sensible to your users - who may not be techies...</p>
                  <p>In that case, therefore, you might want to consider using <span class="text-info">Exceptions</span>. You might want to use your exceptions within a try...catch block, but that is entrely up-to you. Create your own Exception class by extending the <span class="text-primary">Exceptions/BaseExceptionClass</span> so that you enjoy all the built in functionality in the exception class already. In order to make use of this class, throw exceptions by passing the custom error message in this manner <code>throw new BaseExceptionClass("...your error message here...");</code> then catch this in a block 
                  and display the error message by calling the errorShow() method like so <code>$BaseExceptionClassInstance->errorShow()</code>.</p>




                  <h2>Brief Tour</h2>

                  <h3>Controllers</h3>

                  <p>Controllers form the entry point into your application. It is from here that you can call your model classes, libraries and load the view files, among other things... </p>
<pre>
<code data-language="php">
&lt;?php namespace Controllers;

/**
 *This class loads the application homepage
 *@author Geoffrey Okongo &lt;code@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Controllers
 *@package Controllers\Home
 *@link https://github.com/gliverphp/gliver
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

use Helpers\View\View;

class HomeController extendsBaseController {

    /**
     *This method loads the preface page.
     *@param null
     *@return void
     */
    public function getIndex()
    {
        //get the ending date today
        View::render('home/index');

    } 

}  
</code>
</pre>         

            
                  <p>Controllers reside in the <code>application/controllers/</code> directory - and are always autoloaded as need be, so all you need is define the code to be executed and the excecution would proceed seamlessly. When defining your controllers, you wanna ensure you stick to this pattern:</p>
                  <ul>
                  <li>The file that contains your controller class must reside within the <code>application/controllers</code> directory or subdirectory</li>
                  <li>One file can only contain one controller class.</li>
                  <li>Controller class files must have a <span class="text-info">.php</span> file extension. The name of the controller class must be the same as the name of the file: <span class="text-info">HomeController</span> class should be in <span class="text-info">HomeController.php</span>. </li>
                  <li>Controller class and file names must have the 'Controller' suffix as <span class="text-info">HomeController</span>.</li>
                  <li>When accessing controllers from a url, you only specify the controller name without the 'Controller' suffix as <span class="text-danger">http://localhost/gliver/home</span></li>
                  <li>All controllers classes must extend the <span class="text-primary">BaseController</span> class.</li>
                  <li>You want to ensure you namespace your controllers, so that they will be autoloaded as expected. If your controller class resides in the <span class="text-warning">application/controllers</span> directory 
                      then use <span class="text-primary">namespace Controllers;</span> else if your controller resides within a subdirectory like 'Admin' as <span class="text-warning">application/controllers/Admin</span> use <span class="text-primary">namespace Controllers\Admin;</span> - this follows psr-4 namespace pattern.</li>
                  <li>You cannot create static methods or properties in your controllers.</li>
                  </ul>

                  <p class="alert alert-info">Use PHPDoc commenting style to add metadata to your class - as part of your documentation. This would help you and other developers looking at your code understand the purpose of your controller 
                      classes, methods and expected behavior of the controllers.</p>

                  <p>In order to use a class inside of your controller class, use the <span class="text-primary">use</span> statement with the full namespace of the class as <span class="text-primary">use Helpers\View\View;</span> to load 
                    the view helper class then access it as <span class="text-primary">View::render('home/users');</span></p>
                  <p>When defining your methods in your controllers, you can choose to let all your methods be unique or you can use the same method name to excecute different methods based on the request method used. 
                    There are two request methods that would be detected by Gliver framework : GET and POST methods. </p>    
                  <p>With this feature comes a cool ability of Gliver to load a controller method based on your request method. 
                      This means that you can use the same method name in different request methods. For example:</p>
                  <p>Say you have a controller class named <span class="text-primary">LoginController</span> and would like to use the same method name for loading a login form and at the same time processing user login information - you will do this as below.</p>
                  <p>Create two methods named <span class="text-primary">getLogin()</span> and <span class="text-primary">postLogin()</span>. You will access both methods with the same url as <code>http://localhost/gliver/login/login</code>. Accessing this url in your address bar will load the user login form as the request method would be GET and the <span class="text-primary">getLogin</span> method would be excecuted. Once the user fills up the form, you specify in your action attribute the same url for form submission as this <code>&lt;form action="http://localhost/gliver/login/login" method="post" ></code>. When the user then submits the form, Gliver would detect this as a POST request and therefore submit your form to the <span class="text-primary">postLogin</span> method of the LoginController. So, there you go! Using the same method name to excecute different methods depening on the request method.</p>




                <h3>Views</h3>


                <p>The view class enables you to invoke a response to the url request. This can in the form of loading view files to provide a graphical interface to enable your users to interact with your application or set header for sending pdf, json, xml responses among others...</p>

                <p>You call the view class from the controller by first requiring it using the statement <code>use Helpers\View\View;</code> after which you access the View class and methods directly without creating an instance. For instance, this is how you will load a view file <code>View::render('home/users', $data);</code> More methods available in the View class are described in the Helpers section</p>

                <p class="alert alert-info">All view files are located in the <span class="text-info">application/views</span> directory.</p>
            
                <p>If you put your view files in a subdirectory under the views directory, you access them by separating the directories with a forward slash. Say you have put your index.glade.php view file in your home subdirectory under the views folder - in order to load this view from the view class, you specify <span class="text-warning">View::render('home/index')</span>.</p>

                <p>Most of the time when you are loading your views, you may need to pass variables along so that their values are injected into the views. This is completely in built in Gliver. All you need to do is pass the variables in an array and then access them using the array key.</p>

                <p>Say we would like to dynamically get the site title from the controller and use it in our view file in this manner <code>&lt;title>&lt;?php echo $title; ?>&lt;/title></code>. Create a $data array and store the value of the title as a key in the array as <code>$data['title'] = "Gliver - Official Site";</code>, then pass this as a second parameter to the View::render() method as <code>View::render('home/index', $data);</code></p>

                <h3>Templating</h3>

                <p>Out of the box, Gliver has an in built templating engine called glade. This engine is rather simple and has been kept light-weight for the purpose of faster view file parsing - so there are no complicated methods, only the most commonly repeated actions in view files have been abstracted.</p>

                <p>All view files should have a <span class="text-primary">.glade.php</span> extension in order to be parsed by the View loader class. When specifying the view file though, you do not need to add the file extension as this is enabled by default. Say you have a file named <span class="text-success">index.glade.php</span> in your root views directory. In order to load this view file from the View class you will use this syntax <code>View::render('index');</code> and this would definitely load the view file at <code>application/views/index.glade.php</code>.</p>

                <p>Glade basically has the following template methods that you can use in your view files</p>

                <h4>Echo </h4>

                <p>In regular PHP in order to echo a string to the browser, you'd open and close PHP tags then use the echo statement in between the tags. You have more than 5 variables to echo in your view files and you are already wishing there was an alternative. Look at this <code>&lt;?php echo $username; ?></code>, ugly? Huh? Let's make it elegant -> <code><?php echo '{'; ?>{$username}}</code>. That's all you need to do to print out the value of a variable to the browser in glade template files. <code>&lt;p><?php echo '{'; ?>{$username}}&lt;/p></code></p>

                <h4><?php echo "@";?>include </h4>

                <p>Subdeviding your view files into parts saves you time when you need to make updates. Say you have 100 view files that have the same content in the header and footer. You might want to ensure that you separate the header and footer and put them in a place where all the other view files refrence them. So if you need to make a change to the footer content, you just update one file - the footer, and all the other view files would be up-to date, as opposed to if you would have had to iterate through all the 100 views files updating header and footer content.</p>
            
                <p>Glade enables you to include sub-views into your view file using the <span class="text-info">@<?php echo 'include()';?></span> statement, passing the name of the file to include as the first parameter.</p>

                <p>Say you have a header.glade.php and footer file in your home directory and would like to pull it into your home/users page. </p>

<pre>
<code data-language="html">
{{'@'}}include('home/header')
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-lg-12"&gt;

        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

{{'@'}}include('home/footer')
</code>
</pre>

                <h4>{{"@"}}if...{{"@"}}endif </h4>
<pre class="bg-success">
<?php echo "@";?>if(isset($email) AND ! empty($email))
  &lt;p>Your email address is <?php echo "{";?>{$email}}&lt;/p>
<?php echo "@";?>endif
</pre>

            <h4 class="text-primary"><?php echo "@";?>if...<?php echo "@";?>else...<?php echo "@";?>endif </h4>
<pre class="bg-success">
<?php echo "@";?>if(count($users) > 0)
  &lt;p>Registered users(<?php echo "{";?>{count($users)}})&lt;/p>
<?php echo "@";?>else
  &lt;p>There are no registered users yet!&lt;/p>
<?php echo "@";?>endif
</pre>

            <h4 class="text-primary"><?php echo "@";?>if...<?php echo "@";?>elseif...<?php echo "@";?>else...<?php echo "@";?>endif </h4>
<pre class="bg-success">
<?php echo "@";?>if($score > 80) 
  &lt;p>Grade : A  Remarks : Excellent&lt;/p>
<?php echo "@";?>elseif($score > 60)
  &lt;p>Grade : B  Remarks : Good &lt;/p>
<?php echo "@";?>else
  &lt;p>Grade : C  Remarks : Fair&lt;/p>
<?php echo "@";?>endif
</pre>

            <h4 class="text-primary"><?php echo "@";?>while...<?php echo "@";?>endwhile </h4>
<pre class="bg-success">
<?php echo "@";?>while($number <= 10)
  &lt;p>Number is <?php echo "{";?>{$number}}&lt;/p>
  ....do something to terminate loop
<?php echo "@";?>endwhile
</pre>

            <h4 class="text-primary"><?php echo "@";?>for...<?php echo "@";?>endfor </h4>
<pre class="bg-success">
<?php echo "@";?>for($itr = 1; $itr < 10; $itr++)
  &lt;p>This is paragraph number <?php echo "{";?>{$itr}} &lt;/p>
<?php echo "@";?>endfor
</pre>

            <h4 class="text-primary"><?php echo "@";?>foreach...<?php echo "@";?>endforeach</h4>
<pre class="bg-success">
<?php echo "@";?>foreach($users as $user)
  &lt;p>Name <?php echo "{";?>{$user['first_name']}} : Email : <?php echo "{";?>{$user['email_address']}}&lt;/p>
<?php echo "@";?>endforeach
</pre>

            <p></p>

            <h3 id="models" class="text-danger">Models</h3>

            <p>Models classes will help you handle database operations or API connection operations.</p>

            <p>All model classes reside in the <code>application/models</code> directory and must extend the <span class="text-primary">Model</span> class. This ensures acccess 
              to the already built in functionality of the model class.</p>

<pre>
<code data-language="php">
&lt;?php namespace Models;

/**
 *This models handles all user management datatabase operations
 *@author Geoffrey Bans &lt;code@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Models
 *@package Models\UsersModel
 *@link https://github.com/gliverphp/gliver
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

class UsersModel extends Model {

  /**
  *@var string The name of the table associated with this model
  */
  protected static $table = 'users';

  /**
   *This method gets the records of all users from the database
   *
   *@param null
   *@return array The users data in an array format
   */
  public static function all()
  {
    //excecute query to return all users
    $users = static::Query()->from(self::$table)->all();

    //return the rows found
    return $users;

  }

}
</code>
</pre>

                <p class="alert alert-info">All methods of the Model class must be declared <span class="text-danger">static</span> in order to be accessible.</p>
                
                <p>When defining your Model classes, you wanna ensure you stick to this pattern:</p>
              <ul>
                <li>The file that contains your model class must reside within the <code>application/models</code> directory or subdirectory</li>
                <li>One file can only contain one model class.</li>
                <li>Model class files must have a <span class="text-info">.php</span> file extension. The name of the Model class must be the same as the name of the file: <span class="text-info">UsersModel</span> class should be in <span class="text-info">UsersModel.php</span>. </li>
                <li>Model classes and file names can optionally have the 'Model' suffix as <span class="text-info">UsersModel</span>.</li>
                <li>When accessing models classes specify the complete name without omiting the 'Model' suffix as <span class="text-danger">use Models\UsersModel;</span></li>
                <li>All model classes must extend the <span class="text-primary">Model</span> class.</li>
                <li>Ensure you namespace your models, so that they will be autoloaded as expected. If your model class resides within a subdirectory like 'Admin' as <span class="text-warning">application/models/Admin</span> use <span class="text-primary">namespace Models\Admin;</span> - this follows psr-4 namespace pattern.</li>
                <li>All methods and properties of the model class must be declared static and the model class methods and properties are accessed 
                  directly, without creating an instance of the model class by specifying the class name, the scope resolution operator and the property or method name as <span class="text-primary">UsersModel::all()</span> </li>
            </ul>

            <p>In order to use a model in your controllers, load the  model by use of the <span class="text-danger">use</span> keyword followed by the full namespace of the model. Say you have a model named <span class="text-primary">UsersModel</span> that resides within the Admin directory. 
              Besides, our model has a static method <code>getUser()</code> that fetches the details of a user from the database. For us to access this model in our HomeController class as do as :</p>
<pre class="bg-success">
<span class="text-danger">use Helpers\View\View;</span>
<span class="text-danger">use Models\Admin\UsersModel;</span>

class HomeController <span class="text-danger">extends</span> <span class="text-success">BaseController</span> {

  /**
   *This method loads user's profile page 
   *
   *<span class="text-danger">@param</span> null
   *<span class="text-danger">@return</span> void
   */
  <span class="text-danger">public </span><span class="text-primary">function</span> <span class="text-success">getUser()</span>
  {
    //call model to get user information, passing the $user_id
    <span class="text-primary">$data['user'] = UsersModel::getUser($user_id);</span>

    //load the users profile page
    <span class="text-primary">View</span>::render('home/user_profile', $data);

  }

}
</pre>     

      <p class="alert alert-info">For more information on how to make use of the Query Builder and ORM read more on the <a href="{{Url::link('home/database')}}" class="lead">Database</a> section of this documentation.</p>








<a href="{{Url::link('home/helpers')}}"><h1>Helpers</h1></a><br>

                <a href="{{Url::link('home/helpers#array')}}" class="lead">Array</a><br>
                <a href="{{Url::link('home/helpers#date')}}" class="lead">Date</a><br>
                <a href="{{Url::link('home/helpers#file')}}" class="lead">File</a><br>
                <a href="{{Url::link('home/helpers#form')}}" class="lead">Form</a><br>
                <a href="{{Url::link('home/helpers#input')}}" class="lead">Input</a><br>
                <a href="{{Url::link('home/helpers#path')}}" class="lead">Path</a><br>
                <a href="{{Url::link('home/helpers#url')}}" class="lead">Url</a><br>
                <a href="{{Url::link('home/helpers#session')}}" class="lead">Session</a><br>
                <a href="{{Url::link('home/helpers#upload')}}" class="lead">Upload</a><br>
                <a href="{{Url::link('home/helpers#redirect')}}" class="lead">Redirect</a><br>

        <br><br>
        <p class="alert alert-info">You only need to load the Helper classes when using them from your controllers, models or libraries. However, in the view files the helper classes are automatically loaded using the alias names specified in the <span class="text-info">config.php</span>. <br>
            All helper classes are accessed statically so you do not need to create an instance to access the methods. An attempt to create an instance using the <span class="text-danger">new</span> keyword would generate an error! <br>
            In order to access a helper method specify the helper class name, the scope resolution operator and then the name of the method as <span class="text-danger">ArrayHelper::parts()</span>.</p>
        <p>You load the Helper classes from any class by using the use statement with the full namespace then accessing it with the Helper class name. You can as well choose to alias the classname to a name of your choice as <span class="text-danger">use Helpers\ArrayHelper\ArrayHelper as ArrayClass;</span> and then use the ArrayClass to access all the array helper methods.</p>

        <p class="text-danger">Example</p>

<pre class="bg-success">
&lt;?php namespace Controllers;

use Helpers\ArrayHelper\ArrayHelper;

class HomeController extends BaseController {

    public function getProfile()
    {

        //input array
        $names_array = array(
            0 => 'Scott',
            1 => 'Mendoza',
            2 => 'Stuart'
        );

        $names_string  = ArrayHelper::join(', ', $names_array)->get();

        //the final value of $names_string becomes
        $names_string = 'Scott, Mendoza, Stuart';

        ...
    }   
</pre>

        <h2 id="array" class="text-danger">Array</h2>

        <p>The ArrayHelper class enables you to create arrays out of string and manipulate arrays. This class allows for method chaining so that you can chain all the 
            methods you would like to use in one method call and get the final result returned.</p>
        <p>You can load the ArrayHelper class from any class by using the use statement with the full namespace then accessing it with the ArrayHelper name as <span class="text-danger">use Helpers\ArrayHelper\ArrayHelper;</span> 
            You can as well choose to alias the classname to a name of your choice as <span class="text-danger">use Helpers\ArrayHelper\ArrayHelper as ArrayClass;</span> and then use the ArrayClass to access all the array helper methods.</p>



        <p>You only need to load the Helper classes when using them from your controllers, models or libraries. However, in the view files the helper classes are automatically loaded using the alias names specified in the <span class="text-info">config.php</span>.</p>
        <p>Let's look at some of the methods that you can safely call with the ArrayHelper class.</p>


        <h3 class="text-info">ArrayHelper::parts()</h3>

        <p>This method splits a string into a numerically indexed array depending on the delimiter provided.</p>
        <p>The parts() method expects three parameters in this order <br> <code>ArrayHelper::parts($delimiter = null, $string = null, $limit = null)->get()</code>.</p>
        <p>The <span class="text-info">$delimtier</span> is the character(s) to use as a separator for exploding the input string into an array. </p>
        <p>THe <span class="text-info">$string</span> is the input string which is to be exploded into an array</p>
        <p>the <span class="text-info">$limit</span> is an integer value that limits the number of elements to return</p>

        <p class="text-danger">Example</p>
<pre class="bg-success">
$name_string  = "My name is Geoff";

$name_array = ArrayHelper::parts(' ', $name_string)->get();

//the final value of the $name_array is this
$name_array = array(
    0 => 'My',
    1 => 'name',
    2 => 'is',
    3 => 'Geoff'
);
</pre>

        <p>If we only wanted the first two elements to be returned, we would pass the third parameter as in integer of 2 and parts after 'name' would not be returned.</p>



        <h3 class="text-info">ArrayHelper::join()</h3>

        <p>This method joins an array into a string based on the joining parameter provided</p>
        <p>The ArrayHelper::join() method expects two parameters in this order <br> <code>ArrayHelper::join($glue = null, array $inputArray = null)->get()</code></p>
        <p><span class="text-info">$glue</span> The string to use to join the array elements into string</p>
        <p><span class="text-info">$array</span> The string which is to be exploded into an array</p>

        <p class="text-danger">Example</p>

<pre class="bg-success">
//input array
$names_array = array(
    0 => 'Scott',
    1 => 'Mendoza',
    2 => 'Stuart'
);

$names_string  = ArrayHelper::join(', ', $names_array)->get();

//the final value of $names_string becomes
$names_string = 'Scott, Mendoza, Stuart';
</pre>


        <h3 class="text-info">ArrayHelper::clean()</h3>

        <p>This method loops through the items of an array removing elements with empty or null values</p>
        <p>This method expects one parameter <br> <code>ArrayHelper::clean($array = null)->get()</code> 
        <p><code>$array</code> The array whose values are to be cleaned</p>

        <p class="text-danger">Example</p>
<pre class="bg-success">
//input array
$user_info = array(
    'name' => 'Bernhard Anaurdis',
    'gender' => 'male',
    'address' => null,
    'age' => 78
);

//remove empty and null values
$user_info = ArrayHelper::clean($user_info)->get();

//the final content of $user_info
$user_info = array(
    'name' => 'Bernhard Anaurdis',
    'gender' => 'male',
    'age' => 78
);
</pre>



        <h3 class="text-info">ArrayHelper::trim()</h3>

        <p>This method loops through array elements removing whitespaces from begining and ending of string element values</p>
        <p>This method expects one parameter as <code>ArrayHelper::trim($array = null)->get()</code></p>
        <p><code>$array</code> The input array to be trimmed of whitespace</p>

        <p class="text-danger">Example</p>

<pre class="bg-success">
//input array
$user_info = array(
    'name' => '  Sagini Obed  ',
    'status' => ' Will tell you    when   I see u',
    'address' => '4399  6th Street    Benton Harbor  '
);

//get trimmed user_info
$user_info = ArrayHelper::trim($user_info)->get();

//final content of $user_info
$user_info = array(
    'name' => 'Sagini Obed',
    'status' => 'Will tell you    when   I see u',
    'address' => '4399  6th Street    Benton Harbor'
);
</pre>



        <h3 class="text-info">ArrayHelper::flatten()</h3>


        <p>This method converts an associative array into a numerically indexed array</p>
        <p>This method expects two paramaters in this manner <br><code>ArrayHelper::flatten($array = null, $return = array())->get()</code></p>
        <p><code>$array</code> The array to flatten</p>
        <p><code>$return </code>The return array</p>


        <p class="text-danger">Example</p>
<pre class="bg-success">
//input array 
$array = array(
    'first_name' => 'Vince',
    'middle_name' => 'Fargo',
    'last_name' => 'Lombardi'
);

$array = ArrayHelper::flatten($array)->get();

//final content of the $array
$array = array(
    0 => 'Vince',
    1 => 'Fargo',
    2 => 'Lombardi'
);
</pre>



        <h3 class="text-info">ArrayHelper::first()</h3>


        <p>This method returns the first element in an array</p>
        <p>This method expects one argument in this manner <br> <code>ArrayHelper::first($array = null)->get()</code></p>
        <p><code>$array</code> The array whose first element is to be returned</p>

        <p class="text-danger">Example</p>


<pre class="bg-success">
//input array
$cities = array('New York', 'New Hamshire', 'New Jersy');

$city = ArrayHelper::first($cities)->get();

//content of city
$city = array('New York');
</pre>

        <h3 class="text-info">ArrayHelper::slice()</h3>


        <p>This method splits an array and returns the specified section.parts</p>
        <p>This method expects four parameters in this mannger <code>ArrayHelper::slice($inputArray = null, $offset = null,  = null, $preserveKeys = false)->get()</code></p>
        <p><code>$inputArray</code> The input array that is to be split and parts returned</p>
        <p><code>$offset</code> The int to specify where to start truncating from</p>
        <p><code>$length</code>  The int to specify the number of elements to return</p>
        <p><code>$preserveKeys</code> boolean true|false Set to true to preserver numberic keys, otherwise would be reindexed</p>


        <p class="text-danger">Example</p>

<pre class="bg-success">
//inpur array
$employee == array(
    0 => 'Software Engineer',
    1 => '$47,000',
    2 => 'Marcial Araujo',
    3 => '6th Street Benton Harbor, MI',
    4 => 'female'
);

$employee = ArrayHelper::slice($employee, 2)->get();

//final content of $employee
$employee = array(
    0 => 'Marcial Araujo',
    1 => '6th Street Benton Harbor, MI',
    2 => 'female'
);
</pre>


        <h3 class="text-info">ArrayHelper::KeyExists()</h3>


        <p>This method checks if an array key exists</p>
        <p>This method expects two parameters in this manner <br><code>ArrayHelper::KeyExists($key = null, array $inputArrayToSearch = null)->get()</code></p>
        <p><code>$key</code> The key to search for inthe input array</p>
        <p><code> $inputArrayToSearch</code> The array to check against</p>

        <p class="text-danger">Example</p>


<pre>


</pre>

        <h2 id="upload" class="text-danger">Upload</h2>

        <p>This helper class performs files uploads on the server.</p>
        <p>To load this class use <code>use Helpers\Upload\Upload;</code></p>

        <h3 class="text-info">Upload::doUpload()</h3>

        <p>The Upload helper class has one method which takes three parameters in this manner <br> <code>Upload::doUpload($file_name, $target_dir = null, $file_type = null)</code></p>
        <p><code>$file_name</code>The name of the file to upload as submitted in the form</p>
        <p><code>$target_dir</code>The name of the directory where to upload the file to. If you leave this option or set it to null, the file would be uploaded to the default
         upload directory specified in the config.php file. In order to specify a different directory, you give the relative path to the folder including the trailing forward slash as 
         <code>'public/uploads/profilepics/'</code></p>
        <p><code>$file_type</code>The file type to be checked for validation. If you would like to only upload image files, set this option to <code>'images'</code> so that the uploaded file is checked for valid image format.</p>
        <p>This method returns a <code>Helpers\Upload\UploadResponseClass</code> object with data about the performed upload and the property for checking if the upload was successful or unsuccessful.</p>
        <p class="text-danger">Example</p>

<pre class="bg-success">
//lets  write a simple form for uploading image file
&lt;!DOCTYPE html>
&lt;html>
&lt;body>

&lt;form action="{{Url::link('home/upload')}}" method="post" enctype="multipart/form-data">
    Select image to upload:
    &lt;input type="file" name="gravator" id="gravator">
    &lt;input type="submit" value="Upload Profile Image" name="Upload">
&lt;/form>

//let's write some code to upload this file after submission

use Helpers\Upload\Upload;

class HomeController extends BaseController {

    public function postUpload()
    {   
        $upload = Upload::doUpload('gravator', null, 'image');

        print_r($upload);

        //the object printed would have this structure
        Helpers\Upload\UploadResponseClass Object
        (
            [success] => //1 if upload was successful
            [upload_path_full] => //full path to the uploaded file
            [upload_path_relative] => //relative path to file from root if your installation
            [file_name] => //name of the file before uploading, different from final file name
            [file_size] => //interger representing the size of the file
        )

    }
    ...
}

&lt;/body>
&lt;/html> 
</pre>



        <h2 id="url" class="text-danger">Url</h2>

        <p>This helper class resolves urls and returns the appropriate url string required</p>
        <p>To load this class use <code>use Helpers\Url\Url;</code></p>


        <h3 class="text-info">Url::link()</h3>

        <p>This method returns the base url string - the url to your root installation</p>
        <p>This method does not expect any parameter</p>
        <p>This method returns the url string</p>

        <p class="text-danger">Example</p>
<pre class="bg-success">
//say you have installed you framework in gliver folder in your localhost, this is how you get the url

$base_url = Url::link();

echo $base_url; //should output http://localhost/gliver/
</pre>



        <h2 id="redirect" class="text-danger">Redirect</h2>

        <p>This helper class helps you to manage php session re-direction</p>
        <p>You load this class in this manner <code>use Helpers\Redirect\Redirect;</code></p>
        <p>This class sends header back to the browser and returns a REDIRECT(302) status code to the browser.</p>
        
        <h3 class="text-info">Redirect::to()</h3>
        <p>This method redirects the browser to the url specified</p>
        <p>This method can take two parameters like so <code>Redirect::to($path, array $data = null)</code>.</p>
        <p><code>$path</code> The controller or route name to redirect to. This parameter is required.</p>
        <p><code>$data</code> The data to append to the url as query string. This has to be in a valid array format. This parameter is optional.</p>

        <p class="text-danger">Example</p>

<pre class="bg-success">
//say we would like to redirect to the ProfileController view() method with user id information
//lets compose the data array
$data = array('id'=>9897717171);

Redirect::to('profile/view', $data); //this loads this url http://localhost/gliver/profile/view?id=9897717171
</pre>

        <h3 class="text-info">Redirect::with()</h3>
        <p>This method enables you to specify parameters to be set as part of the redirect url. These parameters will be appended as a query string to the url string generated.</p>
        <p>This method expects one parameter - an array with the key/value pairs to be appended to url. Array keys with null or empty elements will be stripped off from the query string.</p>
        <p><code>$data</code> The array with parameter to pass to url as query string. This parameter is required.</p>
        <p>You call this method chainied with the to() method in this manner <code>Redirect::with($data)->to('home');</code></p>
        <p>Calling this method is the same as passing the $data array as a second parameter to the Redirect::to() method</p>

        <p class="text-danger">Example</p>
<pre class="bg-success">
//say we would like to redirect to the ProfileController view() method with user id information
//lets compose the data array
$data = array('id'=>9897717171);

Redirect::with($data)->to('profile/view'); //this loads this url http://localhost/gliver/profile/view?id=9897717171
</pre>














<a href="{{Url::link('home/database')}}"><h1>Database</h1></a><br>

                <a href="{{Url::link('home/database#basic_usage')}}" class="lead">Basic Usage</a><br>
                <a href="{{Url::link('home/database#query_builder')}}" class="lead">Query Builder</a><br>
                <a href="{{Url::link('home/database#eloquent')}}" class="lead">Intuitive ORM</a><br>
                <a href="{{Url::link('home/database#schema_builder')}}" class="lead">Schema Builder</a><br>
                <a href="{{Url::link('home/database#migration_seeding')}}" class="lead">Migration/Seeding</a><br>
                <a href="{{Url::link('home/database#errors')}}" class="lead">Errors/Logging</a><br>


                        <h3 id="basic_usage" class="text-danger">Basic Usage</h3>
                   <p>
                            Gliver easily connect application to database in a simple way.
                            It currently support following database systems:
                            
                        <div class="row">
                            <ul style="list-style: circle; margin-left: 5%">
                                <div class="row"><li>MySQL</li></div>
                                <div class="row"><li>SQLite</li></div>
                                <div class="row"><li>Postgre</li></div>
 
                                                                
                            </ul>
                        </div>
                            
                  </p>
                        <h5>Configuration</h5>
                        <p>
                            Database configuration file is located at <code>config/database.php</code>
                            In below code snippet, Mysql is set as default and mysql related configuation are written.
                  </p>
      <h3 id="query_builder" class="text-danger">Query Builder</h3>
          <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

      <h3 id="intuitive_orm" class="text-danger">Intuitive ORM</h3>
          <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
  
      <h3 id="schema_builder" class="text-danger">Schema Builder</h3>
          <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

      <h3 id="migration_seeding" class="text-danger">Migration Seeding</h3>
      <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 




















<a href="{{Url::link('home/caching')}}"><h1>Caching</h1></a>

                <a href="{{Url::link('home/caching#memcache')}}" class="lead">Memcache</a><br>
                <a href="{{Url::link('home/caching#memcached')}}" class="lead">Memcached</a><br>
                <a href="{{Url::link('home/caching#redis')}}" class="lead">Redis</a><br>


                <h3 id="memcache" class="text-danger">Memcache</h3>
                <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

                       
                <h3 id="memcached" class="text-danger">Memcached</h3>
                <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

                <h3 id="redis" class="text-danger">Redis</h3>
               <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div>                             







<a href="{{Url::link('home/preface')}}"><h1>Preface</h1></a><br>
                <a href="{{Url::link('home/preface#introduction')}}" class="lead">Introduction</a><br>
                <a href="{{Url::link('home/preface#quick_start')}}" class="lead">Quick Start</a><br>
                <a href="{{Url::link('home/preface#release_notes')}}" class="lead">Release Notes</a><br>
                <a href="{{Url::link('home/preface#upgrade_guide')}}" class="lead">Upgrade Guide</a><br>
                <a href="{{Url::link('home/preface#contribution_guide')}}" class="lead">Contribution Guide</a><br>


                <h3 id="introduction" class="text-danger">Introduction</h3>


            
                <p>The Gliver MVC Framework is for PHP developers, both new and seasoned to write cutting edge web applicaitions, APIs, Web Services, Software Back ends and much more just in a matter of minutes. 
                This framework is inspired by a community of developers who needed a light weight framework with a relatively faster execution time on the server as compared to other frameworks based on <a href="http://php.net/releases/5_4_0.php"> <strong>PHP >=5.4</strong> </a>. Gliver comes with a built in
                templating engine that removes all the monotonous repeated php tags, therefore being less scary for a front end developer with almost no learning curve</p>
                       



                <h3 id="quick_start" class="text-danger">Quick Start</h3>




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


                <h3 id="release_notes" class="text-danger">Release Notes</h3>
                
                <p>The official stable release of Gliver framework is <span class="text-danger">v1.0.0</span>. Gliver MVC is, however, under active developemnt and updates are being pushed to the <a href="https://github.com/gliver-mvc/gliver">repository</a> every day. However, the syntax defined in version 0.0.1 will not change, only functionlity will be added. 
                So if you have already learnt the syntax with this version, you are good to go, nothing would change, only for better functionality. However, you might want to keep checking out for new updates, 
                so remember to subscribe to our newsletter so that we can keep you informed of every advancement. The updates would only include the very cool features that you have been waiting for...you don't want to miss out on this.</p>   

                        <h4>Gliver 1.0.0</h4> 
                        <p>This is the first stable official release of Gliver framework after the many alpha versions released earlier. Out of the box, this version has</p>
                        <ul>
                            <li>Glade Templating Implementation with .glade.php extension for all view files</li>
                            <li>Advanced Routing with ability to name url parameters</li>
                            <li>Express Query Builder and Model Class for automated query generation and execution</li>
                        </ul>      

                <h3 id="upgrade_guide" class="text-danger">Upgrade Guide</h3>
                
                    <p>Things can only always get better. If you realize that we have updates and there are some really cool 
                    features that you like in the updates, you can always pull the new code and put you application on steriods. At the moment, for you to 
                    pull down updates to your application, you need to <a href="https://github.com/gliver-mvc/gliver/archive/master.zip"> download </a> the framework extract and replace only the content of the system directory
                    with the contents of the system directory in your application. You thought there was more to it? We are sorry, that's all, your framework is now  up to date. Enjoy the new funcitonality.
                    We are working on a way to be able to update your whole application by a simple composer update statement on the command line, this is more reason you wanna subscribe to our newsletter, so that you be the first to know when
                    this is done so that you can begin using it right away. </p>


                <h3 id="contribution_guide" class="text-danger">Contribution Guide</h3>
                


                <p>We are really grateful you are amazed by this wonderful light weight framework and would like to contribute code to make it better. We can't wait to see you getting started! Contribution of code is as easy. You need to bundle you code in packages
                , use psr-0 or psr-4 namespacing and publish then on the <a href="https://packagist.org/">packagist repository</a>, you can then install them via composer. With this you can contribute to the core of the framework as well. There is a more in depth guide on contributing code in the tutorials sections. Be sure to check it out.
                . We welcome your contributions as the main drive for this framework is to develop an active community around this code base. To contribute just folk this repository and fire on... Once we have some cool features in, do a pull request and we will be in touch to get the code merged in a reasonable time</p>     
        


