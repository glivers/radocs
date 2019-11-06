                <div class="jumbotron">
                <h1>Gliver Documentation</h1>

                <p>The Gliver MVC Framework is for PHP developers, both new and seasoned to write cutting edge web applicaitions, APIs, Web Services, Software Back ends and much more just in a matter of minutes. 

                <p>This framework is inspired by a community of developers who needed a light weight framework with a relatively faster execution time on the server as compared to other frameworks based on <a href="http://php.net/releases/5_4_0.php"> <strong>PHP >=5.4</strong> </a>.</p>

                <p>Gliver comes with a built in templating engine that removes all the monotonous repeated php tags, therefore being less scary for a front end developer with almost no learning curve</p>
                           
                <p>The project is hosted on <a class="projectLinks" href="https://github.com/gliverphp/gliver" target="_blank">Github</a> and is available for use under the <a class="projectLinks" href="https://github.com/gliverphp/gliver/blob/master/LICENSE" target="_blank">MIT software license</a>.  You can report bugs and discuss features on the <a href="https://github.com/gliverphp/gliver/issues" target="_blank">GitHub issues page</a>, or send tweets to <a href="https://twitter.com/gliverframework" target="_blank">@GliverFramework</a>.</p>
                
                <p><a class="btn btn-primary btn-lg" href="https://github.com/gliverphp/gliver" target="_blank">Fork on Github »</a></p>
                </div>


                <h2>Installation</h2>


                <p class="well">Gliver Framework requires PHP version 7.0 or greater to run. In order to avoid broken functionality or open security holes in your application, upgrade to version >=7.0</p>

                <p>You also need to have <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">Composer</a> installed on your computer in order to be able to install the Gliver framework</p>

                <p><strong>Step 1.</strong></p>

                <p>Click here to <a href="https://github.com/gliverphp/gliver/archive/master.zip">download the Gliver core</a> from GitGub and extract it in your root directory</p>

                <p><strong>Step 2.</strong></p>

                <p>Run 'composer update' from the root directory of your Gliver installation to install the Gliver framework dependencies</p>

<pre>
<code data-language="html">
composer update    
</code>
</pre>

                <p><strong>Step 3.</strong></p>

                <p>Alternatively, can install Gliver framework directly from Packagist repository by running 'composer create-project gliver/gliver myapp' in from command line</p>

<pre>
<code data-language="html">
composer create-project gliver/gliver myapp
</code>
</pre>

                
                <p>This command would download the latest stable version of Gliver framework and all dependencies and install them in the directory <span class="text-danger">myapp</span>.</p>

                <p>You can change the name of the directory to your directory of choice, or better still rename it after installation...</p>               
        
                  <h2>Configuration</h2>

            
                  <p>There are four configuration files where you can specify the settings for your application.</p>

                  <p class="alert alert-info">These options can be accessed from anywhere within your application using specific class methods.</p>

                  <h3 class="text-danger">Config.php</h3>  

                  <p>This file contains the general configuration options of your application. 

                  <p>The config.php resides in the config directory. 
<pre>
<code data-language="html">
config/config.php
</code> 
</pre>



                  <p>Set the value of 'dev => true' if your application is running in development mode and set this to 'false' as soon as you deploy to production.</p>

<pre>
<code data-language="php">
/**
 *Set the application environment. Set true for development, otherwise, set to false
 */
'dev' => true,
</code>  
</pre>

                  <p>This would do is to ensure that error messages are not shown to the user when in production mode in order to avoid exposing your server directory structure to that malicious jerk.</p>
            
                  <p class="alert alert-info">You can also set your default controller and action here.</p>

                  <p>These are key as they will be loaded as your homepage i.e. whenever you access you application without specifying the controller and method</p>

<pre>
<code data-language="php">
/**
 *Set the default controller
 */
'controller' => 'Home',
/**
 *Set default action
 */
'action' => 'Index' 
</code>
</pre>

            
                  <h3 class="text-danger">Database.php</h3>  

                  <p>The Gliver database configuration file resides in the config directoty.</p>

<pre>
<code data-language="html">
config/database.php
</code>
</pre>
                 
                  <p>In the database configuration, you can specify the settings for any supported database then specify the default database you would like the application to alwasy connect to.</p>

                  <p>As soon as you change your mind and would like to use a different database, just set it as the default.</p>

