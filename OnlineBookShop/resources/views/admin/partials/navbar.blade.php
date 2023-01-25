<!-- Navbar (admin) start -->
    <div class="page-container">
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
        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
<!-- Navbar (admin) end -->
