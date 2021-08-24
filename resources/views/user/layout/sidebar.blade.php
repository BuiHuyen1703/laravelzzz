<div class="sidebar" data-active-color="purple" data-image="{{ asset('assets') }}/img/sidebar-5.jpg"
    data-background-color="black">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            NC
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Name Company
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="../../assets/img/faces/avatar.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        @if (session('user'))
                            <span class="text-center">
                                {{ session('user')->name_admin ?? session('user')->name_empployee }}
                            </span>
                        @endif
                    </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <ul class="nav">
            <li class="{{ Request::is('/user') ? 'active' : '' }}">
                <a href="{{ route('userIndex') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Trang chủ </p>
                </a>
            </li>
            <li class="{{ Request::is('/quanly') ? 'active' : '' }}">
                <a href=" ">
                    <i class="material-icons">widgets</i>
                    <p> Quản lý công việc </p>
                </a>
            </li>
            </a>
            </li>
        </ul>
    </div>
</div>
