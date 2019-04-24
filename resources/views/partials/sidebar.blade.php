
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Sidebar</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class='{{ Request::is('/') ? 'active' : '' }}'><a href="{{ url('/') }}">Dashboard</a></li>
        <li class='{{ Request::is('age') ? 'active' : '' }}'><a href="{{ url('age') }}">Age</a></li>
        <li class='{{ Request::is('gender') ? 'active' : '' }}'><a href="{{ url('gender') }}">Gender</a></li>
        <li class='{{ Request::is('geo') ? 'active' : '' }}'><a href="{{ url('geo') }}">Geo</a></li>
      </ul><br>
    </div>
