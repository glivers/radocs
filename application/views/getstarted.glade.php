@include('header')


@include('navbar')

<div class="container">
    <div class="row">
        

        @include('sidebar') 

        <div class="col-md-9">

                <a href="{{Url::link('home/getstarted')}}"><h1>Getting Started</h1></a><br>

                <a href="{{Url::link('home/getstarted#glance')}}" class="lead">Gliver at a glance</a><br>
                <a href="{{Url::link('home/getstarted#supported_features')}}" class="lead">Supported Features</a><br>
                <a href="{{Url::link('home/getstarted#flowchart')}}" class="lead">Application Flow Chart</a><br>
                <a href="{{Url::link('home/getstarted#configuration')}}" class="lead">Configuration</a><br>
                <a href="{{Url::link('home/getstarted#routing')}}" class="lead">Routing</a><br>
                <a href="{{Url::link('home/getstarted#input')}}" class="lead">Requests</a><br>
                <a href="{{Url::link('home/getstarted#views')}}" class="lead">Responses</a><br>
                <a href="{{Url::link('home/getstarted#errors')}}" class="lead">Error Handling</a><br>


           <h3 id="glance" class="text-danger">Gliver at a glance</h3>

           <h4 id="glance"></h4>
            
           <p>Gliver: An extensible light weight Application framework. Gliver is an application framework based on PHP <a href="http://php.net/ChangeLog-5.php#5.6.16">v5.6</a>. It is an essential tool for PHP web developers who want easy to use yet powerful framework.
               It is specially designed for each level of PHP developer. Novice PHP developers can benefit from this by simple installation and start developing cutting edge applications.
               It is equally useful for middle level to advanced programmers with very useful Helper classes. </p>
            <p>Its ORM based database architecture is beneficial for developing scalable and complex Large scale applications. 
               Memcache is also supported in this framework. Developers who do not want to use structured database have freedom to use NoSQL database like MongoDB.</p>
        
            <h3 id="supported_features" class="text-danger">Supported Features</h3>
            
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
               
            <h3 id="flowchart" class="text-danger">Application Flowchart</h3>
                <div>
                    <img class="img img-resposive" src="{{ Url::assets('img/gliverarch.png') }}" alt="gliver application flow chart" width="100%" />
                </div>

            <h3 id="configuration" class="text-danger">Configuration</h3>

                <p>Configuring your application is the fun part after installing Gliver - and i bet you wanna do this before you begin writing any code. Configuring Gliver comes in different flavors depending on what you would like to configure.</p>
            
            <p class="alert alert-success">Note that the configutation files are always autoloaded by default and so do not require any special action from you - all you need to do is specify the values against the keys in the respective files. Do not modify key names as these are used to access the values
            that you specify as is.</p>

            <p>There are three configuration files where you can specify options for your application. These options are always available throughout the entire application and can be accessed from anywhere in your application using the right classes. Include your configuration in either <span class="text-success">config.php, database.php or constants.php</span> </p>
            
            <h4 class="text-primary">Config.php</h4>  

            <p>This file contains the general configuration options of your application. The config.php resides in the <code>config/config.php</code> directory. 
            Comments appear before every config element to describe the purpose of the option. Most of the options are set to defaults with the associated datatype. So you can set the config options to your value of choice.
            Always be sure of what you are doing before you make changes to configuration. Not all options in this file are alterable, for example, do not alter the root option.  </p> 

            <p>Among other options, the values you can set in this file include application author, copyright, license, version... e.t.c - these values are automatically used to fill in metadata when generating classes using the <span class="text-primary">gliverich console</span>  terminal commands. </p>

            <p>Set the value of <code>dev => true</code> if your application is running in development mode and make sure 
                to set this to <code>false</code> as soon as you deploy to production. All that this would do is to ensure that error messages are not shown to the user when in production mode
                in order to avoid exposing your server directory structure to that malicious jerk.</p>
            
            <p>An important thing you want to ensure you do before you leave this file is to set your default controller and action. These are key as they will be loaded as your homepage i.e. whenever you access you application without specifying the controller name and action to load - something like this <code>http://localhost/gliver</code></p>

            <p>If you would like to make take advantage of caching technology, a feature Gliver proudly supports, then this is the place you want to define settings for accessing your Memcached server or Redis for that matter...</p>
            
            <h4 class="text-primary">Database.php</h4>  

            <p>This is sister to Config.php as they reside in the same directory here <code>config/database.php</code> </p>
            <p>The database configuration is separated from the general configuration as we intend to support as many databases as we can imagine and we would like to set these apart from the rest so as to avoid confusion - noting that database settings changed frequently (as soon as you realize your password is leaked!).</p>
            <p>In the database configuration, you can specify the settings for any supported database then specify the default database you would like the application to always connect to. As soon as you change your mind
                and would like to use a different database, just set it as the default and that's all you need - all database connections henceforth would default to your new set default. Ensure to enclose all you database setting values within single or double quotes. As well you do not need to modify the key names or add to any. They are already good to go.</p>
            
            <h4 class="text-primary">Constants.php</h4>  

            <p>Here you can define all the values that you will need throughout all your application. Defining constants here would follow the same rules you observe when defining
                constants in PHP. Once you define your contants here, you can access them from anywhere in your application by using the constant name.</p>
                <p>You define constants in this manner <code>define('NETWORK_ID', 'gliver');</code> then you can access them from anywhere in this manner <code> echo NETWORK_ID; </code> </p>

 
            <h3 id="routing" class="text-danger">Routing</h3>

            <p>The routing feature enables mapping of defined keywords to particular controllers/action pairs. Routing also enabels you to pass url parameters to your controllers 
            which it parses and includes as part of arguments passed to your controller methods so that you can access their values from within your controllers as regular variables. The routing class gives much flexibility so that you can map a defined route to a controller, a controller method pair as well
            as load controllers classes in sub namespaces. In order to get the values of the url parameters just expect them as arguments in your controller method and they will be supplied in 
            the order in which you specify them.</p>

            <p>Defined routes are set in the <span class="text-success">routes.php</span> file that resides in the <code>application/routes.php</code> file path. 
                The routing class would then get the contents of this file at execution time and parse the route accordingly. Defining routes is, however, optional as you can decide to call your controllers
                directly from the url and pass your url parameters along.</p>
            <p>The comments in the routes.php file give a pretty self explanatory example of how to define routes, but let's take sometime and look at this into details</p>
            <p class="alert alert-info">Remember that the routes.php file is an array and therefore should maintain a valid array format.</p>
            <p>First be able to locate the routes.php file from within the <code>application/</code> directory then follow along...</p>

