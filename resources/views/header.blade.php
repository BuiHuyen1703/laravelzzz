<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        {{-- <li>
            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">dashboard</i>
                <p class="hidden-lg hidden-md">Department</p>
            </a>
        </li> --}}
        {{-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">notifications</i>
                <span class="notification">5</span>
                <p class="hidden-lg hidden-md">
                    Notifications
                    <b class="caret"></b>
                </p>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">Mike John responded to your email</a>
                </li>
                <li>
                    <a href="#">You have 5 new tasks</a>
                </li>
                <li>
                    <a href="#">You're now friend with Andrew</a>
                </li>
                <li>
                    <a href="#">Another Notification</a>
                </li>
                <li>
                    <a href="#">Another One</a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a href="{{ route('logout-admin') }}">
                <i class="material-icons">person</i>
                <p>Đăng xuất</p>
            </a>
        </li>
        <li class="separator hidden-lg hidden-md"></li>
    </ul>
    {{-- <form class="navbar-form navbar-right" role="search">
        <div class="form-group form-search is-empty">
            <input type="text" class="form-control" placeholder=" Search ">
            <span class="material-input"></span>
        </div>
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
            <i class="material-icons">search</i>
            <div class="ripple-container"></div>
        </button>
    </form> --}}
</div>
