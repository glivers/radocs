@include('header')


@include('navbar')

<div class="container">
    <div class="row">

        @include('sidebar')


        <div class="col-md-9">

                <a href="{{Url::link('home', 'installation')}}"><h1>Installation</h1></a><br>

                <a href="{{Url::link('home', 'installation#requirements')}}" class="lead">System Requirements</a><br>
                <a href="{{Url::link('home', 'installation#via_composer')}}" class="lead">Via Composer</a><br>
                <a href="{{Url::link('home', 'installation#downloading')}}" class="lead">Downloading</a><br>
                <a href="{{Url::link('home', 'installation#upgrade')}}" class="lead">Upgrade from previous versions</a><br>
                <a href="{{Url::link('home', 'installation#troubleshooting')}}" class="lead">Troubleshooting</a><br>

            <h3 id="requirements" class="text-danger">System Requirements</h3>

                <ul>
                    <li>Gliver Framework requires PHP version 5.5 or greater to run. In order to avoid broken functionality or code and opening security holes in your application, upgrade to version >=5.5.</li>
                </ul>

            <h3 id="downloading" class="text-danger">Downloading Gliver</h3>

                <p>One option of installing Gliver framework is to <a href="https://github.com/gliver-mvc/gliver/archive/master.zip">download the source code</a>  directly to your local hard drive and run it!
                    This will always give you the latest stable version of Gliver. If you would like to install the <span class="text-info">gliverich</span> console terminal commands run <code>composer install</code> from the root of your gliver framework directory. Once you 
                    download or install Gliver, run the folder itself in this manner <code>localhost/gliver</code> 
                </p>

            <h3 id="via_composer" class="text-danger">Via Composer</h3>

			<p>You can as well install Gliver framework directly using <span class="text-danger"> Composer </span> without having to manually download anything! Composer is a package management tool for PHP applications. Note that you will need to have composer installed on your computer in order to 
            do this installation with success. For a more detailed instruction on how to install composer, look at this <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">documentation</a> </p> 

            <p>Create an installation of Gliver using the <span class="text-danger">create-project</span> command, specifying the Gliver framework name on packagist and the name of the directory in which to install Gliver</p>
            <p> <code>composer create-project gliver/core myapp</code> </p>
            <p>This command would download the latest stable version of Gliver framework and all dependencies and install them in the directory <span class="text-danger">myapp</span>. You can change the name of the directory to your directory of choice, or better still rename it after installation...</p>               


			<h3 id="upgrade" class="text-danger">Upgrading from previous versions</h3>

            <p>The Gliver core code resides in the <span class="text-danger">system</span> directory. Once you application is up and running and there are updates that you would like to incorporate into your application
            download the Gliver framework core and replace the contents of the <span class="text-danger">system</span> directory with the contents of the system directory freshly downloaded, forget about the rest of the code: that's all you need for this purpose! Thought there was more work to it? No. You are done! </p>
            <p>If you would like to fetch updates for the <span class="text-danger">Gliverich console</span> commands run <code>composer update</code> </p>
 

			<h3 id="troubleshooting" class="text-danger">Troubleshooting</h3>

            <p>Something not working right might mean a number of things with either your application or your server environment, assuming your server is up and running...</p>
            <ul>

                <li>Error display is turned off by default, but every error message is always logged into a log file located here <code>bin/logs/error.log</code>. You can however change this by setting 
                    <span class="text-danger"> dev</span> environment to true in the <span class="text-danger">config.php</span> file.</li>
                <li>When running your installation, only specify the installation directory, don't mention the public folder. If this gives you a blank page : check that your server software is up and running, blank page still? Check that the directory name you specified
                    is the correct name of your installation directory, blank page still? Check that you have enabled <span class="text-danger">mode rewrite rule</span> in your php.ini file, no success Roger? Check the error message in your error.log file found here <code>bin/logs/error.log</code>.
                     Nothing in your error log file, gotcha! Enable write permission in your installation directory and there you go! </li>


            </ul>


        </div>

    </div>

</div>

@include('footer')