<pre>
<code data-language="php">
/**
 *Define the database server hostname
 */
'host'    => 'localhost',
/*
 *Define the username
 */
'username'  => 'root',
/*
 *Define the database password
 */
'password'  => '',  
</code>
</pre>
            
                  <h3 class="text-danger">Constants.php</h3>  

                  <p>The constants configuration file resides in the application directoy.</p>

<pre>
<code data-language="html">
application/constants.php
</code>
</pre>

                  <p>Here you can define all the values that you will need throughout all your application.</p>

                  <p>Once defined, you can access them from anywhere in your application by using the constant name.</p>

<pre>
<code data-language="php">
//Specify the network id constant
define('NETWORK_ID', 'gliver'); 
</code>
</pre>
                  
                  <p>You can then access them from anywhere in this manner:</p>
<pre>
<code data-language="php"> 
echo NETWORK_ID; 
</code>
</pre>

 
                  <h2>Routing</h2>

                  <p>The routing feature enables mapping of defined keywords to particular controllers/action pairs.</p>

                  <p>Routing also enables you to pass url parameters to your controllers which it parses and includes as part of the GET parameters you access them via the Input helper class.</p>

                  <p>The routing class gives much flexibility so that you can map a defined route to a controller, a controller method pair and optionally name the parameters that you expect to recieve along with the url request</p>

                  <p>Routes are defined in the routes.php file found in the application directory.</p>

<pre>
<code data-language="html">
application/routes.php
</code>
</pre>
                  <p>Defining routes is, however, optional as you can decide to call your controllers directly from the url and pass unamed parameters and accessing them using numbered indexes.</p>
                                    
                  <p class="alert alert-info">Remember that the routes.php file is an array and therefore should maintain a valid array format.</p>
                  
<pre>
<code data-language="css">
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

                  <p>Say you have a controller class named <span class="text-danger">LoadController</span> that you would like to invoke using the word <span class="text-danger">blog</span>.</p>

                  <p>In order to achieve this you will define this name value pair in the routes file as: 

<pre>
<code data-language="php">
"blog" => "Load",
</code>
</pre>

                  <p>This simply means the word blog maps to the LoadController class, so that when you access the LoadController class from the url you use the word blog in this manner:</p>

<pre>
<code data-language="html">
http://localhost/myapp/blog
</code>
</pre>

                  <p>If you want to define a route that maps to a controller class with the particular method to be executed, separate the controller class and method name with an @ symbol.</p>

                  <p>Say you have an <span class="text-danger">AdminController</span> class that loads users profiles using a getUser() method.</p>

                  <p>You can define an 'adminusers' route that maps to this controller class and the getUser() method in order to load a user's profile.</p>

                  <p>It would be something like:</p>

<pre>
<code data-language="php">
"adminusers"=>"Home@getUser"
</code>
</pre>

                  <p>And you would access it using a url like:</p>

<pre>
<code data-language="html">
http://localhost/myapp/adminusers
</code>
</pre>                 
                  
                  <p>In case each user on your system has a unique id and you would like to load different pages for editing or viewing mode, pass all these parameters in the url and give them names with which to access them in this manner:

<pre>
<code data-language="php">
"adminusers"=>"Home@getUser/id/mode"
</code>
</pre>                    

                  <p>Here is an example url you would use to access it:</p>

