<div class="sidebar" data-active-color="purple" data-image="{{ asset('assets') }}/img/sidebar-5.jpg"  data-background-color="black"     >
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            FS
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            FPT Software
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('/user') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}">
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