<pre>
/**
 *The admin users route.This route loads the home controller and getUser() method
 *<span class="text-danger">@param</span> int $id The user id for which to load profile
 *<span class="text-danger">@param</span> string $mode Whether to load profile in edit or view mode
 */
<span class="text-info">'adminusers' => 'Home@getUser/id/mode',</span>
/**
 *This routes loads the controller that display blog posts
 *<span class="text-danger">@param</span> string $category The category from which to get blog content
 *<span class="text-danger">@param</span> int $id The id of the post to load in this category
 */
 <span class="text-info">'blog' => 'Load/category/id',</span>
</pre>

            <p>Say you have a controller class named <span class="text-info">LoadController</span> that you would like to invoke using the word <span class="text-info">blog</span>. 
            In order to achieve this you will define this name value pair in the routes file as <code>"blog" => "Load",</code> - this simply means that word blog maps to the LoadController class, so that when you 
            access the LoadController class from the url you use the word blog in this manner <code>http://localhost/gliver/blog</code>.
            May be you have many articles so that you have put them into categories, and that each blog has a unique id. Inorder to load the right article, you  might wanna pass along with the route name
            the blog category and the particular article id to load as part of the url. To make this even better, you can define the names with which to access the values of these parameters in your routes so that 
            your work is made even easier. You do this by separating the controller name by a forward slash and then specifying the names of the parameters - each separated with a forward slash without any whitespace as so
            <code>"blog"=>"Load/category/id"</code>. A sampe url would be this <code>http://localhost/gliver/blog/pages/electronics/45</code></p>

            <p>The above is rather general purpose. A case in study is where you would like to be more specific and define a route that maps to a controller class with the particular method to be executed. Sounds right? Yeah. 
                Specifying a controller and method pair involves separating the controller class name with an @ symbol. We have a <span class="text-info">HomeController</span> class that among other things, helps us load user profiles
                for view by the account admin. We can define an adminusers routes that maps to this controller and to be particular, the getUser() method in order to assist in loading user profiles. Look at this <code>"adminusers"=>"Home@getUser"</code>. Of course each user on
                your system has a unique indentifier - this could be a unique integer value or id. Besides, you would like to load different pages for editing mode or for just viewing - sounds complex now? Things never got easier.... You can pass
                all these parameters in the url and give them names with which to access them in this manner <code>"adminusers"=>"Home@getUser/id/mode"</code>. <br> Here is a sample url   <code>http://localhost/gliver/adminusers/4957450723/edit</code> </p>
            <p>You may not just want to map a route to a controller alone, but go ahead and also specify a method to be executed along with the controller
                whenever that route is accessed in the url. We still gat you covered in this - in order to specify a controller method pair you check below... We have our <span class="text-info">HomeController</span>
                class that we would like ti invoke by calling 'adminhome' in the url.</p>
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

            <p>What would be the purpose of a framework if it were not able to handle requests? Proper and secure request handling is key to a strong framework that 
                wants to be efficient and at the same time safeguard your application and server resources. </p>
            <p>A request in Gliver is invoked by accessing a url, for example <code>http://localhost/gliver</code>. This would look rather simple but there is much that goes in here Rodger!</p>
            <p>For the security of our application, excecutable PHP code does not reside in the root of the application. With the use of rules in our .htaccess file in the root directory, all requests are re-routed into the 
                public directory. The second .htaccess file in the public directory would check for the nature of this request. If this is a request for an asset file i.e. a css, js, img files it would return the resource. 
                If not, it would direct this request to the index.php file - thereby infering that this would be a request to load a controller. The controller is the entry point into your application.</p>
            <p>This means that we would then invoke the routing class. This class would first check and disarm the request url against XXS(Cross Site Scripting), as a security measure, before going ahead to parse the url into controller/method pairs.</p>
            <p>When making a request Gliver enables you to send with the request data in the form of GET, POST and URL parameters. All these you access using the <span class="text-primary">Input</span> helper class. More would be discussed about the Input helper class in 
                the helpers section but you will need the parameter name in order to access its value. For example, if you submitted a form with field of name email in it, you will 
                access the value of the email parameter in this manner <code>Input::get('email')</code>. </p>
            <p>If you defined a route in this manner <code>'adminusers' => 'Home@getUser/id/mode',</code> and you have a url of this nature <code>http://localhost/gliver/adminusers/4957450723/edit</code>, you access the value of the id parameter in this 
                manner <code>Input::get('id')</code> - which would return <span class="text-primary">4957450723</span>.</p>
            <p class="alert alert-info">Gliver framework would only help you map a request to a controller and method pair to excecute passing along the parameters sent by request, besides securing your application from XXS. However, the rest of the logic on how, what and when your request is handled is code that you will have to write yourself.</p>
            
            <p>Gliver framework can detect the request method - which can either be GET or POST. With this feature comes a cool ability of Gliver to load a controller method based on your request method. 
                This means that you can use the same method name in different request methods. For example:</p>
            <p>Say you have a controller class named <span class="text-primary">LoginController</span> and would like to use the same method name for loading a login form and at the same time processing user login information - you will do this as below.</p>
            <p>Create two methods named <span class="text-primary">getLogin()</span> and <span class="text-primary">postLogin()</span>. You will access both methods with the same url as <code>http://localhost/gliver/login/login</code>. Accessing this url in your address bar 
                will load the user login form as the request method would be GET and the <span class="text-primary">getLogin</span> method would be excecuted. Once the user fills up the form, you specify in your 
                action attribute the same url for form submission as this <code>&lt;form action="http://localhost/gliver/login/login" method="post" ></code>. When the user then submits the form, 
                Gliver would detect this as a POST request and therefore submit your form to the <span class="text-primary">postLogin</span> method of the LoginController. So, there you go! Using the same method name to excecute different methods depening on the request method.</p>

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
            <p>Most likely when writing, testing and deploying your application you are going to break something - you are human, right? Informative error information is a very quick and effective way to 
                troubleshoot and fix the bug. All errors encoutered in your application are logged into the error.log file found in the <code>bin/logs/error.log</code> directory. However, you can also choose to display these errors to the screen - a good idea if you are working in development 
                mode to mend things a little faster. </p>

            <p>The setting on whether to display or hide and log error messages is defined in the config.php file where you set <code>"dev"=>true,</code> when 
                working in a development environment - this makes error messages to be displayed to the screen. Setting <code>"dev"=>false,</code> would turn off 
                error display on the screen, so that whenever there is an error message it is logged in the log file and a template error page is shown in the browser. This 
                is good for production mode to avoid exposing your application or server directory structure to a malicious jerk.</p>
            

            <p>You might however want to create custom error messages that might be more sensible to your users - who may not be techies...</p>
            <p>In that case, therefore, you might want to consider using <span class="text-info">Exceptions</span>. You might want to use your exceptions within a try...catch block, but that is 
            entrely up-to you. Create your own Exception class by extending the <span class="text-primary">Exceptions/BaseExceptionClass</span> so that you enjoy 
            all the built in functionality in the exception class already. In order to make use of this class, throw exceptions by passing the custom error message in this manner <code>throw new BaseExceptionClass("...your error message here...");</code> then catch this in a block 
            and display the error message by calling the errorShow() method like so <code>$BaseExceptionClassInstance->errorShow()</code>.</p>
        
        </div>

    </div>

</div>

@include('footer')