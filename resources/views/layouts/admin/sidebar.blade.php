<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">whaFood Admin <sup> </sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Category Menu -->
    <li class="nav-item {{Request::is('admin/category/create') || Request::is('admin/categories') ? 'active' : ''}}">
        <a class="nav-link {{Request::is('admin/category/create') || Request::is('admin/categories') ? '' : 'collapsed'}}" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="{{Request::is('admin/category/create') || Request::is('admin/categories') ? true : false}}" aria-controls="collapseCategory">
            <i class="fas fa-calendar"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategory" class="collapse {{Request::is('admin/category/create') || Request::is('admin/categories') ? 'show' : ''}}" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{Request::is('admin/category/create') ? 'active' : ''}}" href="{{ url('/admin/category/create') }}">Add Categories</a> 
                <a class="collapse-item {{ Request::is('admin/categories') ? 'active' : ''}}" href="{{ url('/admin/categories') }}">View Categories</a>
                <a class="collapse-item {{ Request::is('admin/categories/trash') ? 'active' : ''}}" href="{{ url('/admin/categories/trash') }}">Trash</a>
            </div>
        </div>
    </li>

 <hr class="sidebar-divider">
    <li class="nav-item {{Request::is('admin.product.create') || Request::is('admin.products')}} ? 'active' : ''}}">
        <a class="nav-link {{Request::is('admin.product.create') || Request::is('admin.products')}} ? '' : 'collapsed'}}" href="#" data-toggle="collapse" data-target="#collapseCourse"
            aria-expanded="{{Request::is('admin.product.create') || Request::is('admin.products')}} ? true : false}}" aria-controls="collapseCourse">
            <i class="fab fa-discourse"></i>
            <span>Products</span>
        </a>
        <div id="collapseCourse" class="collapse {{Request::is('admin.product.create') || Request::is('admin.products')}} ? 'show' : ''}}" aria-labelledby="headingCourse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{Request::is('admin.product.create') ? 'active' : ''}}" href="{{ url('/admin/product/create') }}">Add Course</a>
                <a class="collapse-item {{ Request::is('admin.products')}} ? 'active' : ''}}" href="{{ url('/admin/products') }}">View Courses</a>
                <a class="collapse-item {{ Request::is('admin/products/trash') ? 'active' : ''}}" href="{{ url('/admin/products/trash') }}">Trash</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Featured Menu -->
    <hr class="sidebar-divider">

    <li
        class="nav-item {{ Request::is('admin/featured/products') || Request::is('admin/featured/categories') ? 'active' : '' }} ">
        <a class="nav-link {{ Request::is('admin/featured/products') || Request::is('admin/featured/categories') ? '' : 'collapsed' }} "
            href="#" data-toggle="collapse" data-target="#collapseFeatured"
            aria-expanded="{{ Request::is('admin/featured/products') || Request::is('admin/featured/categories') ? true : false }}"
            aria-controls="collapseFeatured">
            <i class="fab fa-stack-exchange"></i>
            <span>Featured</span>
        </a>
        <div id="collapseFeatured" class="collapse {{Request::is('admin/featured/products') || Request::is('admin/featured/categories') ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('admin/featured/products') ? 'active' : '' }}"
                    href="{{ url('/admin/featured/products') }}">Products</a>
                <a class="collapse-item {{ Request::is('admin/featured/categories') ? 'active' : '' }}"
                    href="{{ url('/admin/featured/categories') }}">Categories</a>
            </div>
        </div>
    </li>


    {{-- <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    {{-- <!-- Divider -->
    <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
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
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
