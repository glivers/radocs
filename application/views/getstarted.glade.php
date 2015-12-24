@include('header')


@include('navbar')

<div class="container" style='margin-bottom: 20%'>
    <div class="row">
        

        @include('sidebar') 

        <div class="col-lg-9 lmargin">

                <a href="{{Url::base('home/getstarted')}}"><h1>Getting Started</h1></a><br>

                <a href="{{Url::base('home/getstarted#glance')}}" class="lead">Gliver at a glance</a><br>
                <a href="{{Url::base('home/getstarted#supported_features')}}" class="lead">Supported Features</a><br>
                <a href="{{Url::base('home/getstarted#flowchart')}}" class="lead">Application Flow Chart</a><br>
                <a href="{{Url::base('home/getstarted#configuration')}}" class="lead">Configuration</a><br>
                <a href="{{Url::base('home/getstarted#routing')}}" class="lead">Routing</a><br>
                <a href="{{Url::base('home/getstarted#input')}}" class="lead">Request/Input</a><br>
                <a href="{{Url::base('home/getstarted#views')}}" class="lead">Views/Responses</a><br>
                <a href="{{Url::base('home/getstarted#errors')}}" class="lead">Errors/Logging</a><br>


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
                <li>Helper Classes for all general purpose tasks like Form building, Calendar,Captcha, Cart, Directory, Email, Pagination, Security, Unit testing...you needed more? Talk about it <a href="https://github.com/gliver-mvc/gliver/issues">here</a>  and it will be up tomorrow morning.</li>
           </ul>
               
            <h3 id="flowchart" class="text-danger">Application Flowchart</h3>
                <p>
                    <img src="{{ Url::assets('img/gliverarch.png') }}" alt="gliver application flow chart" width="100%" />
                </p>  
               <div class='row' style="padding-bottom: 5%">&nbsp;</div>
 
            <h3 id="configuration" class="text-danger">Configuration</h3>
                
            <p>
                    There are two configuration(<code>config/config.php</code> and <code>config/database.php</code>) files for Gliver framework. Both files are in <code>config</code> Directory.
                    
                </p>
                <h5>Basic Configuration</h5>
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
                         
                <p>
                    Basic configuration can configure in <code>config/config.php</code> file. 
                    You can do default settings of some important parameters like page tile, server name,root directory. You can assign default controller and default method of that controller in this file.
                    
                </p>
                <h5>Database Configuration</h5>
                <p>
                    We can configure database related settings in this <code>config/database.php</code> file. 
                    Here different database management servers settings are available. You can choose your choice database server and add your Database server setting in this file. 
                    You have to make your database server name as default(first parameter of array in <code>config/database.php</code> ).
                    
                </p>
                
                
                <div class='row' style="padding-bottom: 5%">&nbsp;</div>
 
            <h3 id="routing" class="text-danger">Routing</h3>
                <p>
                    Routing can be configure in <code>application/routes.php</code> file.
                    
                    Here is sample code 
                    <div class='row'>&nbsp;</div>
                    <h5>Router - Example 1 <span>&nbsp;&nbsp;&nbsp; application/routes.php</span></h5>
                    <div class="well">
                        <code>
                        return array(
                        <br /><br />
                        /**<br />
                         *The home route.<br />
                         *This route loads the home controller and use index method of home controller.<br />
                         *@param null<br />
                         *@return void<br />
                         */<br /><br />
                        'homepage' => 'home@index',<br /><br />
                        /**<br />
                         *This routes loads the search users page.<br />
                         *@param null<br />
                         *@return void<br />
                         */<br /><br />
                        'userspage' => 'home'<br /><br />

                        );<br />
                    </code>
                    </div>
                </p>    
                
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>

            <h3 id="input" class="text-danger">Request / Response</h3>
            <h5 >Request Handling</h5>
            <p>
                Request handling in Gliver framework is handled through Input Helper class(<code>system/Helpers/Input.php</code>)
                You can call this class in Controller. In following example, you will see how Input Helper class is used to get HTTP Requests.
            </p>
            <h5>Helper - Example 1: Request/Input <span>&nbsp;&nbsp;&nbsp; application/controllers/HelloController.php</span></h5>
            <div class="well">
                <code>
                    namespace Controllers;
            <div class='row'>&nbsp;</div>
 

            use Helpers\View;
            <div class='row'>&nbsp;</div><div class='row'>&nbsp;</div>

            class HelloController extends BaseController{ 
            <div class='row'>&nbsp;</div><div class='row'>&nbsp;</div>

                public function Index()
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                
                { 
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div> 
                <div style='padding-left:5%'>$input = Input::get();</div> 
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                <div style='padding-left:5%'>$data['email'] = $input['inputEmail'];// where 'inputEmail' is textbox name in Form</div>
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div> 
                }	
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
            }
            <div class='row'>&nbsp;</div>
            <div class='row'>&nbsp;</div> 
                </code>
                
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>
           
            <h3 id="views" class="text-danger">Views/Responses</h3>
                <p>
                    We discussed this in <a href='{{ Url::base('brief#views') }}'>View</a> Section. 
                    For sake of completion, we are putting that example here:
                </p>
                <h5>Controller - Example 1: Views/Responses <span>&nbsp;&nbsp;&nbsp; /application/controllers/HelloController.php</span></h5>
              
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
                <h5>View - Example 1: Views/Responsers<span>&nbsp;&nbsp;&nbsp; /application/views/helloword/helloword.php</span></h5>
              
                <div class="well">
                <p>
                <code>
                    <span><</span>title<span>></span><span> {<span>{</span> $title <span>}</span><span>} </span>
                 <span><</span><span>/</span>title<span>></span><span>
                </code>
                </p>
              </div>
                
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>
   
            <h3 id="errors" class="text-danger">Errors/Logging</h3>
                <p>
                    Gliver extends basic exception handling through Helper exception class (<code>/system/Helpers/Exceptions/HelperException.php</code>)
                </p> 
                <p>In following Code snippet, we used exception handling in Helper Form class using HelperException Class.</p>
                <h5>Helper - Example 1:Exception Handling <span>&nbsp;&nbsp;&nbsp; /system/Helpers/Form.php</span></h5>
              
                <div class="well">
                    <p>
                    <code>
                        <br />
                        public static function open($form_attr=array()) 
                        {<br /><br />
                            //this try block is excecuted to enable throwing and catching of errors as appropriate.<br /><br />
                        try {<br /><br />

                        //this block throwing exception if method argument is not an array
                        <br /><br />
                            if(! is_array($form_attr)){
                         <br /><br />  
                                throw new HelperException(sprintf('Expecting array of form attributes.e.g.$form_attr = array(\'name\'=>\'form1\',\'action\'=>\'post\')',$form_attr));
                            <br /><br />
                            }
                            <br /><br />
                                $form_attr_str='';<br /><br />
                                foreach($form_attr as $key=>$val) { <br /><br />
                                    $form_attr_str .= $key.'="'.$val.'" ';<br /><br />
                                }<br /><br />
                                //$form_attr_str = implode('= ',$form_attr);<br /><br />
                                return "<form .$form_attr_str.' >';<br /><br />
                            }<br /><br />

                            catch(BaseException $e) {<br /><br />

                                //echo $e->getMessage();<br /><br />
                                $e->show();<br /><br />

                            }<br /><br />

                            catch(Exception $e) {<br /><br />

                              echo $e->getMessage();<br /><br />

                            }<br /><br />

                        }
                        <div class='row'>$data['title'] = 'Hello Word';</div>
                        <div class='row'>&nbsp;</div>

                        View::render('helloword/helloword',$data);
                    </code>
                    </p>
                </div>
                
                <div class='row' style="padding-bottom: 5%">&nbsp;</div>

        </div>

    </div>

</div>

@include('footer')