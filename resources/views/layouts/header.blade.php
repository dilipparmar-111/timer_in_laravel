<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>
                <form class="form-inline mr-auto">
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="@lang('menubar.search')" aria-label="Search" data-width="200">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </li>
            &emsp;<li class="mt-2"><span class="badge badge-primary"><a href="{{url('clear_cache')}}" class="text-white">@lang('menubar.cache_clear')</a></span></li>
            &emsp;<li class="mt-2"><span class="badge badge-success"><a href="{{url('english')}}" class="text-white">@lang('menubar.english')</a></span></li>
            &emsp;<li class="mt-2"><span class="badge badge-success"><a href="{{url('gujarati')}}" class="text-white">@lang('menubar.gujarati')</a></span></li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    @lang('menubar.message')
                    <div class="float-right">
                        <a href="#">@lang('menubar.mark_all_as_read')</a>
                    </div>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">@lang('menubar.view_all') <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    @lang('menubar.notification')
                    <div class="float-right">
                        <a href="#">@lang('menubar.mark_all_as_read')</a>
                    </div>
                </div>

                <div class="dropdown-footer text-center">
                    <a href="#">@lang('menubar.view_all') <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="assets/img/user.png" class="user-img-radious-style">
                <span class="d-sm-none d-lg-inline-block"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">@lang('menubar.hello_user')</div>
                <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> @lang('menubar.profile')

                </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                    @lang('menubar.settings')
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>
                    @lang('menubar.logout')
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
