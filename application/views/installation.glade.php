@include('header')


@include('navbar')

<div class="container">
    <div class="row">

        @include('sidebar')


        <div class="col-lg-9">

                <a href="{{Url::base('home/installation')}}"><h1>Installation</h1></a><br>
                <a href="{{Url::base('home/installation#via_composer')}}" class="lead">Via Composer</a><br>
                <a href="{{Url::base('home/installation#downloading')}}" class="lead">Downloading</a><br>
                <a href="{{Url::base('home/installation#upgrade')}}" class="lead">Upgrade from previous versions</a><br>
                <a href="{{Url::base('home/installation#troubleshooting')}}" class="lead">Troubleshooting</a><br>

            <h3 id="via_composer" class="text-danger">Via Composer</h3>

			<p>Coming Soon...<br/></p>

          
			<h3 id="downloading" class="text-danger">Downloading Gliver</h3>

                            <p>
                            <ul>
                                <li><a href='https://github.com/gliver-mvc/gliver/archive/master.zip'>Gliver Version 1.0.0 (Current Version)</a></li>
                            </ul>
                            </p> 
                            <div class='row' >&nbsp;</div>
                            <h5>GitHub</h5>
                            <p>
                                <a href="http://git-scm.com/about">Git</a> is a version control system which is widely used for online code distribution.
                                You can get free accessible code from <a href="https://github.com/gliver-mvc/gliver">Here</a>.
                            </p>
                        


			<h3 id="upgrade" class="text-danger">Upgrading from previous versions</h3>


			    <p>
                            <div class="row">&nbsp;</div>
                            <p> Not Applicable</p>
                            </p> 
                        <div class='row' style="padding-bottom: 5%">&nbsp;</div>



			<h3 id="troubleshooting" class="text-danger">Troubleshooting</h3>


			    <p>
                               Coming Soon...
			    </p>
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div>

        </div>

    </div>

</div>

@include('footer')