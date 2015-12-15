@include('header')


@include('navbar')

<div class="container" >

    <div class="row">
        

        @include('sidebar')
            
        <div class="col-lg-9">
           <h4 id="controllers">Controllers</h4>
            <p> You place all your controller classes in the <code>application/controllers</code> directory.</p>
            <p>The entry point into your application is via the controllers. So it is from here that all the code for your application is executed. 
            When writing your controller, you need to specify the namespace so that the autoloader can detect it. Besides, all controllers extend the <code>BaseController</code> class. </p>
            <p>For example,let's try to create a simple <code>HelloController</code> class.</p>
            <h5>Controller - Example 1: Hello Word <span>&nbsp;&nbsp;&nbsp; /application/controllers/HelloController.php</span></h5>
             <div class="well">
            <p>
            <code>
                <<span>?</span>php namespace Controllers; //controller namespace included
            <div class='row'>&nbsp;</div>
 

            use Input; //Input helper class is added
            <div class='row'>&nbsp;</div><div class='row'>&nbsp;</div>

            class HelloController extends BaseController {  // class hellocontroller defined
            <div class='row'>&nbsp;</div><div class='row'>&nbsp;</div>

                public function Index() //hellocontroler method index is defined
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                
                { 
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                    
                <div style='padding-left:5%'>echo 'hello word!';</div> 
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
                <p>  <strong>Note!</strong> The first thing to note is that the name of the php file wherein you have your class must be the same as the name of the Controller class. One file can only contain one controller class
                </p>
            </div>
            
                       
            <h4 id="views">Views</h4>
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
            <h4 id="models">Models</h4>
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
