@include('header')


@include('navbar')

<div class="container">

    <div class="row">

            @include('sidebar')

            <div class="col-lg-9">

            	<a href="{{Url::link('home', 'database')}}"><h1>Database</h1></a><br>

                <a href="{{Url::link('home', 'database#basic_usage')}}" class="lead">Basic Usage</a><br>
                <a href="{{Url::link('home', 'database#query_builder')}}" class="lead">Query Builder</a><br>
                <a href="{{Url::link('home', 'database#orm')}}" class="lead">Intuitive ORM</a><br>
                <a href="{{Url::link('home', 'database#response')}}" class="lead">Model Response</a><br>
                <a href="{{Url::link('home', 'database#schema_builder')}}" class="lead">Schema Builder</a><br>


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
<pre class="bg-success">
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
			    <p>With the ORM comes the query builder to make your work even easier. You don't have to manually write SQL queries - all you do is make use 
                of model methods that already have this functionality abstracted for you.</p>
                <p>There are different query generator methods depending on the nature of the query string you need to generate.</p>
                <p>You call the query generator methods in a chained style if you would like to make use of more than one method at a time for an elegant syntax - you don't however have to 
                chain your method calls, you can call them one at a time, assigning the return value to a variable the finally execute the query.</p>

                <p>In order to make use of the query builder you need to first create a model class and then access the query builder methods from your model class. You cannot access the database 
                without using your model class. All your custom model classes must extend the <code>Models\Model;</code> class. All the methods are accessed statically and
                you don't need to create an instance of the model class in order to access the query builder methods.</p>

                <p class="text-danger">Example</p>
                <p>Below is how you will create a <code>UsersModel</code> class.</p>
<pre class="bg-success">
&lt;?php namespace Models;

/**
 *This models handles all user management database operations.
 *@author Geoffrey Bans &lt;geoffreybans@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Bans
 *@category Models
 *@package Models\UsersModel
 *@link https://github.com/gliver-mvc/gliver
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 1.0.1
 */

class UsersModel extends Model{

    /**
    *@var string The name of the table associated with this model
    */
    protected static $table = 'users';  

    /**
    *@var bool Set whether query timestamps should be updated
    */  
    protected static $update_timestamps = true;

}    
</pre>

                <p>After creating your model class, you first need to require it in your controller classes or any other place using the 'use' statement as <code>use Models\UsersModel;</code>.</p>
                <p>You must specify the table associated with this model class in the <code>protected static $table;</code> property. Gliver will not attempt to guess the table name for you based on the model name. If this 
                option is not specified attempt to run queries will throw an error. Once you define your table name, you don't have to specify a table name whenever you perform a database query using your model class.</p>

                <p>Whenever you are creating your tables in the database, create at least three columns <code>id, date_created</code> and <code>date_modified</code>. </p>
                <p>The <code>id</code> column is a PRIMARY AUTO INCREMENT field in your table and the value of this will be returned whenever you perform an insert query on your table.</p>
                <p>The <code>date_created</code> and <code>date_modified</code> fields are columns of data type DATETIME for storing the time when the database record was inserted and when the database 
                record was updated. This is usually done automatically whenever you run an INSERT or UPDATE query on your table. This feature to auto update the timestamps can be enabled by setting the 
                <code>protected static $update_timestamps = true;</code> or false otherwise.</p>

                <p>When accessing more than one method at a time, you specify the model class name followed by a scope resolution operator and the first method, following method calls are chained using the <code>-></code> operator.</p>

                <p>The model class have various query generation methods that include the following:</p>


                <h3 class="text-info">from()</h3>

                <p>This method sets the table name and fields upon which to perform database queries. By default the model class would use the value of the <code>$table</code> property when performing database queries, however, you can override 
                this by manually specifying a table name to use for the query. </p>
                <p>This method expects two parameters <code>from($from = null, array $fields = null )</code></p>
                <p><code>$from</code> The table name upon which to perform the query. You can pass a null value if you don't intend to use a different table from that specified in the $table property.</p>
                <p><code>$fields</code> This argument specifies the fields you would like to perform query on - in your select query for example. This options defaults to select all the fields in the table if null is specified. You specify the 
                the column names in a numerically indexed array format.</p>
                <p>Both the argumets for this method are optional, if you don't intend to use a different table in your model class and would like to select all the fields in the table, then you don't have to call this method, as the defaults would be used. Skip it and call the next method you need for your query generation.</p>

                <p class="text-danger">Example</p>
