@include('header')


@include('navbar')

<div class="container">
    <div class="row">

        @include('sidebar')


        <div class="col-lg-9">

                <a href="{{Url::link('home/helpers')}}"><h1>Helpers</h1></a><br>

                <a href="{{Url::link('home/helpers#array')}}" class="lead">Array</a><br>
                <a href="{{Url::link('home/helpers#date')}}" class="lead">Date</a><br>
                <a href="{{Url::link('home/helpers#file')}}" class="lead">File</a><br>
                <a href="{{Url::link('home/helpers#form')}}" class="lead">Form</a><br>
                <a href="{{Url::link('home/helpers#input')}}" class="lead">Input</a><br>
                <a href="{{Url::link('home/helpers#path')}}" class="lead">Path</a><br>
                <a href="{{Url::link('home/helpers#url')}}" class="lead">Url</a><br>
                <a href="{{Url::link('home/helpers#session')}}" class="lead">Session</a><br>
                <a href="{{Url::link('home/helpers#upload')}}" class="lead">Upload</a><br>
                <a href="{{Url::link('home/helpers#redirect')}}" class="lead">Redirect</a><br>

        <br><br>
        <p class="alert alert-info">You only need to load the Helper classes when using them from your controllers, models or libraries. However, in the view files the helper classes are automatically loaded using the alias names specified in the <span class="text-info">config.php</span>. <br>
            All helper classes are accessed statically so you do not need to create an instance to access the methods. An attempt to create an instance using the <span class="text-danger">new</span> keyword would generate an error! <br>
            In order to access a helper method specify the helper class name, the scope resolution operator and then the name of the method as <span class="text-danger">ArrayHelper::parts()</span>.</p>
        <p>You load the Helper classes from any class by using the use statement with the full namespace then accessing it with the Helper class name. You can as well choose to alias the classname to a name of your choice as <span class="text-danger">use Helpers\ArrayHelper\ArrayHelper as ArrayClass;</span> and then use the ArrayClass to access all the array helper methods.</p>

        <p class="text-danger">Example</p>

<pre class="bg-success">
&lt;?php namespace Controllers;

use Helpers\ArrayHelper\ArrayHelper;

class HomeController extends BaseController {

    public function getProfile()
    {

        //input array
        $names_array = array(
            0 => 'Scott',
            1 => 'Mendoza',
            2 => 'Stuart'
        );

        $names_string  = ArrayHelper::join(', ', $names_array)->get();

        //the final value of $names_string becomes
        $names_string = 'Scott, Mendoza, Stuart';

        ...
    }   
</pre>

        <h2 id="array" class="text-danger">Array</h2>

        <p>The ArrayHelper class enables you to create arrays out of string and manipulate arrays. This class allows for method chaining so that you can chain all the 
            methods you would like to use in one method call and get the final result returned.</p>
        <p>You can load the ArrayHelper class from any class by using the use statement with the full namespace then accessing it with the ArrayHelper name as <span class="text-danger">use Helpers\ArrayHelper\ArrayHelper;</span> 
            You can as well choose to alias the classname to a name of your choice as <span class="text-danger">use Helpers\ArrayHelper\ArrayHelper as ArrayClass;</span> and then use the ArrayClass to access all the array helper methods.</p>



        <p>You only need to load the Helper classes when using them from your controllers, models or libraries. However, in the view files the helper classes are automatically loaded using the alias names specified in the <span class="text-info">config.php</span>.</p>
        <p>Let's look at some of the methods that you can safely call with the ArrayHelper class.</p>


        <h3 class="text-info">ArrayHelper::parts()</h3>

        <p>This method splits a string into a numerically indexed array depending on the delimiter provided.</p>
        <p>The parts() method expects three parameters in this order <br> <code>ArrayHelper::parts($delimiter = null, $string = null, $limit = null)->get()</code>.</p>
        <p>The <span class="text-info">$delimtier</span> is the character(s) to use as a separator for exploding the input string into an array. </p>
        <p>THe <span class="text-info">$string</span> is the input string which is to be exploded into an array</p>
        <p>the <span class="text-info">$limit</span> is an integer value that limits the number of elements to return</p>

        <p class="text-danger">Example</p>
<pre class="bg-success">
$name_string  = "My name is Geoff";

$name_array = ArrayHelper::parts(' ', $name_string)->get();

//the final value of the $name_array is this
$name_array = array(
    0 => 'My',
    1 => 'name',
    2 => 'is',
    3 => 'Geoff'
);
</pre>

        <p>If we only wanted the first two elements to be returned, we would pass the third parameter as in integer of 2 and parts after 'name' would not be returned.</p>



        <h3 class="text-info">ArrayHelper::join()</h3>

        <p>This method joins an array into a string based on the joining parameter provided</p>
        <p>The ArrayHelper::join() method expects two parameters in this order <br> <code>ArrayHelper::join($glue = null, array $inputArray = null)->get()</code></p>
        <p><span class="text-info">$glue</span> The string to use to join the array elements into string</p>
        <p><span class="text-info">$array</span> The string which is to be exploded into an array</p>

