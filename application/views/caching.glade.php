@include('header')


@include('navbar')

<div class="container">

    <div class="row">

            @include('sidebar')


            <div class="col-lg-9 lmargin">

                <a href="{{Url::base('home/caching')}}"><h1>Caching</h1></a>

                <a href="{{Url::base('home/caching#memcache')}}" class="lead">Memcache</a><br>
                <a href="{{Url::base('home/caching#memcached')}}" class="lead">Memcached</a><br>
                <a href="{{Url::base('home/caching#redis')}}" class="lead">Redis</a><br>


                <h4 id="memcache">Memcache</h4>
                <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

                       
                <h4 id="memcached">Memcached</h4>
                <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

                <h4 id="redis">Redis</h4>
               <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
     
        </div>

    </div>

</div>

@include('footer')