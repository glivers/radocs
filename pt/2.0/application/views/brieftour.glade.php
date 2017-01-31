@include('header')


@include('navbar')

<div class="container" >

    <div class="row">
        

        @include('sidebar')
            
        <div class="col-md-9">
            
                <a href="{{Url::link('home/brief')}}"><h1>Brief Tour</h1></a><br>

                <a href="{{Url::link('home/brief#controllers')}}" class="lead">Controllers</a><br>
                <a href="{{Url::link('home/brief#views')}}" class="lead">Views</a><br>
                <a href="{{Url::link('home/brief#templating')}}" class="lead">Templating</a><br>
                <a href="{{Url::link('home/brief#models')}}" class="lead">Models</a><br>




            <h3 id="controllers" class="text-danger">Controllers</h3>

            <p>Controllers form the entry point into your application. It is from here that you can call your model classes, libraries and load the view files, among other things... </p>
<pre>
&lt;?php <span class="text-warning">namespace Controllers;</span>

/**
 *This class loads the application homepage
 *<span class="text-danger">@author</span> Geoffrey Bans &lt;geoffreybans@gmail.com>
 *<span class="text-danger">@copyright</span> 2015 - 2020 Geoffrey Bans
 *<span class="text-danger">@category</span> Controllers
 *<span class="text-danger">@package</span> Controllers\Home
 *<span class="text-danger">@link</span> https://github.com/gliver-mvc/gliver
 *<span class="text-danger">@license</span> http://opensource.org/licenses/MIT MIT License
 *<span class="text-danger">@version</span> 1.0.1
 */

<span class="text-danger">use</span> <span class="text-warning">Helpers\View\View;</span>

<span class="text-primary">class</span> HomeController <span class="text-danger">extends</span> <span class="text-success">BaseController</span>  {

    /**
     *This method loads the preface page.
     *<span class="text-danger">@param</span> null
     *<span class="text-danger">@return</span> void
     */
    <span class="text-danger">public</span> <span class="text-primary">function</span> <span class="text-success">getIndex()</span>
    {
        //get the ending date today
        <span class="text-primary">View</span>::render('home/index');

    } 

}  
</pre>         

            
           <p>Controllers reside in the <code>application/controllers/</code> directory - and are always autoloaded as need be, so all you need is define the code to be executed and the excecution would proceed seamlessly. When defining your 
            controllers, you wanna ensure you stick to this pattern:</p>
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
            <p>Create two methods named <span class="text-primary">getLogin()</span> and <span class="text-primary">postLogin()</span>. You will access both methods with the same url as <code>http://localhost/gliver/login/login</code>. Accessing this url in your address bar 
                will load the user login form as the request method would be GET and the <span class="text-primary">getLogin</span> method would be excecuted. Once the user fills up the form, you specify in your 
                action attribute the same url for form submission as this <code>&lt;form action="http://localhost/gliver/login/login" method="post" ></code>. When the user then submits the form, 
                Gliver would detect this as a POST request and therefore submit your form to the <span class="text-primary">postLogin</span> method of the LoginController. So, there you go! Using the same method name to excecute different methods depening on the request method.</p>




            <h3 id="views" class="text-danger">Views</h3>


            <p>The view class enables you to invoke a response to the url request. This can in the form of loading view files to provide a graphical interface to enable your users to 
              interact with your application or set header for sending pdf, json, xml responses among others...</p>

            <p>You call the view class from the controller by first requiring it using the statement <code>use Helpers\View\View;</code> after which you access the View class and methods directly without creating an instance. For instance, this is how you will load a view file <code>View::render('home/users', $data);</code> More methods available in the View class 
              are described in the Helpers section</p>

            <p class="alert alert-info">All view files are located in the <span class="text-info">application/views</span> directory.</p>
            
            <p>If you put your view files in a subdirectory under the views directory, you access them by separating the directories with a forward slash. Say 
              you have put your index.glade.php view file in your home subdirectory under the views folder - in order to load this view from the view class, you specify <span class="text-warning">View::render('home/index')</span>.</p>

            <p>Most of the time when you are loading your views, you may need to pass variables along so that their values are injected into the views. This is completely in built in Gliver. All you need to do is pass the variables in an array and then access them using the array key.</p>

            <p>Say we would like to dynamically get the site title from the controller and use it in our view file in this manner <code>&lt;title>&lt;?php echo $title; ?>&lt;/title></code>. Create a $data array and store the value of the title as a key in the array 
              as <code>$data['title'] = "Gliver - Official Site";</code>, then pass this as a second parameter to the View::render() method as <code>View::render('home/index', $data);</code></p>

            <h3 id="templating" class="text-danger">Templating</h3>

            <p>Out of the box, Gliver has an in built templating engine called glade. This engine is rather simple and has been kept light-weight for the purpose of faster view file parsing - so there are no complicated methods, only the most commonly repeated actions in view files have been abstracted.</p>

            <p>All view files should have a <span class="text-primary">.glade.php</span> extension in order to be parsed by the View loader class. When specifying the view file though, you do not need to add the file 
              extension as this is enabled by default. Say you have a file named <span class="text-success">index.glade.php</span> in your root views directory. In order to load this view file from the View class you will 
              use this syntax <code>View::render('index');</code> and this would definitely load the view file at <code>application/views/index.glade.php</code>.</p>

            <p>Glade basically has the following template methods that you can use in your view files</p>

            <h4 class="text-primary">Echo </h4>

            <p>In regular PHP in order to echo a string to the browser, you'd open and close PHP tags then use the echo statement in between the tags. You have more than 5 variables to echo in your 
              view files and you are already wishing there was an alternative. Look at this <code>&lt;?php echo $username; ?></code>, ugly? Huh? Let's make it elegant -> <code><?php echo '{'; ?>{$username}}</code>. That's all you need to do 
              to print out the value of a variable to the browser in glade template files. <code>&lt;p><?php echo '{'; ?>{$username}}&lt;/p></code></p>

            <h4 class="text-primary"><?php echo "@";?>include </h4>

            <p>Subdeviding your view files into parts saves you time when you need to make updates. Say you have 100 view files that have the same content in the header and footer. You might want to ensure that you separate the header and footer and put them 
              in a place where all the other view files refrence them. So if you need to make a change to the footer content, you just update one file - the footer, and all the other view files would be up-to date, as opposed to if you would have had to 
              iterate through all the 100 views files updating header and footer content.</p>
            
            <p>Glade enables you to include sub-views into your view file using the <span class="text-info">@<?php echo 'include()';?></span> statement, passing the name of the file to include as the first parameter.</p>

            <p>Say you have a header.glade.php and footer file in your home directory and would like to pull it into your home/users page. </p>