        <p class="text-danger">Example</p>

<pre class="bg-success">
//input array
$names_array = array(
    0 => 'Scott',
    1 => 'Mendoza',
    2 => 'Stuart'
);

$names_string  = ArrayHelper::join(', ', $names_array)->get();

//the final value of $names_string becomes
$names_string = 'Scott, Mendoza, Stuart';
</pre>


        <h3 class="text-info">ArrayHelper::clean()</h3>

        <p>This method loops through the items of an array removing elements with empty or null values</p>
        <p>This method expects one parameter <br> <code>ArrayHelper::clean($array = null)->get()</code> 
        <p><code>$array</code> The array whose values are to be cleaned</p>

        <p class="text-danger">Example</p>
<pre class="bg-success">
//input array
$user_info = array(
    'name' => 'Bernhard Anaurdis',
    'gender' => 'male',
    'address' => null,
    'age' => 78
);

//remove empty and null values
$user_info = ArrayHelper::clean($user_info)->get();

//the final content of $user_info
$user_info = array(
    'name' => 'Bernhard Anaurdis',
    'gender' => 'male',
    'age' => 78
);
</pre>



        <h3 class="text-info">ArrayHelper::trim()</h3>

        <p>This method loops through array elements removing whitespaces from begining and ending of string element values</p>
        <p>This method expects one parameter as <code>ArrayHelper::trim($array = null)->get()</code></p>
        <p><code>$array</code> The input array to be trimmed of whitespace</p>

        <p class="text-danger">Example</p>

<pre class="bg-success">
//input array
$user_info = array(
    'name' => '  Sagini Obed  ',
    'status' => ' Will tell you    when   I see u',
    'address' => '4399  6th Street    Benton Harbor  '
);

//get trimmed user_info
$user_info = ArrayHelper::trim($user_info)->get();

//final content of $user_info
$user_info = array(
    'name' => 'Sagini Obed',
    'status' => 'Will tell you    when   I see u',
    'address' => '4399  6th Street    Benton Harbor'
);
</pre>



        <h3 class="text-info">ArrayHelper::flatten()</h3>


        <p>This method converts an associative array into a numerically indexed array</p>
        <p>This method expects two paramaters in this manner <br><code>ArrayHelper::flatten($array = null, $return = array())->get()</code></p>
        <p><code>$array</code> The array to flatten</p>
        <p><code>$return </code>The return array</p>


        <p class="text-danger">Example</p>
<pre class="bg-success">
//input array 
$array = array(
    'first_name' => 'Vince',
    'middle_name' => 'Fargo',
    'last_name' => 'Lombardi'
);

$array = ArrayHelper::flatten($array)->get();

//final content of the $array
$array = array(
    0 => 'Vince',
    1 => 'Fargo',
    2 => 'Lombardi'
);
</pre>



        <h3 class="text-info">ArrayHelper::first()</h3>


        <p>This method returns the first element in an array</p>
        <p>This method expects one argument in this manner <br> <code>ArrayHelper::first($array = null)->get()</code></p>
        <p><code>$array</code> The array whose first element is to be returned</p>

        <p class="text-danger">Example</p>


<pre class="bg-success">
//input array
$cities = array('New York', 'New Hamshire', 'New Jersy');

$city = ArrayHelper::first($cities)->get();

//content of city
$city = array('New York');
</pre>

        <h3 class="text-info">ArrayHelper::slice()</h3>


        <p>This method splits an array and returns the specified section.parts</p>
        <p>This method expects four parameters in this mannger <code>ArrayHelper::slice($inputArray = null, $offset = null,  = null, $preserveKeys = false)->get()</code></p>
        <p><code>$inputArray</code> The input array that is to be split and parts returned</p>
        <p><code>$offset</code> The int to specify where to start truncating from</p>
        <p><code>$length</code>  The int to specify the number of elements to return</p>
        <p><code>$preserveKeys</code> boolean true|false Set to true to preserver numberic keys, otherwise would be reindexed</p>


        <p class="text-danger">Example</p>

<pre class="bg-success">
//inpur array
$employee == array(
    0 => 'Software Engineer',
    1 => '$47,000',
    2 => 'Marcial Araujo',
    3 => '6th Street Benton Harbor, MI',
    4 => 'female'
);

$employee = ArrayHelper::slice($employee, 2)->get();

//final content of $employee
$employee = array(
    0 => 'Marcial Araujo',
    1 => '6th Street Benton Harbor, MI',
    2 => 'female'
);
</pre>


        <h3 class="text-info">ArrayHelper::KeyExists()</h3>


        <p>This method checks if an array key exists</p>
        <p>This method expects two parameters in this manner <br><code>ArrayHelper::KeyExists($key = null, array $inputArrayToSearch = null)->get()</code></p>
        <p><code>$key</code> The key to search for inthe input array</p>
        <p><code> $inputArrayToSearch</code> The array to check against</p>

