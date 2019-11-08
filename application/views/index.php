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
                              <li><a href="https://gliver.org/">Home</a></li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li><a href="{{Url::link()}}">Documentation</a></li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li><a href="https://github.com/gliverphp/gliver/">GitHub</a></li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li><a href="https://gliver.org/blog/">Blog</a></li>
                              <li class="footer-menu-divider">&sdot;</li>
                              <li><a href="https://gliver.org/blog/contact">Contact</a></li>
                              <li class="footer-menu-divider">&sdot;</li>
                           </ul>
                          <p class="copyright text-center">Copyright &copy; Gliver.org. All Rights Reserved</p>
                      </div>
                  </div>
              </div>
          </footer>
      </div>
      </div><!--/row-->
          
    </div><!--/.fluid-container-->

@include('footer')