<pre>
<code data-language="html">
http://localhost/myapp/adminusers/49723/edit
</code>
</pre>                  
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
                
                  <h2 id="input" class="text-danger">Requests</h2>

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

                  <h2 id="views" class="text-danger">Responses</h2>

                  <p>Whenever a request is made, there is need for a response - or their might be no point of the request.</p>
                  
                  <p>After processing a url request, it's time to respond back to the user and let them know what you did, the outcome of it and their next steps.... Most, if not all, responses are handled with the <span class="text-primary">View</span> helper class.
                  The result of the request could be loading a view file, responding with json data, csv, pdf and others options as you may wish. You will look more on how to load and use the View helper class in the helpers section but we will show an example of how to load 
                  a view file using the View helper class.</p>
                  
                  <p>Place all your view files in the <code>application/views/</code> directory. Gliver has glade templating inbuilt and is enabled by default and all view files must have a <span class="text-info">.glade.php</span> extension. </p>
                  
                  <p>Say you have a users.glade.php view file under the views/home directory so that your dir structure is <code>application/views/home/users.glade.php</code>, you 
                      will load the users.glade.php view file in this manner <code>View::render('home/users')</code>.</p>
                  
                  <p>If you would like to pass data to be used by your view files, pass it as the second parameter in array format as <code>View::render('home/users', array('title'=>'Gliver - Official Site'))</code>, you will then access this variable in your view file as <span class="text-success">$title</span>.</p>        
                   
                  <h2 id="errors" class="text-danger">Error Handling</h2>

                  <p>Error handling in Gliver comes in two flavors - either through PHP errors or Exceptions.</p>
                  
                  <p>Most likely when writing, testing and deploying your application you are going to break something - you are human, right? Informative error information is a very quick and effective way to troubleshoot and fix the bug. All errors encoutered in your application are logged into the error.log file found in the <code>bin/logs/error.log</code> directory. However, you can also choose to display these errors to the screen - a good idea if you are working in development mode to mend things a little faster. </p>

                  <p>The setting on whether to display or hide and log error messages is defined in the config.php file where you set <code>"dev"=>true,</code> when working in a development environment - this makes error messages to be displayed to the screen. Setting <code>"dev"=>false,</code> would turn off error display on the screen, so that whenever there is an error message it is logged in the log file and a template error page is shown in the browser. This is good for production mode to avoid exposing your application or server directory structure to a malicious jerk.</p>

                  <p>You might however want to create custom error messages that might be more sensible to your users - who may not be techies...</p>
                  
                  <p>In that case, therefore, you might want to consider using <span class="text-info">Exceptions</span>. You might want to use your exceptions within a try...catch block, but that is entrely up-to you. Create your own Exception class by extending the <span class="text-primary">Exceptions/BaseExceptionClass</span> so that you enjoy all the built in functionality in the exception class already. In order to make use of this class, throw exceptions by passing the custom error message in this manner <code>throw new BaseExceptionClass("...your error message here...");</code> then catch this in a block 
                  and display the error message by calling the errorShow() method like so <code>$BaseExceptionClassInstance->errorShow()</code>.</p>


                  <h2>Controllers</h2>

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
                  <li>You want to ensure you namespace your controllers, so that they will be autoloaded as expected. If your controller class resides in the <span class="text-warning">application/controllers</span> directory then use <span class="text-primary">namespace Controllers;</span> else if your controller resides within a subdirectory like 'Admin' as <span class="text-warning">application/controllers/Admin</span> use <span class="text-primary">namespace Controllers\Admin;</span> - this follows psr-4 namespace pattern.</li>
                  
                  <li>You cannot create static methods or properties in your controllers.</li>
                  </ul>

                  <p class="alert alert-info">Use PHPDoc commenting style to add metadata to your class - as part of your documentation. This would help you and other developers looking at your code understand the purpose of your controller classes, methods and expected behavior of the controllers.</p>

                  <p>In order to use a class inside of your controller class, use the <span class="text-primary">use</span> statement with the full namespace of the class as <span class="text-primary">use Helpers\View\View;</span> to load the view helper class then access it as <span class="text-primary">View::render('home/users');</span></p>
                  
                  <p>When defining your methods in your controllers, you can choose to let all your methods be unique or you can use the same method name to excecute different methods based on the request method used. There are two request methods that would be detected by Gliver framework : GET and POST methods. </p>    
                  
                  <p>With this feature comes a cool ability of Gliver to load a controller method based on your request method. This means that you can use the same method name in different request methods. For example:</p>
                  
                  <p>Say you have a controller class named <span class="text-primary">LoginController</span> and would like to use the same method name for loading a login form and at the same time processing user login information - you will do this as below.</p>
                  
                  <p>Create two methods named <span class="text-primary">getLogin()</span> and <span class="text-primary">postLogin()</span>. You will access both methods with the same url as <code>http://localhost/gliver/login/login</code>. Accessing this url in your address bar will load the user login form as the request method would be GET and the <span class="text-primary">getLogin</span> method would be excecuted. Once the user fills up the form, you specify in your action attribute the same url for form submission as this <code>&lt;form action="http://localhost/gliver/login/login" method="post" ></code>. When the user then submits the form, Gliver would detect this as a POST request and therefore submit your form to the <span class="text-primary">postLogin</span> method of the LoginController. So, there you go! Using the same method name to excecute different methods depening on the request method.</p>


                <h2>Views</h2>

                <p>The view class enables you to invoke a response to the url request. This can in the form of loading view files to provide a graphical interface to enable your users to interact with your application or set header for sending pdf, json, xml responses among others...</p>

                <p>You call the view class from the controller by first requiring it using the statement <code>use Helpers\View\View;</code> after which you access the View class and methods directly without creating an instance. For instance, this is how you will load a view file <code>View::render('home/users', $data);</code> More methods available in the View class are described in the Helpers section</p>

                <p class="alert alert-info">All view files are located in the <span class="text-info">application/views</span> directory.</p>
            
                <p>If you put your view files in a subdirectory under the views directory, you access them by separating the directories with a forward slash. Say you have put your index.glade.php view file in your home subdirectory under the views folder - in order to load this view from the view class, you specify <span class="text-warning">View::render('home/index')</span>.</p>

                <p>Most of the time when you are loading your views, you may need to pass variables along so that their values are injected into the views. This is completely in built in Gliver. All you need to do is pass the variables in an array and then access them using the array key.</p>

                <p>Say we would like to dynamically get the site title from the controller and use it in our view file in this manner <code>&lt;title>&lt;?php echo $title; ?>&lt;/title></code>. Create a $data array and store the value of the title as a key in the array as <code>$data['title'] = "Gliver - Official Site";</code>, then pass this as a second parameter to the View::render() method as <code>View::render('home/index', $data);</code></p>


                <h2>Templating</h2>

                <p>Out of the box, Gliver has an in built templating engine called glade. This engine is rather simple and has been kept light-weight for the purpose of faster view file parsing - so there are no complicated methods, only the most commonly repeated actions in view files have been abstracted.</p>

                <p>All view files should have a <span class="text-primary">.glade.php</span> extension in order to be parsed by the View loader class. When specifying the view file though, you do not need to add the file extension as this is enabled by default. Say you have a file named <span class="text-success">index.glade.php</span> in your root views directory. In order to load this view file from the View class you will use this syntax <code>View::render('index');</code> and this would definitely load the view file at <code>application/views/index.glade.php</code>.</p>

                <p>Glade basically has the following template methods that you can use in your view files</p>

                <h3>Echo </h3>

                <p>In regular PHP in order to echo a string to the browser, you'd open and close PHP tags then use the echo statement in between the tags. You have more than 5 variables to echo in your view files and you are already wishing there was an alternative. Look at this <code>&lt;?php echo $username; ?></code>, ugly? Huh? Let's make it elegant -> <code><?php echo '{'; ?>{$username}}</code>. That's all you need to do to print out the value of a variable to the browser in glade template files. <code>&lt;p><?php echo '{'; ?>{$username}}&lt;/p></code></p>

                <h3><?php echo "@";?>include </h3>

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

                <h3>{{"@"}}if...{{"@"}}endif </h3>
<pre class="bg-success">
<?php echo "@";?>if(isset($email) AND ! empty($email))
  &lt;p>Your email address is <?php echo "{";?>{$email}}&lt;/p>
