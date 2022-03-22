<div class="c-sidebar-brand d-lg-down-none">
  <img src={{"https://cdn-icons-png.flaticon.com/512/2487/2487554.png"}} alt="profile Pic" height="200" width="200">
</div>

<ul class="c-sidebar-nav ps">
   GREEN-HOUSE
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route('home')}}">
      <i class="c-sidebar-nav-icon cil-speedometer"></i>
      Dashboard
    </a>
  </li>

  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route('temperature.index')}}">
      <i class="c-sidebar-nav-icon cil-folder-open"></i>
      Temperature
    </a>
  </li>

  {{-- <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('loans*') ? 'c-active' : '' }}" href="{{route('loans.index')}}">
      <i class="c-sidebar-nav-icon cil-folder-open"></i>
      Loans
    </a>
  </li>

  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('authors*') ? 'c-active' : '' }}" href="{{route('authors.index')}}">
      <i class="c-sidebar-nav-icon cil-address-book"></i>
      Authors
    </a>
  </li>

  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ Request::is('users*') ? 'c-active' : '' }}" href="{{route('users.index')}}">
      <i class="c-sidebar-nav-icon cil-user"></i>
      Users
    </a>
  </li>
   --}}

  
  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
    </div>
  </div>
  <div class="ps__rail-y" style="top: 0px; right: 0px;">
    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
    </div>
  </div>
  
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>

</div>