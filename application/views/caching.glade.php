@include('header')


@include('navbar')

<div class="container">

    <div class="row">

            @include('sidebar')


            <div class="col-lg-9 lmargin">

                <a href="{{Url::link('home', 'caching')}}"><h1>Caching</h1></a>

                <a href="{{Url::link('home', 'caching#memcache')}}" class="lead">Memcache</a><br>
                <a href="{{Url::link('home', 'caching#memcached')}}" class="lead">Memcached</a><br>
                <a href="{{Url::link('home', 'caching#redis')}}" class="lead">Redis</a><br>


                <h3 id="memcache" class="text-danger">Memcache</h3>
                <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

                       
                <h3 id="memcached" class="text-danger">Memcached</h3>
                <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

                <h3 id="redis" class="text-danger">Redis</h3>
               <p>
                Coming soon...
                </p> 
                <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
     
        </div>

    </div>

</div>

@include('footer')