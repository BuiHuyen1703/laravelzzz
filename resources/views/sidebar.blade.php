<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black"
        data-image="../../assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                hi
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Admin
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
                            Bùi Ngọc Huyền
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Settings </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="material-icons">device_hub</i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="active">
                    <a data-toggle="collapse" href="#pagesExamples" aria-expanded="true">
                        <i class="material-icons">event_seat</i>
                        <p> Job Title
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse in" id="pagesExamples">
                        <ul class="nav">
                            <li>
                                <a href="../pages/lock.html">
                                    <span class="sidebar-mini"> LSP </span>
                                    <span class="sidebar-normal"> Thêm job title </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('job_title') }}">
                                    <span class="sidebar-mini"> UP </span>
                                    <span class="sidebar-normal"> Danh sách job title </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">portrait</i>
                        <p> Employee
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('employee') }}">
                                    <span class="sidebar-mini"> GS </span>
                                    <span class="sidebar-normal"> Xem tất cả nhân viên </span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/panels.html">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Thêm nhân viên </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">content_paste</i>
                        <p> Legal off
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="formsExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('legal_off') }}">
                                    <span class="sidebar-mini"> RF </span>
                                    <span class="sidebar-normal"> Danh sách đơn xin nghỉ </span>
                                </a>
                            </li>


                            <li>
                                <a href="../forms/wizard.html">
                                    <span class="sidebar-mini"> W </span>
                                    <span class="sidebar-normal"> Wizard </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('timekeeping') }}">
                        <i class="material-icons">timer</i>
                        <p> Timekeeping
                            <b class="caret"></b>
                        </p>
                    </a>

                </li>
                <li>
                    <a data-toggle="collapse" href="#deptExamples">
                        <i class="material-icons">sort</i>
                        <p> Department
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="deptExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('department') }}">
                                    <span class="sidebar-mini"> RT </span>
                                    <span class="sidebar-normal"> Danh sách department </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>
                <li>
                    <a data-toggle="collapse" href="#levelExamples">
                        <i class="material-icons">sort</i>
                        <p> Level
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="levelExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('level') }}">
                                    <span class="sidebar-mini"> LL </span>
                                    <span class="sidebar-normal"> List Level </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#adminExamples">
                        <i class="material-icons">assignment_ind</i>
                        <p> Admin
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="adminExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin') }}">
                                    <span class="sidebar-mini"> LL </span>
                                    <span class="sidebar-normal"> List Admin </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini"> LL </span>
                                    <span class="sidebar-normal"> Thêm admin </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="../calendar.html">
                        <i class="material-icons">date_range</i>
                        <p> Calendar </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
