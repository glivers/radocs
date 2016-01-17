@include('header')


@include('navbar')

<div class="container">

    <div class="row">

            @include('sidebar')

            <div class="col-lg-9">

            	<a href="{{Url::link('home', 'database')}}"><h1>Database</h1></a><br>

                <a href="{{Url::link('home', 'database#basic_usage')}}" class="lead">Basic Usage</a><br>
                <a href="{{Url::link('home', 'database#query_builder')}}" class="lead">Query Builder</a><br>
                <a href="{{Url::link('home', 'database#eloquent')}}" class="lead">Intuitive ORM</a><br>
                <a href="{{Url::link('home', 'database#schema_builder')}}" class="lead">Schema Builder</a><br>
                <a href="{{Url::link('home', 'database#migration_seeding')}}" class="lead">Migration/Seeding</a><br>
                <a href="{{Url::link('home', 'database#errors')}}" class="lead">Errors/Logging</a><br>


                        <h3 id="basic_usage" class="text-danger">Basic Usage</h3>
			             <p>Gliver supports database usage in your application with an in built ORM that makes your database access, query generation and execution a snap!</p>
                         <p>Out of the box, Gliver has support for <code>MySQL</code> database usage.</p>
                             
                                                        
 			            </p>
                        <h3 id="basic_usage" class="text-danger">Configuration</h3>
                        <p>
                            Database configuration file is located at <code>config/database.php</code>
                            In the database configuration file, you place your credentials for connecting to the database for the model class to be able to access the database. You can specify as many setting 
                            options as are available in the <code>database.php</code>  file. However, you can only user one database driver at a time. After specifying the database settings of your choice, 
                            specify the particular database name that you would like to use as the <code>default</code>.
           				</p>
<pre>
/*
 *Define the default driver
 */
'default' => 'mysql',
/*
 *Settings for the mysql database
 */
'mysql' => array(
    /**
     *Define the database server hostname
     */
    'host'      => 'localhost',
    /*
     *Define the username
     */
    'username'  => 'root',
</pre>
			<h3 id="query_builder" class="text-danger">Query Builder</h3>
			    <p>With the ORM comes the query builder to make your work even easier. You don't have to manually write SQL queries manually - all you do is make use 
                of model methods that already have this functionality abstracted for you  </p>
                <p>There are different query generator methods depending on the nature of the query string you need to generate.</p>
                <p>You call the query generator methods in a chained style if you would like to make use of more than one method at a time for an elegant syntax - you don't however have to 
                chain your method calls, you can call them one at a time, assigning the return value to a variable.</p>
                 
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

			                
        </div>

    </div>

</div>

@include('footer')