<pre class="bg-success">
UsersModel::from('users', array('first_name', 'last_name', 'email'));
</pre>
                
                <p>This method would generate a query string to select from 'users' table the fields 'first_name', 'last_name' and 'email'.</p>



                <h3 class="text-info">join()</h3>

                <p>This method builds query string for joining tables in a select statement.</p>
                <p>This method expects four parameters in this order <code>join($join, $table, $on, array $fields = array())</code></p>
                <p><code>$join</code> The type of join to perform.</p>
                <p><code>$table</code> The table to perform join on.</p>
                <p><code>$on</code> The conditions for the join.</p>
                <p><code>$fields</code> The fields name to join in numeric array.</p>



                
                <h3 class="text-info">where()</h3>

                <p>This method defines the WHERE parameters of the query string.</p>
                <p>This method expects two parameters in this order <code>where($condition, $value)</code></p>
                <p><code>$condition</code> This is the condition that you want to test for.</p>
                <p><code>$value</code> This is the value of the condition that you would like to test.</p>

                <p class="text-danger">Example</p>

<pre class="bg-success">
$email = 'someone@example.com';
UsersModel::where('email = ?', $email);
</pre>

                <p>You specify the field to be tested and the nature of the test. You can use <code>=, !=, >, &lt;</code> and any other valid operator in your database of choice. The second variable provides the value of the comparision. 
                The <code>?</code> is a placeholder for variables to be inserted during query generation. You don't have to escape or sanitize your input data as this would be done for you automatically when the query string is being generated, before records are inserted into the database.</p>

                <p>Say you have multiple WHERE conditions that you would like to test for. You can either chain the where method or pass all your parameters in one method call.</p>


<pre class="bg-success">
$date_created = "2015:12:01 12:00:00";
$user_type = "admin";

//one way of making your query
UsersModel::where('date_created > ?', $date_created)
            ->where('user_type = ?', $user_type); 

//you could pass all the parameters in one method call
UsersModel::where('date_created > ?', $date_created, 'user_type = ?', $user_type);   
</pre>

                


            <h3 class="text-info">limit()</h3>


            <p>This method sets the limit for the number of rows to return.</p>
            <p>This method expects two parameters in this order <code>limit($limit, $page = 1)</code></p>
            <p><code>$limit</code> The maximum number of rows to return per query. The default is all the rows that could be matched by the query. </p>
            <p><code>$page</code> An integer used to define the offset of the select query. You use this to implement custom pagination. The default value for the $page argument is 1.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
$max_users = '1000';
$page = 2;

UsersModel::limit($max_users, $page);
</pre>
            <p>This query would return the rows that match the query between 1001 - 2000.</p>


            
            <h3 class="text-info">unique()</h3>
            <p>This method sets the DISTINCT parameter in query string to only return non duplicated values in a column.</p>
            <p>This method expects no parameter.</code></p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
UsersModel::where('email != ?', ' ')
            ->unique();   
</pre>

            <p>This query would return all rows where the email column in not empty and ignore all rows with duplicated email addresses.</p>



            <h3 class="text-info">order()</h3>

            <p>This method sets the order in which to sort the query results.</p>
            <p>This method expects two parameters in this order <code>order($column, $direction = 'asc')</code>.</p>
            <p><code>$column</code> The name of the field to use for sorting.</p>
            <p><code>$direction</code> This specifies whether sorting should be in ascending or descending order. The default is ASC ascending order.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
UsersModel::order('first_name', 'asc');
</pre>
            
            <p>This query would sort the resultset by the 'first_name' column and in ascending order so that names begining with letter A appear at the top of the list and those that begin with letter Z appear at the bottom of the list.</p>


            <h3 id="orm" class="text-danger">Intuitive ORM</h3>

            <p>The Intuitive ORM implements the Query Builder already discussed above. The Object Relational Mapping classes enable you to have models classes that only relate to 
            particular database tables. So that all queries on the models would obviously be performed on the particular table associated with the model class.</p>
            <p>All model class methods are static and have to be accessed statically without creating an instance of the class.</p>
            <p>You create a model class by extending the <code>Models\Model;</code> class.</p>

            <p>All queries performed using the model class return a Response Object that you use to determine the status of your query.</p>
            <p>If the query you executed has errors in the syntax, an Exception is thrown with the full query string that was generated for ease with your troubleshooting.</p>


            <p>The model class has methods that enable you to perform certain queries on your database in a highly abstracted way.</p>


            <h3 class="text-info">save()</h3>

            <p>This method inserts or updates one row of data into the database depending on whether a where parameter was specified or not.</p>
            <p>This method expects one parameter in this manner <code>save(array $data)</code>. The parameter passed must be a valid PHP array.</p>
            <p><code>$data</code> The array containing the data to be inserted into the database in key => value pair format.</p>

            <p class="text-danger">Example</p>

