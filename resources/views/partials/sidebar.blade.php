<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Agence Manager</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            @if(Auth::user()->role=== 'admin')
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{'admin.dashboard'}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/admin/users">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Utilisateurs</span></a>
                </li>
                 <li class="nav-item active">
<<<<<<< HEAD
                    <a class="nav-link" href="{{route('service.list')}}">
=======
                    <a class="nav-link" href="/admin/services">
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Services</span></a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            @elseif(Auth::user()->role === 'employe')
            <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
<<<<<<< HEAD
                    <a class="nav-link" href="{{ route('employe.dashboard') }}">
=======
                    <a class="nav-link" href="index.html">
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            @elseif(Auth::user()->role === 'employeur')
            <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
<<<<<<< HEAD
                    <a class="nav-link" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="white"><path d="M186.67-120q-27 0-46.84-19.83Q120-159.67 120-186.67v-586.66q0-27 19.83-46.84Q159.67-840 186.67-840h194q3.33-36.67 32-63.67 28.66-27 67.33-27t67.33 27q28.67 27 32 63.67h194q27 0 46.84 19.83Q840-800.33 840-773.33v586.66q0 27-19.83 46.84Q800.33-120 773.33-120H186.67ZM480-811.33q13 0 21.5-8.5t8.5-21.5q0-13-8.5-21.5t-21.5-8.5q-13 0-21.5 8.5t-8.5 21.5q0 13 8.5 21.5t21.5 8.5ZM186.67-226.67q58-55 132.43-88.16Q393.53-348 479.93-348t160.9 33.17q74.5 33.16 132.5 88.16v-546.66H186.67v546.66Zm294.66-200.66q58 0 98.34-40.34Q620-508 620-566t-40.33-98.33q-40.34-40.34-98.34-40.34T383-664.33Q342.67-624 342.67-566T383-467.67q40.33 40.34 98.33 40.34ZM250-186.67h460V-196q-50-42.33-108.33-63.83-58.34-21.5-121.67-21.5t-121.67 21.5Q300-238.33 250-196V-186.67ZM481.33-494q-30 0-51-21t-21-51q0-30 21-51t51-21q30 0 51 21t21 51q0 30-21 51t-51 21Zm-1.33-6.33Z"/></svg>
                        <span>Employés</span></a>
                </li>
                 <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Placement</span></a>
=======
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            @endif
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>