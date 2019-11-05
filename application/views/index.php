@include('header')


@include('menubar')
    

    <div class="container-fluid" style="margin-top:50px;">
      <div class="row">
        <div class="tocify col-sm-3 col-md-3">
          <div id="toc">
          </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-9 col-md-9">
          
          @include('userdoc')

          <!-- Footer -->
          <footer>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <ul class="list-inline">
                              <li>
                                  <a href="{{Url::link('home')}}">Home</a>
                              </li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li>
                                  <a href="{{Url::link('preface')}}">Documentation</a>
                              </li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li>
                                  <a href="https://github.com/gliver-mvc/gliver/archive/master.zip">Download</a>
                              </li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li>
                                  <a href="#contact">Contact</a>
                              </li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li>
                                  <a href="#contact">Blog</a>
                              </li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li>
                                  <a href="#contact">Contribute</a>
                              </li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li>
                                  <a href="https://github.com/gliver-mvc/gliver">Github</a>
                              </li>
                           </ul>
                          <p class="copyright text-muted small">Copyright &copy; Glivers Limited 2014. All Rights Reserved</p>
                      </div>
                  </div>
              </div>
          </footer>
      </div>
      </div><!--/row-->
          
    </div><!--/.fluid-container-->

@include('footer')