        <p class="text-danger">Example</p>


<pre>


</pre>

        <h2 id="upload" class="text-danger">Upload</h2>

        <p>This helper class performs files uploads on the server.</p>
        <p>To load this class use <code>use Helpers\Upload\Upload;</code></p>

        <h3 class="text-info">Upload::doUpload()</h3>

        <p>The Upload helper class has one method which takes three parameters in this manner <br> <code>Upload::doUpload($file_name, $target_dir = null, $file_type = null)</code></p>
        <p><code>$file_name</code>The name of the file to upload as submitted in the form</p>
        <p><code>$target_dir</code>The name of the directory where to upload the file to. If you leave this option or set it to null, the file would be uploaded to the default
         upload directory specified in the config.php file. In order to specify a different directory, you give the relative path to the folder including the trailing forward slash as 
         <code>'public/uploads/profilepics/'</code></p>
        <p><code>$file_type</code>The file type to be checked for validation. If you would like to only upload image files, set this option to <code>'images'</code> so that the uploaded file is checked for valid image format.</p>
        <p>This method returns a <code>Helpers\Upload\UploadResponseClass</code> object with data about the performed upload and the property for checking if the upload was successful or unsuccessful.</p>
        <p class="text-danger">Example</p>

<pre class="bg-success">
//lets  write a simple form for uploading image file
&lt;!DOCTYPE html>
&lt;html>
&lt;body>

&lt;form action="{{Url::link('home/upload')}}" method="post" enctype="multipart/form-data">
    Select image to upload:
    &lt;input type="file" name="gravator" id="gravator">
    &lt;input type="submit" value="Upload Profile Image" name="Upload">
&lt;/form>

//let's write some code to upload this file after submission

use Helpers\Upload\Upload;

class HomeController extends BaseController {

    public function postUpload()
    {   
        $upload = Upload::doUpload('gravator', null, 'image');

        print_r($upload);

        //the object printed would have this structure
        Helpers\Upload\UploadResponseClass Object
        (
            [success] => //1 if upload was successful
            [upload_path_full] => //full path to the uploaded file
            [upload_path_relative] => //relative path to file from root if your installation
            [file_name] => //name of the file before uploading, different from final file name
            [file_size] => //interger representing the size of the file
        )

    }
    ...
}

&lt;/body>
&lt;/html> 
</pre>



        <h2 id="url" class="text-danger">Url</h2>

        <p>This helper class resolves urls and returns the appropriate url string required</p>
        <p>To load this class use <code>use Helpers\Url\Url;</code></p>


        <h3 class="text-info">Url::link()</h3>

        <p>This method returns the base url string - the url to your root installation</p>
        <p>This method does not expect any parameter</p>
        <p>This method returns the url string</p>

        <p class="text-danger">Example</p>
<pre class="bg-success">
//say you have installed you framework in gliver folder in your localhost, this is how you get the url

$base_url = Url::link();

echo $base_url; //should output http://localhost/gliver/
</pre>



        <h2 id="redirect" class="text-danger">Redirect</h2>

        <p>This helper class helps you to manage php session re-direction</p>
        <p>You load this class in this manner <code>use Helpers\Redirect\Redirect;</code></p>
        <p>This class sends header back to the browser and returns a REDIRECT(302) status code to the browser.</p>
        
        <h3 class="text-info">Redirect::to()</h3>
        <p>This method redirects the browser to the url specified</p>
        <p>This method can take two parameters like so <code>Redirect::to($path, array $data = null)</code>.</p>
        <p><code>$path</code> The controller or route name to redirect to. This parameter is required.</p>
        <p><code>$data</code> The data to append to the url as query string. This has to be in a valid array format. This parameter is optional.</p>

        <p class="text-danger">Example</p>

<pre class="bg-success">
//say we would like to redirect to the ProfileController view() method with user id information
//lets compose the data array
$data = array('id'=>9897717171);

Redirect::to('profile/view', $data); //this loads this url http://localhost/gliver/profile/view?id=9897717171
</pre>

        <h3 class="text-info">Redirect::with()</h3>
        <p>This method enables you to specify parameters to be set as part of the redirect url. These parameters will be appended as a query string to the url string generated.</p>
        <p>This method expects one parameter - an array with the key/value pairs to be appended to url. Array keys with null or empty elements will be stripped off from the query string.</p>
        <p><code>$data</code> The array with parameter to pass to url as query string. This parameter is required.</p>
        <p>You call this method chainied with the to() method in this manner <code>Redirect::with($data)->to('home');</code></p>
        <p>Calling this method is the same as passing the $data array as a second parameter to the Redirect::to() method</p>

        <p class="text-danger">Example</p>
<pre class="bg-success">
//say we would like to redirect to the ProfileController view() method with user id information
//lets compose the data array
$data = array('id'=>9897717171);

Redirect::with($data)->to('profile/view'); //this loads this url http://localhost/gliver/profile/view?id=9897717171
</pre>


    </div>

    </div>

</div>
@include('footer')