<?php echo "@";?>endif
</pre>

            <h3 class="text-primary"><?php echo "@";?>if...<?php echo "@";?>else...<?php echo "@";?>endif </h3>
<pre class="bg-success">
<?php echo "@";?>if(count($users) > 0)
  &lt;p>Registered users(<?php echo "{";?>{count($users)}})&lt;/p>
<?php echo "@";?>else
  &lt;p>There are no registered users yet!&lt;/p>
<?php echo "@";?>endif
</pre>

            <h3 class="text-primary"><?php echo "@";?>if...<?php echo "@";?>elseif...<?php echo "@";?>else...<?php echo "@";?>endif </h3>
<pre class="bg-success">
<?php echo "@";?>if($score > 80) 
  &lt;p>Grade : A  Remarks : Excellent&lt;/p>
<?php echo "@";?>elseif($score > 60)
  &lt;p>Grade : B  Remarks : Good &lt;/p>
<?php echo "@";?>else
  &lt;p>Grade : C  Remarks : Fair&lt;/p>
<?php echo "@";?>endif
</pre>

            <h3 class="text-primary"><?php echo "@";?>while...<?php echo "@";?>endwhile </h3>
<pre class="bg-success">
<?php echo "@";?>while($number <= 10)
  &lt;p>Number is <?php echo "{";?>{$number}}&lt;/p>
  ....do something to terminate loop
