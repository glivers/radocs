@include('header')


@include('navbar')

<div class="container" >

    <div class="row">
        

        @include('sidebar')
            
        <div class="col-md-9">
            
                <a href="{{Url::base('home/brief')}}"><h1>Brief Tour</h1></a><br>

                <a href="{{Url::base('home/brief#controllers')}}" class="lead">Controllers</a><br>
                <a href="{{Url::base('home/brief#views')}}" class="lead">Views</a><br>
                <a href="{{Url::base('home/brief#models')}}" class="lead">Models</a><br>




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
</pre>         

            
           <p>Controllers reside in the <code>application/controllers/</code> directory - and are always autoloaded as need be, so all you need is define the code to be executed and the excecution would proceed seamlessly. When defining your 
            controllers, you wanna ensure you stick to these pattern:</p>
            <ul>
                <li>The file that contains your controller class must reside within the <code>application/controllers</code> directory or subdirectory</li>
                <li>One file can only contain one controller class.</li>
                <li>Controller class files must have a <span class="text-info">.php</span> file extension. The name of the controller class must be the same as the name of the file: <span class="text-info">HomeController</span> class should be in <span class="text-info">HomeController.php</span>. </li>
                <li>Controller class and file names must have the 'Controller' suffix as <span class="text-info">HomeController</span>.</li>
                <li>When accessing controllers from a url, you only specify the controller name without the 'Controller' suffix as <span class="text-danger">http://localhost/gliver/home</span></li>
                <li>All controllers classes must extend the <span class="text-primary">BaseController</span> class.</li>
                <li>You want to ensure you namespace your controllers, so that they will be autoloaded as expected. If your controller class resides in the <span class="text-warning">application/controllers</span> directory 
                    then use <span class="text-primary">namespace Controllers;</span> else if your controller resides within a subdirectory like 'Admin' as <span class="text-warning">application/controllers/Admin</span> use <span class="text-primary">namespace Controllers\Admin;</span> - this follows psr-4 namespace pattern.</li>

            </ul>

            <p class="alert alert-info">Use PHPDoc commenting style to add metadata to your class - as part of your documentation. This would help you and other developers looking at your code understand the purpose of your controller 
                classes, methods and expected behavior of the controllers.</p>
                       
            <h3 id="views" class="text-danger">Views</h3>
                <p>
                    
               A view contains HTML and keep separate business business logic from presentation logic. 
               As it is a MVC framework, so View is not directly called. Each view is called by any controller. 
               </p>
                <p>You can create your views in <code> application/views</code> directory. You can either create view in <code>application/views</code> directory or in sub directory in views 
                    such as  <code> application/views/helloword</code>. View is a simple php file.
                    
                </p>
                <h5>View - Example 2: <span>&nbsp;&nbsp;&nbsp;Hello Word View /application/views/helloword/helloword.php</span></h5>
             <div class="well">
            <p>
            <code>
                <span><</span>html<span>></span>
                <div class='row'>&nbsp;</div>
                <span><</span>head<span>></span>
                <div class='row'>&nbsp;</div>
                <span><</span>title<span>></span>Hello Word Title
                <span><</span><span>/</span>title<span>></span>
                <div class='row'>&nbsp;</div>
                <span><</span><span>/</span>head<span>></span>
                <div class='row'>&nbsp;</div>
                <span><</span>body<span>></span>
                <div class='row'>&nbsp;</div>
                 Hello Word Body
                <div class='row'>&nbsp;</div>
                <span><</span><span>/</span>body<span>></span>
                <div class='row'>&nbsp;</div>
                <span><</span><span>/</span>html<span>></span>
             
            </code>
            </p>
            </div>
                <p>
                   Now, We will call this view from controller to show this view. 
                    
                </p>
            <h5>Controller - Example 2: Hello Word <span>&nbsp;&nbsp;&nbsp; /application/controllers/HelloController.php</span></h5>
             <div class="well">
            <p>
            <code>
            <<span>?</span>php namespace Controllers;
            <div class='row'>&nbsp;</div>
 

            use View;
            <div class='row'>&nbsp;</div><div class='row'>&nbsp;</div>

            class HelloController extends BaseController {  
            <div class='row'>&nbsp;</div><div class='row'>&nbsp;</div>

                public function Index()
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                
                { 
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                 // Class heeloword.php view from views/helloword is called. Render function will display html of this view.   
                <div style='padding-left:5%'>View::render('helloword/helloword'); 
                    
                </div> 
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                
                }	
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
            }
            <div class='row'>&nbsp;</div>
            <div class='row'>&nbsp;</div> 

            
            </code>
            </p>
            </div>
                 <div class="alert alert-info" role="alert">
                <p>  <strong>Note!</strong>When we call view in example 3, we did not include .php. We only use php file name "helloword" without php extension
                </p>
            </div>
            
            <p>This framework suggests to use a Template engine called Gliver template engine. It is very easy and yet powerful template engine.
            You can use php variables, include files, use  loops or if/else very easily.
            For example in view you declare title variable and associate view as 
            
            <h5>Controller - Example 3: Hello Word <span>&nbsp;&nbsp;&nbsp; /application/controllers/HelloController.php</span></h5>
              
            <div class="well">
                <p>
                <code>
                    $data['title'] = 'Hello Word';  
                    <div class='row'>&nbsp;</div>

                    View::render('helloword/helloword',$data);
                </code>
                </p>
              </div>
            
            </p>
            <p>
                Now, assign this variable using Gliver template engine as
                <h5>View - Example 3: Hello Word <span>&nbsp;&nbsp;&nbsp; /application/views/helloword/helloword.php</span></h5>
              
                <div class="well">
                <p>
                <code>
                    <span><</span>title<span>></span><span> {<span>{</span> $title <span>}</span><span>} </span>
                 <span><</span><span>/</span>title<span>></span><span>
                </code>
                </p>
              </div>
            </p>
            <p>
                You can include files from this code snippet <code><span>@</span>include('header')</code>. This code snippet include <code>header.php</code>
                file in current view file. 
            </p>
            <p>
                You can use <code>foreach</code> and <code><if></code> using <code>@</code> symbol. 
                For example, this code show all users from user array. 
                <h5>View - Example 5: User profile <span>&nbsp;&nbsp;&nbsp; /application/views/users/profile.php</span></h5>
                
                <div class="well">
                <p>
                <code>
                    <br />
                    <br />
                    <span><</span>!-- $users array from view is now iterating through foreach loop -->
                    <br />
                    <br />
                    
                    <span>@</span>foreach ($users as $user)
                   <div class='row'>&nbsp;</div>
                     Email address:
                     <div class='row'>&nbsp;</div>
                      <span><</span>!-- $user array element email is being display -->
                    <br />
                    <br />
                     <span>{</span><span>{</span> $user['email']<span>}</span><span>}</span>
                     <div class='row'>&nbsp;</div>
                     
                     First Name:
                     <div class="row">&nbsp;</div>
                     <span>{</span><span>{</span> $user['fname']<span>}</span><span>}</span>
                     <div class="row">&nbsp;</div>
                     Last Name: 
                     <div class="row">&nbsp;</div>
                     
                     <span>{</span><span>{</span> $user['lname']<span>}</span><span>}</span>
                     <div class="row">&nbsp;</div>
                    <span>@</span>endforeach

                     <div class="row">&nbsp;</div>
                </code>
                </p>
              </div>
                
            </p>


            <h3 id="models" class="text-danger">Models</h3>
                <p>
                    Model are used to add business logic to your application. You can create model class in <code>/application/model</code> directory.
                    Controller calls model and send appropriate response to view using that model. 
                    For example, if you want to view all user records from <code>users</code> table then following code snippet will help.
                <h5>Model - Example 6: User profile <span>&nbsp;&nbsp;&nbsp; /application/models/UsersModel.php</span></h5>

                <div class="well">
                <p>
                <code>
                    <div class='row'>&nbsp;</div>
                    <span><</span>?</span>php namespace Models;
                   <div class='row'>&nbsp;</div>
                    class UsersModel extends Model{
                     <div class='row'>&nbsp;</div>
                    protected static $table = 'users';
                     <div class='row'>&nbsp;</div>
                    public static function getUsers()
                    <div class='row'>&nbsp;</div>

                    {
                    <div class='row'>&nbsp;</div>

                        $obj = static::Query()->from(self::$table)->all();
                        <div class='row'>&nbsp;</div>

                        return $obj;
                        <div class='row'>&nbsp;</div>

                    }
                      
                     <div class="row">&nbsp;</div>
                </code>
                </p>
              </div>
                <p>
                    
                    You can call model from following example
                    
                </p>
                <p>
                  <h5>Controller - Example 6: User profile <span>&nbsp;&nbsp;&nbsp; /application/controllers/UserController.php</span></h5>

                <div class="well">
                <p>
                <code>
                    <div class='row'>&nbsp;</div>
                    <span><</span>?</span>php namespace Controllers;
                   <div class='row'>&nbsp;</div>
                   use Models\UsersModel;

                   <div class='row'>&nbsp;</div>
                    class UserController extends BaseController {
                     <div class='row'>&nbsp;</div>
                    public function Index()
                     <div class='row'>&nbsp;</div>
                    UsersModel::getusers();
                    <div class='row'>&nbsp;</div>

                    
                     <div class="row">&nbsp;</div>
                </code>
                </p>
              </div>  
                    
                    
                </p>
                    
        </p>
        
        </div>
    
    </div>

</div>

@include('footer')
