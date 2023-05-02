<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      <img src="{{ asset('/images/sys_name.png') }}" alt="DocTracker">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">

      {{-- @role(['records','superadmin'])
      <li class="nav-item{{ ( $activePage == 'dashboard')? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home.general') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('My Dashboard') }}
              @if($active > 0)
              <span class="position-absolute top-0 start-100 translate-middle ">
                <span class="badge rounded-pill bg-info animate__animated animate__infinite animate__heartBeat">
                  <span class="active-pill ">{{ $active }}</span>
                </span>
                <span class="visually-hidden">Active</span>
              </span>
              @endif  
            </p>
            
        </a>
      </li>
      
      @else --}}
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('My Dashboard') }}</p>
            
        </a>
      </li>

      @permission('view-all-documents')
      <li class="nav-item{{ in_array($activePage, array('general','duetodayall','activeall','overdueall','duesoonall')) ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dues',['type' => 'recentall','office_id' => 0]) }}">
          <i class="material-icons text-success">topic</i>
            <p>{{ __('All Documents') }}</p>
        </a>
      </li>
      @endpermission



      <li class="nav-item{{ $activePage == 'overdue' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dues',['type' => 'overdue','office_id' => 0]) }}">
          <i class="material-icons text-danger">assignment</i>
            <p class="position-relative">{{ __('Overdues') }}
              @if($overdues > 0)
              <span class="position-absolute top-0 start-100 translate-middle ">
                <span class="badge rounded-pill bg-danger animate__animated animate__infinite animate__heartBeat">
                  <span class="overdue-pill ">{{ $overdues }}</span>
                </span>
                <span class="visually-hidden">Need immediate action</span>
              </span>
              @endif  
            </p>
        </a>
        
      </li>      
      <li class="nav-item{{ $activePage == 'duetoday' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dues',['type' => 'duetoday','office_id' => 0]) }}">
          <i class="material-icons text-deep-orange">assignment</i>
            <p>{{ __('Due today') }}
              @if($dueToday > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge badge-warning">
                  <span class="duetoday-pill">{{ $dueToday }}</span>
                  
                  <span class="visually-hidden">Today's Dues</span>
                </span> 
              @endif           
            </p>

        </a>
      </li>      
      <li class="nav-item{{ $activePage == 'archive' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('archiveList',$filter)}}">
          <i class="material-icons text-info">archive</i>
            <p>{{ __('Archive') }}</p>

        </a>
      </li>      



      @role('superadmin')
 
      <li class="nav-item{{ $activePage == 'masterlist' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('masterlist') }}">
          <i class="material-icons ">storage</i>
            <p>{{ __('Master List') }}
         
            </p>

        </a>
      </li>   
      @endrole
      
      @permission('users-create')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.user.index') }}">
          <i class="material-icons md-48">manage_accounts</i>
            <p>{{ __('User Management') }}</p>
        </a>
      </li>
      @endpermission

      @role('superadmin')
      <li class="nav-item{{ $activePage == 'permisions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('laratrust') }}">
          <i class="material-icons md-48 text-success">admin_panel_settings</i>
            <p>{{ __('Roles Assignment') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'activity_logs' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('activity_logs') }}">
          <i class="material-icons md-48 text-success">input</i>
            <p>{{ __('Activity Logs') }}</p>
        </a>
      </li>
     
      @endrole
     

    </ul>
  </div>
</div>