<?php echo "@";?>endwhile
</pre>

            <h3 class="text-primary"><?php echo "@";?>for...<?php echo "@";?>endfor </h3>
<pre class="bg-success">
<?php echo "@";?>for($itr = 1; $itr < 10; $itr++)
  &lt;p>This is paragraph number <?php echo "{";?>{$itr}} &lt;/p>
<?php echo "@";?>endfor
</pre>

            <h3 class="text-primary"><?php echo "@";?>foreach...<?php echo "@";?>endforeach</h3>
<pre class="bg-success">
<?php echo "@";?>foreach($users as $user)
  &lt;p>Name <?php echo "{";?>{$user['first_name']}} : Email : <?php echo "{";?>{$user['email_address']}}&lt;/p>
<?php echo "@";?>endforeach
</pre>

            <p></p>

                <h2 id="models" class="text-danger">Models</h2>

                <p>Models classes will help you handle database operations or API connection operations.</p>

                <p>All model classes reside in the <code>application/models</code> directory and must extend the <span class="text-primary">Model</span> class. This ensures acccess to the already built in functionality of the model class.</p>

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

                <p>In order to use a model in your controllers, load the  model by use of the <span class="text-danger">use</span> keyword followed by the full namespace of the model. Say you have a model named <span class="text-primary">UsersModel</span> that resides within the Admin directory. Besides, our model has a static method <code>getUser()</code> that fetches the details of a user from the database. For us to access this model in our HomeController class as do as :</p>

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


                <h2>Helpers</h2>

                <br><br>
                
                <p class="alert alert-info">You only need to load the Helper classes when using them from your controllers, models or libraries. However, in the view files the helper classes are automatically loaded using the alias names specified in the <span class="text-info">config.php</span>. <br>All helper classes are accessed statically so you do not need to create an instance to access the methods. An attempt to create an instance using the <span class="text-danger">new</span> keyword would generate an error! <br> In order to access a helper method specify the helper class name, the scope resolution operator and then the name of the method as <span class="text-danger">ArrayHelper::parts()</span>.</p>
                
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

                <h3>Array</h3>

                <p>The ArrayHelper class enables you to create arrays out of string and manipulate arrays. This class allows for method chaining so that you can chain all the methods you would like to use in one method call and get the final result returned.</p>
                
                <p>You can load the ArrayHelper class from any class by using the use statement with the full namespace then accessing it with the ArrayHelper name as <span class="text-danger">use Helpers\ArrayHelper\ArrayHelper;</span> You can as well choose to alias the classname to a name of your choice as <span class="text-danger">use Helpers\ArrayHelper\ArrayHelper as ArrayClass;</span> and then use the ArrayClass to access all the array helper methods.</p>

                <p>You only need to load the Helper classes when using them from your controllers, models or libraries. However, in the view files the helper classes are automatically loaded using the alias names specified in the <span class="text-info">config.php</span>.</p>
                
                <p>Let's look at some of the methods that you can safely call with the ArrayHelper class.</p>

                <h4>ArrayHelper::parts()</h4>

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

                <h4>ArrayHelper::join()</h4>

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


                <h4>ArrayHelper::clean()</h4>

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



                <h4>ArrayHelper::trim()</h4>

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



                <h4>ArrayHelper::flatten()</h4>

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



                <h4>ArrayHelper::first()</h4>

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

                <h4>ArrayHelper::slice()</h4>

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


                <h4>ArrayHelper::KeyExists()</h4>

                <p>This method checks if an array key exists</p>
                
                <p>This method expects two parameters in this manner <br><code>ArrayHelper::KeyExists($key = null, array $inputArrayToSearch = null)->get()</code></p>
                
                <p><code>$key</code> The key to search for inthe input array</p>
                
                <p><code> $inputArrayToSearch</code> The array to check against</p>

                <p class="text-danger">Example</p>

                <h3>Upload</h3>

                <p>This helper class performs files uploads on the server.</p>
                
                <p>To load this class use <code>use Helpers\Upload\Upload;</code></p>

                <h4>Upload::doUpload()</h4>

                <p>The Upload helper class has one method which takes three parameters in this manner <br> <code>Upload::doUpload($file_name, $target_dir = null, $file_type = null)</code></p>
                
                <p><code>$file_name</code>The name of the file to upload as submitted in the form</p>
                
                <p><code>$target_dir</code>The name of the directory where to upload the file to. If you leave this option or set it to null, the file would be uploaded to the default upload directory specified in the config.php file. In order to specify a different directory, you give the relative path to the folder including the trailing forward slash as <code>'public/uploads/profilepics/'</code></p>
                
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



                <h3>Url</h3>

                <p>This helper class resolves urls and returns the appropriate url string required</p>
                
                <p>To load this class use <code>use Helpers\Url\Url;</code></p>

                <h4>Url::link()</h4>

                <p>This method returns the base url string - the url to your root installation</p>
                
                <p>This method does not expect any parameter</p>
                
                <p>This method returns the url string</p>

