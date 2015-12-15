@include('header')


@include('navbar')

<div class="container">

    <div class="row">

            @include('sidebar')

            <div class="col-lg-9">
                        <h4 id="basic_usage">Basic Usage</h4>
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
                        <div class='well'>
                            <p>
                                <code>
                                    return array(

        /*<br /><br />
	 *Define the default driver<br /><br />
	 */<br /><br />
	'default' => 'mysql',<br /><br />
	/*<br /><br />
	 *Settings for the mysql database<br /><br />
	 */<br /><br />
	'mysql' => array(<br /><br />
		/**<br /><br />
		 *Define the database server hostname<br /><br />
		 */<br /><br />
		'host' 		=> 'localhost',<br /><br />
		/*<br /><br />
		 *Define the username<br /><br />
		 */<br /><br />
		'username' 	=> 'root',<br /><br />
		/*<br /><br />
		 *Define the database password<br /><br />
		 */<br /><br />
		'password' 	=> '',<br /><br />
		/*<br /><br />
		 *Specify the database to connnect to<br /><br />
		 */<br /><br />
		'database' 	=> '',<br /><br />
		/**<br /><br />
		 *Specify the database server port<br /><br />
		 */<br /><br />
		'port' => '3306',<br /><br />
		/**<br /><br />
		 *Set the default charset<br /><br />
		 */<br /><br />
		'charset' => 'utf8',<br /><br />
		/**<br /><br />
		 *Set the default database engine<br /><br />
		 */<br /><br />
		'engine' => 'InnoDB'<br /><br />

		),<br /><br />

	'sqlite' => array(<br /><br />
		/**<br /><br />
		 *Define the database server hostname<br /><br />
		 */<br /><br />
		'host' 		=> '',<br /><br />
		/*<br /><br />
		 *Define the username<br /><br />
		 */<br /><br />
		'username' 	=> '',<br /><br />
		/*<br /><br />
		 *Define the database <br /><br />password
		 */<br /><br />
		'password' 	=> '',<br /><br />
		/*<br /><br />
		 *Specify the database to connnect to<br /><br />
		 */<br /><br />
		'database' 	=> '',<br /><br />
		/**<br /><br />
		 *Specify the database server port<br /><br />
		 */<br /><br />
		'port' => '3306',<br /><br />
		/**<br /><br />
		 *Set the default charset<br /><br />
		 */<br /><br />
		'charset' => 'utf8',<br /><br />
		/**<br /><br />
		 *Set the default database engine<br /><br />
		 */<br /><br />
		'engine' => 'InnoDB'<br /><br />

	),<br /><br />
	'postgresql' => array(<br /><br />
		/**<br /><br />
		 *Define the database server hostname<br /><br />
		 */<br /><br />
		'host' 		=> '',<br /><br />
		/*<br /><br />
		 *Define the username<br /><br />
		 */<br /><br />
		'username' 	=> '',<br /><br />
		/*<br /><br />
		 *Define the database password<br /><br />
		 */<br /><br />
		'password' 	=> '',<br /><br />
		/*<br /><br />
		 *Specify the database to connnect to<br /><br />
		 */<br /><br />
		'database' 	=> '',<br /><br />
		/**<br /><br />
		 *Specify the database server port<br /><br />
		 */<br /><br />
		'port' => '3306',<br /><br />
		/**<br /><br />
		 *Set the default charset<br /><br />
		 */<br /><br />
		'charset' => 'utf8',<br /><br />
		/**<br /><br />
		 *Set the default database engine<br /><br />
		 */<br /><br />
		'engine' => 'InnoDB'<br /><br />

	),<br /><br />

);<br /><br />
                                </code>
                            </p>
                            
                        </div>
                        </p>
                        <div class='row' style="padding-bottom: 5%">&nbsp;</div>
           
			<h4 id="query_builder">Query Builder</h4>
			    <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

			<h4 id="eloquent">Eloguent ORM</h4>
			    <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
  
			<h4 id="schema_builder">Schema Builder</h4>
			    <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

			<h4 id="migration_seeding">Migration Seeding</h4>
			<p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

			           
			<h4 id="sql">SQL</h4>
			<p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

			<h4 id="nosql">NoSQL</h4>
			 <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
   
			<h4 id="postgre">PostgreSQL</h4>
			    <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
       
        </div>

    </div>

</div>

@include('footer')