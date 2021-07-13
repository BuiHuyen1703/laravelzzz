<div class="sidebar" data-active-color="rose" data-background-color="black">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            BK
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            D02K11
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="{{ Request::is('jobtitle') ? 'active' : '' }}">
                <a href=" {{ route('jobtitle.index') }}">
                    <i class="material-icons">widgets</i>
                    <p> Quản lý chức vụ </p>
                </a>
            </li>
            <li class="{{ Request::is('employee') ? 'active' : '' }}">
                <a href=" {{ route('employee.index') }}">
                    <i class="material-icons">widgets</i>
                    <p> Quản lý nhân viên</p>
                </a>
            </li>
            <li>
                <a href="./charts.html">
                    <i class="material-icons">timeline</i>
                    <p> Charts </p>
                </a>
            </li>
            <li>
                <a href="./calendar.html">
                    <i class="material-icons">date_range</i>
                    <p> Calendar </p>
                </a>
            </li>
        </ul>
    </div>
</div>
