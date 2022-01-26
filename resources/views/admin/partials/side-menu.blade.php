<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin/assets') }}/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>

            </li>

            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Clients</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.client.index') }}"><i class="fa fa-list"></i>Client List</a></li>

                    <li><a href="{{ route('admin.client.create') }}"><i class="fa fa-plus"></i>Add Client</a></li>
                </ul>
            </li>
            <li class="treeview {{ request()->is('admin/blog*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Blogs</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.blog.index') }}"><i class="fa fa-list"></i>Blog List</a></li>

                    <li><a href="{{ route('admin.blog.create') }}"><i class="fa fa-plus"></i>Add Blog</a></li>
                </ul>
            </li>
            <li class="treeview {{ request()->is('admin/news*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-share"></i> <span>News</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.news.index') }}"><i class="fa fa-list"></i>News List</a></li>

                    <li><a href="{{ route('admin.news.create') }}"><i class="fa fa-plus"></i>Add News</a></li>
                </ul>
            </li>

            <li class="treeview {{ request()->is('admin/project*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Projects</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.project.index') }}"><i class="fa fa-list"></i>Projects List</a></li>
                    <li><a href="{{ route('admin.project.create') }}"><i class="fa fa-plus"></i>Add Projects</a></li>
                </ul>
            </li>

            <li
                class="treeview {{ request()->is('admin/team*') || request()->is('admin/expert*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Peoples</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.team.index') }}"><i class="fa fa-list"></i>Our Team List</a></li>
                    <li><a href="{{ route('admin.team.create') }}"><i class="fa fa-plus"></i>Add Our Team</a></li>
                    <li><a href="{{ route('admin.expert.index') }}"><i class="fa fa-list"></i>Expert Sportlight List</a></li>
                    <li><a href="{{ route('admin.expert.create') }}"><i class="fa fa-plus"></i>Add Expert Sportlight</a></li>
                </ul>
            </li>
            
            {{-- <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> --}}
            <li class="header">General Menus</li>
            <li
                class="treeview {{ request()->is('admin/category*') || request()->is('admin/slider*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-list"></i>Category List</a></li>
                    <li><a href="{{ route('admin.category.create') }}"><i class="fa fa-plus"></i>Add Caategory</a></li>
                    <li><a href="{{ route('admin.slider.index') }}"><i class="fa fa-list"></i>Slider List</a></li>
                    <li><a href="{{ route('admin.slider.create') }}"><i class="fa fa-plus"></i>Add Slider</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
