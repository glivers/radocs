<!DOCTYPE html>
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" type="image/ico" href="{{ Url::assets('img/logo.png') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Mobile Internet Explorer allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">
    <title>{{$title}}</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="{{ Url::assets('css/bootswatch/Cosmo/bootstrap.min.css') }}" rel="stylesheet">
     <!--    LOAD CUSTOM STYLES    -->
    <!-- Le styles -->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/black-tie/jquery-ui.css" rel="stylesheet">
    <link href="{{ Url::assets('css/jquery.tocify.css') }}" rel="stylesheet">
    <link href="{{ Url::assets('css/prettify.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ Url::assets('css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ Url::assets('css/rainbow/themes/tomorrow-night.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ Url::assets('css/rainbowlines/theme.css') }}" rel="stylesheet" type="text/css"  media="screen" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link href="../assets/ico/favicon.ico" rel="shortcut icon">
    <link href="../assets/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="../assets/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="../assets/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="../assets/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">

</head>
<body>
    <a id="fork-me" href="#" target="_blank"><img style="border: 0px currentColor; border-image: none; top: 0px; right: 0px; position: fixed; z-index: 999999;" alt="Fork me on GitHub" src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png"></a>

@include('navbar')
     

    <div class="container-fluid" style="margin-top:50px;">
      <div class="row">
        <div class="tocify col-sm-3 col-md-3">
          <div id="toc">
          </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-9 col-md-9">
          <div class="jumbotron">
            <h1>Enter Project Name Here</h1>

            <br><br>

            <h2>Description</h2>
            <p>Enter Project Repo Description Here</p>
            <br>
            <p>The project is hosted on <a class="projectLinks" href="#" target="_blank">Github</a> and is available for use under the <a class="projectLinks" href="#" target="_blank">MIT software license</a>.  You can report bugs and discuss features on the <a href="#" target="_blank">GitHub issues page</a>, or send tweets to <a href="#" target="_blank">Enter Project Twitter Page Here</a>.
            </p>
            <p><a class="btn btn-primary btn-lg" href="#" target="_blank">Fork on Github »</a></p>
          </div>
          <h2>Requirements</h2>
          <br>
          <p class="well">
          Enter Project Requirements Here
          </p>
          <br>
          <h2>Optional Dependencies</h2>
          <br>
          <p class="well">
          Enter Project Optional Dependencies Here
          </p>
          <br>
          <h2>Notable Features</h2>
          <br>
          <p class="well">
          Enter Notable Features Here
          </p>
          <br>
          <h2>Browser Support</h2>
          <br>
          <p class="well">
          Enter Browser Support Here
          </p>
          <br>
          <h2>Getting Started</h2>
          <br>
          <p><h3><a href="customDownload.html">Custom Download</a></h3><p></p>
          <p class="well">
          <span class="note"><strong>Note: </strong> All of the plugin files are in the <code>src</code> directory (this includes both the JavaScript and CSS files). If you want to see an example page with all of the files included, look in the <code>demos</code> directory.
          </span>
          </p>
          <h3>C#</h3>
          <p></p>
          <p class="well note">
          C# Code
          </p>
          
          <pre>        
            <code data-language="csharp">
public class BadgeGenerator : IBadgeGenerator
{
    private IBadgeStorageService badgeStoreageService;

    public BadgeGenerator(IBadgeStorageService service)
    {
        if (service == null)
        {
            throw new ArgumentNullException("storage service cannot be null", "service");
        }
       
        this.badgeStoreageService = service;
    }
}
            </code>
          </pre>
         
          <h3>CSS</h3>
          <p></p>
          <p class="well note">
          Enter CSS Instructions Here
          </p>
          <pre>
          <code data-language="css">    
 * Author: @gregfranko
 */

/* The Table of Contents container element */
#toc {
    width: 20%;
    max-height: 90%;
    overflow: auto;
    position: fixed;
    border: 0px solid #ccc;
    webkit-border-radius: 6px;
    moz-border-radius: 6px;
    border-radius: 6px;
}

/* The Table of Contents is composed of multiple nested unordered lists.  These styles remove the default styling of an unordered list because it is ugly. */
#toc ul, #toc li {
    list-style: none;
    margin: 0;
    padding: 0;
    border: none;
    line-height: 30px;
}

          </code>
          </pre>
          <p>
          <h3>JavaScript</h3>
          <p></p>
          <p class="well note">
              Enter JavaScript Instructions Here
          </p>
          <pre>          
          <code data-language="javascript">
