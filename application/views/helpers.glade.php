@include('header')


@include('navbar')

<div class="container">
    <div class="row">

        @include('sidebar')


        <div class="col-lg-9">

                <a href="{{Url::base('home/helpers')}}"><h1>Helpers</h1></a><br>

                <a href="{{Url::base('home/helpers#array')}}" class="lead">Array</a><br>
                <a href="{{Url::base('home/helpers#calendar')}}" class="lead">Calendar</a><br>
                <a href="{{Url::base('home/helpers#captcha')}}" class="lead">CAPTCHA</a><br>
                <a href="{{Url::base('home/helpers#cart')}}#cart" class="lead">Cart</a><br>
                <a href="{{Url::base('home/helpers#config')}}" class="lead">Config</a><br>
                <a href="{{Url::base('home/helpers#date')}}" class="lead">Date</a><br>
                <a href="{{Url::base('home/helpers#directory')}}" class="lead">Directory</a><br>
                <a href="{{Url::base('home/helpers#download')}}" class="lead">Download</a><br>
                <a href="{{Url::base('home/helpers#email')}}" class="lead">Email</a><br>
                <a href="{{Url::base('home/helpers#file')}}" class="lead">File</a><br>
                <a href="{{Url::base('home/helpers#form')}}" class="lead">Form</a><br>
                <a href="{{Url::base('home/helpers#html')}}" class="lead">HTML</a><br>
                <a href="{{Url::base('home/helpers#encryption')}}" class="lead">Encryption</a><br>
                <a href="{{Url::base('home/helpers#inflector')}}" class="lead">Inflector</a><br>
                <a href="{{Url::base('home/helpers#input')}}" class="lead">Input</a><br>
                <a href="{{Url::base('home/helpers#language')}}" class="lead">Language</a><br>
                <a href="{{Url::base('home/helpers#migration')}}" class="lead">Migration</a><br>
                <a href="{{Url::base('home/helpers#number')}}" class="lead">Number</a><br>
                <a href="{{Url::base('home/helpers#pagination')}}" class="lead">Pagination</a><br>
                <a href="{{Url::base('home/helpers#sath')}}" class="lead">Path</a><br>
                <a href="{{Url::base('home/helpers#security')}}" class="lead">Security</a><br>
                <a href="{{Url::base('home/helpers#session')}}" class="lead">Session</a><br>
                <a href="{{Url::base('home/helpers#smiley')}}" class="lead">Smiley</a><br>
                <a href="{{Url::base('home/helpers#string')}}" class="lead">String</a><br>
                <a href="{{Url::base('home/helpers#template_parser')}}" class="lead">Template Parser</a><br>
                <a href="{{Url::base('home/helpers#text')}}" class="lead">Text</a><br>
                <a href="{{Url::base('home/helpers#Typography')}}" class="lead">Typography</a><br>
                <a href="{{Url::base('home/helpers#unit_testing')}}" class="lead">Unit testing</a><br>
                <a href="{{Url::base('home/helpers#validation')}}" class="lead">Validation</a><br>
                <a href="{{Url::base('home/helpers#xml')}}" class="lead">XML</a><br>
                <a href="{{Url::base('home/helpers#zip')}}" class="lead">ZIP Encoding</a><br>


           
        <h4 id="array">Array</h4>
        <div class="col-lg-12" id='array_div'>
        <p>
            Array helper class functions helps in working with arrays.
         </p>
         <p>
         <ul style="list-style: circle;margin-left: 5%;">
             <div class='row'><li><a href='{{Url::base('helpers#arrayload')}}'>Loading Array Helper</a></li>
             </div>
             <div class='row'>
             <li><a href='{{Url::base('helpers#arrayfunc')}}'>Array Functions</a></li>
            </div>
         </ul>
         </p> 
         <div class='row'>&nbsp;</div>
         <h5 id='arrayload'>Loading Array Helper</h5>
         <p>
          
             Just add <code>use Array;</code> in controller or where you want to use. 
         </p>
         <h5 id='arrayfunc'>Array Functions</h5>
         <p>
             Following functions are available:
         <p>
             <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Function Name: <strong>parts</strong></h3>
                </div>
                <div class="panel-body">
                    <div class='row'>
                        <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>string $key The string to use as a separator for exploding the string.</li>
                                <li>string $string The string which is to be exploded into an array.</li>
                                <li>int $limit The value limits the number of elements to return.</li>
                            </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>Return:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>void</li>
                               </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                        <div class='col-lg-9'>
                            This method explodes a string into an array depending on the separator provided
                        </div>
                    </div>
              </div>
            </div>
         
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Function Name: <strong>join</strong></h3>
                </div>
                <div class="panel-body">
                    <div class='row'>
                        <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>string $glue The string to use to join the array elements into string.</li>
                                <li>array $array The string which is to be exploded into an array.</li>
                             </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>Return:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>void</li>
                               </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                        <div class='col-lg-9'>
                            This method joins an array into a string based on the joining parameter provided                        </div>
                    </div>
              </div>
            </div>
        </div>
         <div class='row' style="padding-bottom: 5%">&nbsp;</div>


         <h4 id="calendar">Calendar</h4>
            <div class="col-lg-12" id='calendar_div'>
            <p>
            Calendar helper class uses for calendar related functions. <br />
            Details are coming soon...
            </p 
        </div>
         <div class='row' style="padding-bottom: 5%">&nbsp;</div>


        <h4 id="captcha">Captcha</h4>
           <div class="col-lg-12" id='captcha_div'>
            <p>
            Captcha class uses for captcha related functions. <br />
            Details are coming soon...
            </p 
        </div>
         <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="cart">Cart</h4>
           <div class="col-lg-12" id='cart_div'>
            <p>
            Cart class uses for Cart related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

        <h4 id="config">Config</h4>
              <div class="col-lg-12" id='conf_div'>
            <p>
            Config class uses for configuration related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
        <h4 id="cookie">Cookie</h4>
           <div class="col-lg-12" id='cookie_div'>
            <p>
            Cookie class deals with cookie related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
                   
        <h4 id="date">Date</h4>
             <div class="col-lg-12" id='date_div'>
            <p>
            Date class uses for date functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="directory">Directory</h4>
            <div class="col-lg-12" id='dir_div'>
            <p>
            Directory class uses for Directory related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>    
        <h4 id="download">Download</h4>
           <div class="col-lg-12" id='down_div'>
            <p>
            This class uses for downloading related functionality. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>      
        <h4 id="email">Email</h4>
              <div class="col-lg-12" id='email_div'>
            <p>
            Email class uses for Email related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="encryption">Encryption</h4>
            <div class="col-lg-12" id='enc_div'>
            <p>
            Encryption class uses for encryption related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>    
        <h4 id="file">File</h4>
            <div class="col-lg-12" id='file_div'>
            <p>
            File class uses for File management related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="form">Form</h4>
               <div class="col-lg-12" id='form_div'>
            <p>
            Form class uses for Form related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>    
        <h4 id="html">HTML</h4>
           <div class="col-lg-12" id='html_div'>
            <p>
            This class uses for html related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
                   
        <h4 id="inflector">Inflector</h4>
            <div class="col-lg-12" id='inf_div'>
            <p>
            This class uses for inflector related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="input">Input</h4>
              <div class="col-lg-12" id='input_div'>
        <p>
            Input helper class functions helps in  HTTP Requests.
         </p>
         <p>
         <ul style="list-style: circle;margin-left: 5%;">
             <div class='row'><li><a href='{{Url::base('helpers#inload')}}'>Loading Input Helper</a></li>
             </div>
             <div class='row'>
             <li><a href='{{Url::base('helpers#infunc')}}'>Input Functions</a></li>
            </div>
         </ul>
         </p> 
         <div class='row'>&nbsp;</div>
         <h5 id='inload'>Loading Input Helper</h5>
         <p>
          
             Just add <code>use Input;</code> in controller or where you want to use. 
         </p>
         <h5 id='infunc'>Input Functions</h5>
         <p>
             Following functions are available:
         <p>
             <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Function Name: <strong>get</strong></h3>
                </div>
                <div class="panel-body">
                    <div class='row'>
                        <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>void</li>
                                </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>Return:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>return current $_POST or $_GET data</li>
                               </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                        <div class='col-lg-9'>
                            This method return current $_POST or $_GET data
                            <p>
                                See following code snippet <bR><br />
                                <code>
                                    $input = Input::get(); // Call helper class function. It returns request/response array
                                    <br /><br />
                                    $data['email'] = $input['inputEmail']; // assign request/response array element to PHP variable.
                                    
                                </code>
                            </p>
                        </div>
              </div>
            </div>
         
          
        </div>
              </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>       
        <h4 id="language">Language</h4>
       <div class="col-lg-12" id='lang_div'>
            <p>
            This class uses for language related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>       
        <h4 id="migration">Migration</h4>
           <div class="col-lg-12" id='mig_div'>
            <p>
            This class uses for migration functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
            <h4 id="number">Number</h4>
          <div class="col-lg-12" id='number_div'>
            <p>
            Number class uses for numbers related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="pagination">Pagination</h4>
           <div class="col-lg-12" id='pag_div'>
            <p>
            This class uses for pagination related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
                   
        <h4 id="security">Security</h4>
            <div class="col-lg-12" id='sec_div'>
            <p>
            This class uses for security related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="session">Session</h4>
               <div class="col-lg-12" id='sess_div'>
        <p>
            This class functions are useful for session related functionality.
         </p>
         <p>
         <ul style="list-style: circle;margin-left: 5%;">
             <div class='row'><li><a href='{{Url::base('helpers#sessload')}}'>Loading Session Helper</a></li>
             </div>
             <div class='row'>
             <li><a href='{{Url::base('helpers#sessfunc')}}'>Session Functions</a></li>
            </div>
         </ul>
         </p> 
         <div class='row'>&nbsp;</div>
         <h5 id='sesload'>Loading Session Helper</h5>
         <p>
          
             Just add <code>use Session;</code> in controller or where you want to use. 
         </p>
         <h5 id='infunc'>Session Functions</h5>
         <p>
             Following functions are available:
         <p>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>start</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                    </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                               This method initializes the session environment.
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                        Session::start(); //new server session will start 

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>set</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>string $key Then key with which to store this data.</li>
                                    <li>mixed $input The input data to be stored.</li>
                                </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                              This method stores data into session
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                        Session::set($key); //store $key in session  

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
                
         
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>get</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>string $key The key with which to search session data</li>
                                    </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>mixed The value stored in session</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                               This method returns a session data by key
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                        Session::get($key); //get session data stored against $key

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
         
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>flush</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                                This method erases all session data
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                        Session::flush(); // remove all session data 

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
                    <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>has</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>string $key</li>
                                </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>bool true|false Returns true if key was found or false if null</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                                This method checks if a session with a particular key has been set
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                       $is_key =  Session::has(); // return true or false 

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
              </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>      
        <h4 id="smiley">Smiley</h4>
        <div class="col-lg-12" id='smi_div'>
            <p>
            This class uses for smiley related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
                   
        <h4 id="string">String</h4>
           <div class="col-lg-12" id='str_div'>
            <p>
            String class uses for string manipulation. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="template_parser">Template</h4>
           <div class="col-lg-12" id='temp_div'>
            <p>
            This class uses for template related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>    
        <h4 id="text">Text</h4>
           <div class="col-lg-12" id='text_div'>
            <p>
            This class uses for inflector related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="typography">Typography</h4>
        <div class="col-lg-12" id='typo_div'>
            <p>
            This class uses for typography related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
        <h4 id="unit">Unit</h4>
        <div class="col-lg-12" id='text_unit'>
            <p>
            This class uses for unit related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
                   
        <h4 id="validation">Validation</h4>
            <div class="col-lg-12" id='val_div'>
            <p>
            This class uses for Validation related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
        <h4 id="xml">XML</h4>
            <div class="col-lg-12" id='xml_div'>
            <p>
            This class uses for XML related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
        <h4 id="zip">Zip Encoding</h4>
            <div class="col-lg-12" id='text_zip'>
            <p>
            This class uses for zip encoding related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>       
    </div>

    </div>

</div>
@include('footer')