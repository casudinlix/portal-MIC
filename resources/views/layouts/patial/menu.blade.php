<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                        <a href="/" class="nav-link {{ request()->segment(1)=='dashbxoard'?"active":"" }}"
                                target="_blank">
                                <i class="nav-icon fas fa-home"></i>
                                Site
                        </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('dashboard') }}"
                                class="nav-link {{ request()->segment(1)=='dashboard'?"active":"" }}">
                                <i class="nav-icon fas fa-desktop"></i>
                                Dashboard
                        </a>
                </li>

                <li
                        class="nav-item has-treeview {{ request()->segment(1)=='acl'?"menu-open":"" }} {{ request()->segment(1)=='page'?"menu-open":"" }}">
                        <a href="#"
                                class="nav-link {{ request()->segment(1)=='acl'?"active":"" }} {{ request()->segment(1)=='page'?"active":"" }}">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                        Options
                                        <i class="fas fa-angle-left right"></i>

                                </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                        <a href="{{ route('users.index') }}"
                                                class="nav-link {{ request()->segment(2)=='users'?"active":"" }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Users</p>
                                        </a>
                                </li>
                                <li class="nav-item">
                                        <a href="{{ route('page.index') }}"
                                                class="nav-link {{ request()->segment(1)=='page'?"active":"" }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Pages</p>
                                        </a>
                                </li>

                        </ul>
                </li>
                <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                        Charts
                                        <i class="right fas fa-angle-left"></i>
                                </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                        <a href="pages/charts/chartjs.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>ChartJS</p>
                                        </a>
                                </li>
                                <li class="nav-item">
                                        <a href="pages/charts/flot.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Flot</p>
                                        </a>
                                </li>
                                <li class="nav-item">
                                        <a href="pages/charts/inline.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Inline</p>
                                        </a>
                                </li>
                        </ul>
                </li>



        </ul>
</nav>