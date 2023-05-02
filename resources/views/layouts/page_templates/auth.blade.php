<div class="wrapper ">
  @include('layouts.navbars.sidebar')
  <div class="main-panel">
    @include('layouts.navbars.navs.auth')
    <div class="content">
      <div class="container-fluid">
          @if ($activePage != 'archive')
            @include('layouts.components.status_nav')
          @endif
          @include('layouts.components.notification')
          <div class="row">
              <div class="col-lg-12">
                  <div class="card shadow">
                    @yield('content')
                  </div>
              </div>
          </div>


      </div>
  </div>

    
    @include('layouts.footers.auth')
  </div>
</div>