<p class="text-danger">Example</p>
<pre class="bg-success">
//say you have installed you framework in gliver folder in your localhost, this is how you get the url

$base_url = Url::link();

echo $base_url; //should output http://localhost/gliver/
</pre>



                <h3>Redirect</h3>


                <p>This helper class helps you to manage php session re-direction</p>
                
                <p>You load this class in this manner <code>use Helpers\Redirect\Redirect;</code></p>
                
                <p>This class sends header back to the browser and returns a REDIRECT(302) status code to the browser.</p>
                
                <h4>Redirect::to()</h4>
                
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

                <h4>Redirect::with()</h4>

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



                <h2>Release Notes</h2>
                
                <p>The official stable release of Gliver framework is <span class="text-danger">v1.0.0</span>. Gliver MVC is, however, under active developemnt and updates are being pushed to the <a href="https://github.com/gliver-mvc/gliver">repository</a> every day. However, the syntax defined in version 0.0.1 will not change, only functionlity will be added. So if you have already learnt the syntax with this version, you are good to go, nothing would change, only for better functionality. However, you might want to keep checking out for new updates, so remember to subscribe to our newsletter so that we can keep you informed of every advancement. The updates would only include the very cool features that you have been waiting for...you don't want to miss out on this.</p>   

                <h4>Gliver 1.0.0</h4> 

                <p>This is the first stable official release of Gliver framework after the many alpha versions released earlier. Out of the box, this version has</p>
                
                <ul>
                    <li>Glade Templating Implementation with .glade.php extension for all view files</li>
                    <li>Advanced Routing with ability to name url parameters</li>
                    <li>Express Query Builder and Model Class for automated query generation and execution</li>
                </ul>      


                <h2>Upgrade Guide</h2>
                

                <p>Things can only always get better. If you realize that we have updates and there are some really cool features that you like in the updates, you can always pull the new code and put you application on steriods. At the moment, for you to pull down updates to your application, you need to <a href="https://github.com/gliver-mvc/gliver/archive/master.zip"> download </a> the framework extract and replace only the content of the system directory with the contents of the system directory in your application. You thought there was more to it? We are sorry, that's all, your framework is now  up to date. Enjoy the new funcitonality. We are working on a way to be able to update your whole application by a simple composer update statement on the command line, this is more reason you wanna subscribe to our newsletter, so that you be the first to know when this is done so that you can begin using it right away. </p>


                <h2>Contribution Guide</h2>


                <p>We are really grateful you are amazed by this wonderful light weight framework and would like to contribute code to make it better. We can't wait to see you getting started! Contribution of code is as easy. You need to bundle you code in packages
                , use psr-0 or psr-4 namespacing and publish then on the <a href="https://packagist.org/">packagist repository</a>, you can then install them via composer. With this you can contribute to the core of the framework as well. There is a more in depth guide on contributing code in the tutorials sections. Be sure to check it out. We welcome your contributions as the main drive for this framework is to develop an active community around this code base. To contribute just folk this repository and fire on... Once we have some cool features in, do a pull request and we will be in touch to get the code merged in a reasonable time</p>     