<!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>User Management</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('admin.users.all') }}">List</a></li>
                                    <li><a href="{{ route('admin.users.create') }}">Add</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cube"></i><span>Product Management</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('admin.products.all')}}">List</a></li>
                                    <li><a href="{{ route('admin.products.create')}}">Add</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('admin.categories.index') }}"><i class="fa fa-object-group"></i> <span>Categories</span></a></li>
                            <li><a href="{{ route('admin.orders.index') }}"><i class="fa fa-list-ol"></i> <span>Orders</span></a></li>
                            <li><a href="{{ route('admin.payments.index') }}"><i class="fa fa-dollar"></i> <span>Payments</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- fullscreen and zoom out and extra -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->