<pre class="bg-success">
@<?php echo"include('home/header')";?><br>
&lt;div class="container">
    &lt;div class="row">
        &lt;div class="col-lg-12">

        &lt;/div>
    &lt;/div>
&lt;/div>

@<?php echo"include('home/footer')";?>
</pre>

            <h4 class="text-primary"><?php echo "@";?>if...<?php echo "@";?>endif </h4>
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

<pre class="bg-success">
&lt;?php <span class="text-warning">namespace Models;</span>

/**
 *This models handles all user management datatabase operations
 *<span class="text-danger">@author</span> Geoffrey Bans &lt;geoffreybans@gmail.com>
 *<span class="text-danger">@copyright</span> 2015 - 2020 Geoffrey Bans
 *<span class="text-danger">@category</span> Models
 *<span class="text-danger">@package</span> Models\UsersModel
 *<span class="text-danger">@link</span> https://github.com/gliver-mvc/gliver
 *<span class="text-danger">@license</span> http://opensource.org/licenses/MIT MIT License
 *<span class="text-danger">@version</span> 1.0.1
 */

<span class="text-primary">class</span> UsersModel <span class="text-danger">extends</span> <span class="text-success">Model</span>  {

  /**
  *<span class="text-danger">@var </span>string The name of the table associated with this model
  */
  <span class="text-danger">protected static $table = 'users';</span> 

  /**
   *This method gets the records of all users from the database
   *
   *<span class="text-danger">@param</span> null
   *<span class="text-danger">@return</span> array The users data in an array format
   */
  <span class="text-danger">public static</span> <span class="text-primary">function</span> <span class="text-success">all()</span>
  {
    //excecute query to return all users
    <span class="text-danger">$users = static::Query()->from(self::$table)->all();</span>

    //return the rows found
    <span class="text-danger">return $users;</span>

  }

}
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
        </div>
    
    </div>

</div>

@include('footer')
