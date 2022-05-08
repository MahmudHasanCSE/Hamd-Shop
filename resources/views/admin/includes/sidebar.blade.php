<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{asset('/admin-assets')}}/img/avatar-1.jpg" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{Auth::user()->name}}</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Category</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('category.add')}}">Store</a>
                    </li>
                    <li>
                        <a href="{{route('category.manage')}}">Manage</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Sub Category</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('subcategory.add')}}">Create</a>
                    </li>
                    <li>
                        <a href="{{route('subcategory.manage')}}">Manage</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Brand</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('brand.add')}}">Create</a>
                    </li>
                    <li>
                        <a href="{{route('brand.manage')}}">Manage</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Unit</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('unit.add')}}">Store</a>
                    </li>
                    <li>
                        <a href="{{route('unit.manage')}}">Manage</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Product</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('product.add')}}">Add Product</a>
                    </li>
                    <li>
                        <a href="{{route('product.manage')}}">Manage Product</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
