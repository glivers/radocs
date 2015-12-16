@include('header')


@include('navbar')

<div class="container" style='margin-bottom: 20%'>
    <div class="row">
        

        @include('sidebar')

        <div class="col-lg-9 lmargin">

           <h4 id="glance">Gliver at a glance</h4>
           <h4 id="glance">Gliver: An extensible light weight Application framework</h4>
            
           <p>
               Gliver is an application framework based on Laravel. It is an essential tool for PHP web developers who want easy to use yet powerful framework.
               It is specially designed for each level of PHP developer. Novice PHP developers can benefit from this by simple installation and start developing good applications.
               It is equally useful for middle level programmer to proficient programmer with very useful Helper classes. 
           </p><p>   Its ORM based database architecture is beneficial for developing scalable and complex Large scale applications. 
               Memcache is also supported in this framework. Developers who want not to use structured database have freedom to use NoSQL database like MongoDB.
               
           
             </p>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>
        
            <h4 id="supported_features">Supported Features</h4>
                <p>
                </p>
                 <p>
               Some considerable features of Gliver are:
           <ul style='list-style: circle'>
               <div class='row' style='padding-left: 3%'><li>It is light Weight. Unlike Laravel, it is very light weight but powerful.</li></div>
               <div class='row' style='padding-left: 3%'><li>Gliver is fast and give you better performance then other frameworks</li></div>
                <div class='row' style='padding-left: 3%'><li>With easy to use extensible architecture, you can extend it on all ends.</li></div>
                <div class='row' style='padding-left: 3%'><li>It is supported MVC architecture which is need of the day.</li></div>
                <div class='row' style='padding-left: 3%'><li>This framework provides very clean URL and .htaccess is already managed for clean urls. </li></div>
                <div class='row' style='padding-left: 3%'><li>Gliver does not need any separate engine. It uses Gliver template engine which is very much same with PHP code.</li></div>
                <div class='row' style='padding-left: 3%'><li>Helper Classes for all general purpose tasks like FORM building, Calendar,Captcha Cart,Directory,Download,Email,Pagination, Security, Unit testing and many more</li></div>


           </ul>
               
           </p>  
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>

            <h4 id="flowchart">Application Flowchart</h4>
                <p>
                    <img src="{{ Url::assets('img/gliverarch.png') }}" alt="gliver application flow chart" width="100%" />
                </p>  
               <div class='row' style="padding-bottom: 5%">&nbsp;</div>
 
            <h4 id="configuration">Configuration</h4>
                
            <p>
                    There are two configuration(<code>config/config.php</code> and <code>config/database.php</code>) files for Gliver framework. Both files are in <code>config</code> Directory.
                    
                </p>
                <h5>Basic Configuration</h5>
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
 
            <h4 id="routing">Routing</h4>
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

            <h4 id="input">Request / Response</h4>
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
           
            <h4 id="views">Views/Responses</h4>
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
   
            <h4 id="errors">Errors/Logging</h4>
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