<pre class="bg-success">
//data to be saved
$user_info = array(
    'first_name' => 'Larry',
    'last_name' => 'Kemps',
    'email' => 'lkemps@example.com'
);

//this inserts a new record into the database
UsersModel::save($user_info);

//define the unique id of this user in the database
$user_id = 97986178;

//this updates the details of the user with this unique id in the database
UsersModel::where('id = ?', $user_id)
            ->save($user_info);
</pre>


            <h3 class="text-info">delete()</h3>

            <p>This method deletes a set of rows that match the query parameters provided.</p>
            <p>This method does not expect any parameter and the deletion would be performed based on the WHERE parameters provided in the where clause.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
//define the user email to delete
$email = 'xampp@example.com';

//delete the details of the user with this email address
UsersModel::where('email = ?', $email)
            ->delete();
</pre>



            <h3 class="text-info">first()</h3>

            <p>This method returns the first row match in a query.</p>
            <p>This method does not require any parameter. It would return the top element from the query performed depending on the WHERE clause. If you perform an ORDER BY then the first row after ordering the rows would be returned.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
//define a sign up date
$date = "2016:01:01 00:00:00";

//get the first user who signed up on new year
UsersModel::where('date_created = ?', $date)
            ->first();
</pre>




            <h3 class="text-info">count()</h3>

            <p>This method counts the number of rows returned by query.</p>
            <p>This method does not expect any parameter.</p>

            <p class="text-danger">Example</p>

<pre class="bg-success">
//count the number of users who have not provided information about their country names 
//i.e country set to empty string in db.
UsersModel::where('country = ?', ' ')
            ->count();
</pre>


            <h3 class="text-info">all()</h3>

            <p>This method returns all rows that match the query parameters.</p>
            <p>This method does not expect any parameter but would return rows matched by the WHERE clause.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
//get 100 users who live within MIAMI who signed up on new year
UsersModel::where('state = ?', 'MI')
            ->where('date_created = ?', '2016:01:01 00:00:00')
            ->limit(100)
            ->all();
</pre>


            

            <h3 class="text-info">getById()</h3>

            <p>This method returns rows found based on a match on the 'id' column.</p>
            <p>This method expects one parameter in this order <code>getById($id)</code>.</p>
            <p><code>$id</code> The id value to use for searching the database.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
//get the user information with id of 1
UsersModel::getById(1);
</pre>
            
            <p>Should there exists more than one user with id of 1, this method would return all rows that match that id.</p>



            <h3 class="text-info">saveById()</h3>

            <p>This method updates the data provided by the value in the id column.</p>
            <p>This method expects one parameter in this order <code>saveById($data)</code>.</p>
            <p><code>$data</code> The information to update in the database in key/value pairs.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
//define the user info to update
$user_info = array(
    'id' => 78,
    'first_name' => 'Klein',
    'last_name' => 'Kalvin'
);

//call model to update this information based on the value of the id field
UsersModel::saveById($user_info);
</pre>

            <p>If a user with that id was not found, a new record would NOT be created and updateSuccess() in response object will have the value of boolean true</p>



            <h3 class="text-info">deleteById()</h3>

            <p>This method deletes a database entry based on the value of the id field.</p>
            <p>This method expects one parameter in this order <code>deleteById($id)</code></p>
            <p><code>$id</code> The id value to use for deleting, doesn't have to be unique in the database.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
//delete a user with an id of 79747
UsersModel::deleteById(79747);
</pre>


            <h3 class="text-info">rawQuery()</h3>

            <p>This method enables you to create and execute your own query string. The query string is executed as it is and NO sanitizing or escaping of data is done for you - so you have to remember to do it right yourself.</p>
            <p>This method expects one parameter in this order <code>rawQuery($query_string)</code>.</p>
            <p><code>$query_string</code> The formed query string that you would like to generate.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
//define a query string to execute.
$query_string = "SELECT * FROM users;";

