@include('header')


@include('navbar')

<div class="container">

    <div class="row">

            @include('sidebar')

            <div class="col-lg-9">

            	<a href="{{Url::base('home/database')}}"><h1>Database</h1></a><br>

                <a href="{{Url::base('home/database#basic_usage')}}" class="lead">Basic Usage</a><br>
                <a href="{{Url::base('home/database#query_builder')}}" class="lead">Query Builder</a><br>
                <a href="{{Url::base('home/database#eloquent')}}" class="lead">Intuitive ORM</a><br>
                <a href="{{Url::base('home/database#schema_builder')}}" class="lead">Schema Builder</a><br>
                <a href="{{Url::base('home/database#migration_seeding')}}" class="lead">Migration/Seeding</a><br>
                <a href="{{Url::base('home/database#errors')}}" class="lead">Errors/Logging</a><br>


                        <h3 id="basic_usage" class="text-danger">Basic Usage</h3>
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
           				</p>
			<h3 id="query_builder" class="text-danger">Query Builder</h3>
			    <p>
                                Coming soon...
                            </p> 
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