;(function () {

  var
    object = typeof window != 'undefined' ? window : exports,
    chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=',
    INVALID_CHARACTER_ERR = (function () {
      // fabricate a suitable error object
      try { document.createElement('$'); }
      catch (error) { return error; }}());

  // encoder
  // [https://gist.github.com/999166] by [https://github.com/nignag]
  object.btoa || (
  object.btoa = function (input) {
    for (
      // initialize result and counter
      var block, charCode, idx = 0, map = chars, output = '';
      // if the next input index does not exist:
      //   change the mapping table to "="
      //   check if d has no fractional digits
      input.charAt(idx | 0) || (map = '=', idx % 1);
      // "8 - idx % 1 * 8" generates the sequence 2, 4, 6, 8
      output += map.charAt(63 & block >> 8 - idx % 1 * 8)
    ) {
      charCode = input.charCodeAt(idx += 3/4);
      if (charCode > 0xFF) throw INVALID_CHARACTER_ERR;
      block = block << 8 | charCode;
    }
    return output;
  });

  // decoder
  // [https://gist.github.com/1020396] by [https://github.com/atk]
  object.atob || (
  object.atob = function (input) {
    input = input.replace(/=+$/, '')
    if (input.length % 4 == 1) throw INVALID_CHARACTER_ERR;
    for (
      // initialize result and counters
      var bc = 0, bs, buffer, idx = 0, output = '';
      // get next character
      buffer = input.charAt(idx++);
      // character found in table? initialize bit storage and add its ascii value;
      ~buffer && (bs = bc % 4 ? bs * 64 + buffer : buffer,
        // and if not first of each 4 characters,
        // convert the first 8 bits to one ascii character
        bc++ % 4) ? output += String.fromCharCode(255 & bs >> (-2 * bc & 6)) : 0
    ) {
      // try to find character in table (0-63, not found => -1)
      buffer = chars.indexOf(buffer);
    }
    return output;
  });

}());

          </code>
          </pre>
          <h2>Options</h2>
          <p class="well note">
              Enter Options Instructions Here
          </p>
    
          <h3>Options</h3>
          <table class="table table-striped table-bordered table-condensed">
              <tbody><tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Default</th>
                  <th>Parameters</th>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
          </tbody></table>
          <br>
          <h2>Contributing</h2>
          <p class="well">
              Take care to maintain the existing coding style. Add <strong>Enter Unit Testing Framework</strong> unit tests for any new or changed functionality. Lint and test your code using <strong>Enter Build Tool Here</strong>.
          </p>
          <p class="well">
              <span class="note">
                  After you have verified your code, send a pull request to the <em>Enter Project Name Here</em> develop branch.  After you send a pull request, you will hear back from me shortly after I review your code.  You’ll find source code in the <code>src</code> subdirectory!
              </span>
          </p>
          <br>
          <h2>Extending</h2>
          <p class="well">
              If you find that you need a feature that <em>Enter Project Name Here</em> does not currently support, either let me know via the <a href="#" target="_blank">Github issue tracker</a>, or <a href="#" target="_blank">fork the project</a> and and easily extend <em>Enter Project Name Here</em>!
          </p>
          <br>
        <h2>Copyright</h2>
        <p class="well">
            Copyright © 2013 Enter Author Name Here
        </p>
      </div>
      </div><!--/row-->
          
    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/rainbow/rainbow.min.js"></script>
    <script src="js/rainbow/language/generic.js"></script>
    <script src="js/rainbow/language/html.js"></script>
    <script src="js/rainbow/language/css.js"></script>
    <script src="js/rainbow/language/javascript.js"></script>
    <script src="js/rainbowlines/rainbow.linenumbers.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.tocify.min.js"></script>
    <script src="js/prettify.js"></script>

    <script>
        $(function() {

          $("#toc").tocify({ selectors: "h2, h3, h4", scrollTo: 60, highlightOffset: 60, extendPage: true });

          prettyPrint();

          $(".optionName").popover({ trigger: "hover", container: "body" });

          $("a[href='#']").click(function(event) {

              event.preventDefault();

          });

          Rainbow.color();
        });
    </script>
  

</div>
<!--EO gliverContainer-->


</body>
</html>