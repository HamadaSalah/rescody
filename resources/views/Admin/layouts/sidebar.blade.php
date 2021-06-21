        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="{{ Request::segment(2) == 'index' ? 'active' : null }}">
                        <a class="nav-link" href="{{Route('admin.index')}}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'company' ? 'active' : null }}">
                        <a class="nav-link" href="{{Route('admin.company.index')}}">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <p>Companies</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'employee' ? 'active' : null }}">
                        <a class="nav-link" href="{{Route('admin.employee.index')}}">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <p>Employees</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
