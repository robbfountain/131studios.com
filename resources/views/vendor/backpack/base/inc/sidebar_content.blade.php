<ul class="sidebar-menu">
    <li class="header">{{ trans('backpack::base.administration') }}</li>

    @hasanyrole(['Administrator','Editor','Author'])

    <!-- Dashboard -->
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i
                    class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a>
    </li>

    <!-- News -->
    <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i
                    class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ url('admin/article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a>
            </li>
            <li><a href="{{ url('admin/category') }}"><i class="fa fa-list"></i> <span>Categories</span></a>
            </li>
            <li><a href="{{ url('admin/tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
        </ul>
    </li>

    <!-- Files -->
    <li>
        <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i
                    class="fa fa-files-o"></i> <span>File manager</span></a>
    </li>
    @endhasanyrole


    @hasrole('Administrator')

    <li>
        <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/project') }}"><i
                    class="fa fa-paint-brush"></i> <span>Projects</span></a>
    </li>

    <li>
        <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/contact') }}"><i
                    class="fa fa-address-card-o"></i> <span>Contacts</span></a>
    </li>

    <li>
        <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/clients') }}"><i
                    class="fa fa-address-card-o"></i> <span>Clients</span></a>
    </li>

    <!-- Roles & Permissions -->
    <li class="treeview">
        <a href="#"><i class="fa fa-group"></i> <span>Users, Roles &amp; Permissions</span> <i
                    class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ url('admin/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
            <li><a href="{{ url('admin/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
            <li><a href="{{ url('admin/permission') }}"><i class="fa fa-key"></i>
                    <span>Permissions</span></a></li>
        </ul>
    </li>

    <!-- Logs -->
    <li>
        <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}"><i
                    class="fa fa-terminal"></i> <span>Logs</span></a>
    </li>
    @endhasrole

    <!-- ======================================= -->
    <li class="header">{{ trans('backpack::base.user') }}</li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i
                    class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
</ul>