UsersModel::rawQuery($query_string);
</pre>

            <h3 id="response" class="text-danger">Model Response</h3>

            <p>Every query executed using the model class returns a response object depending on the database type used. For a mysql database <code>MySQLResponseObject</code> is returned.</p>
            <p>The response object has a couple of methods to help analyze your queries.</p>


            <h3 class="text-info">query_time()</h3>

            <p>This method returns the query excecution time in seconds. This is the duration the query took to search the database and not the time taken manipulating the return value.</p>

            <p class="text-danger">Example</p>
<pre class="bg-success">
//get all users from the database
$users = UsersModel::all();

//get the query execution time
echo $users->query_time(); //would output the query execution time e.g. 0.004327039718628
</pre>


            <h3 class="text-info">query_string()</h3>

            <p>This method returns the query string that was executed or an empty string if no query string was executed.</p>
            <p class="text-danger">Example</p>
<pre class="bg-success">
//get all users from the database
$users = UsersModel::all();

echo $users->query_string(); //would output "SELECT * FROM users"
</pre>



            <h3 class="text-info">field_count()</h3>

            <p>This method returns the count of the fields that were affected by query you executed.</p>
            <p class="text-danger">Example</p>
<pre class="bg-success">
//get all users from the database
$users = UsersModel::all();

echo $users->field_count(); //would output the numbers of columns in the 'users' table
</pre>



            <h3 class="text-info">num_rows()</h3>

            <p>This  method returns the number of rows returned by the query executed or NULL if this was not a SELECT query.</p>
            <p class="text-danger">Example</p>
<pre class="bg-success">
//get all rows with non empty email address fields
$emails = UsersModel::where('email != ?', ' ')
                    ->all();
echo $emails->num_rows(); //would print out the count of the number of rows
</pre>


            <h3 class="text-info">query_fields()</h3>

            <p>This method returns an object containing the information about each of the fields affected by the query and their meta data. You can use this method to list all field names in a table. It returns NULL of no field was affected by the query</p>
<pre class="bg-success">
//get the array of table field objects
$table = UsersModel::all();

//this would print out all the table field names e.g id, first_name, last_name, email, date_created, date_modified
foreach($table->query_fields() as $field)
{
    echo 'Field Name : ' . $field->name;
}
</pre>


            <h3 class="text-info">affectedRows()</h3>

            <p>This method returns the number of rows affected by a delete query or NULL if this was not a DELETE query.</p>
            <p class="text-danger">Example</p>
<pre class="bg-success">
//delete all accounts without email addresses
$delete = UsersModel::where('email = ?', ' ')
                    ->delete();

echo $delete->affectedRows(); // this would print out the number of rows deleted e.g. 10
</pre>



            <h3 class="text-info">lastInsertId()</h3>

            <p>This method returns the value of the 'id'  field of the last row to be inserted in the database or NULL if this was not an INSERT query.</p>
            <p class="text-danger">Example</p>
<pre class="bg-success">
//create user info to insert into the database
$user_info = array(
    'first_name' => 'Willy',
    'last_name' => 'Porwal',
    'email' => 'w.porwal@porwal.me'
);

//insert user info into the database
$insert = UsersModel::save($user_info);

//echo the value of the id field of this user
echo $insert->lastInsertId(); // e.g 78
</pre>



            <h3 class="text-info">updateSuccess()</h3>

            <p>This method returns true if the UPDATE query was successful or NULL if this was not an UPDATE query.</p>
            <p class="text-danger">Example</p>
<pre class="bg-success">
//define use info to update
$user_info = array(
    'id' => 987,
    'last_name' => 'Khan'
);

//update user info
$update = UsersModel::saveById($user_info);

//print out success message if update was successful
if($update->updateSuccess() === true)
{
    echo "Profile Update Success!";
}
</pre>


            <h3 class="text-info">result_array()</h3>

            <p>This method returns the rows in a numerically indexed array format.</p>
            <p class="text-danger">Example</p>
<pre class="bg-success">
//get all users from the database
$users = UsersModel::all();

//loop through users printing their email addresses
foreach($users->result_array() as $user)
{
    echo $user['email'];
}
</pre>
            <h3 class="text-info">result()</h3>

            <p>This method returns the rows in an object notation format.</p>
            <p class="text-danger">Example</p>
<pre class="bg-success">
//get all users from the database
$users = UsersModel::all();

//loop through users printing their email addresses
foreach($users->result() as $user)
{
    echo $user->email;
}
</pre>


            <h3 id="schema_builder" class="text-danger">Schema Builder</h3>

			                
        </div>

    </div>

</div>

@include('footer')