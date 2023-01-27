<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">
                    Administrator
                </a>
                <div class="dropdown-menu user-pro-dropdown">
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
            <p class="text-muted">Administrator</p>
        </div>

        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Apps</li>
                <li>
                    <a href="#sidebarDashboards" data-bs-toggle="collapse">
                        <i data-feather="airplay"></i>
                        <span> Dashboards </span>
                    </a>
                </li>
                <li class="menu-title mt-2">Management</li>
                <li>
                    <a href="#productManagement" data-bs-toggle="collapse">
                        <i data-feather="hard-drive"></i>
                        <span> Product Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="productManagement">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Product Category</a>
                            </li>
                            <li>
                                <a href="#">Product Sub Category</a>
                            </li>
                            <li>
                                <a href="{{ route('product-varient.index') }}">Product Varient</a>
                            </li>
                            <li>
                                <a href="#">Product Varient Value</a>
                            </li>
                            <li>
                                <a href="#">Product</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#purchaseOrder" data-bs-toggle="collapse">
                        <i data-feather="shopping-bag"></i>
                        <span> Purchase Order </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="purchaseOrder">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Vendor</a>
                            </li>
                            <li>
                                <a href="#">Purchase Order</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
