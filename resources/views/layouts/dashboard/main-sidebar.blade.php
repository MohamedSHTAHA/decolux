<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('front')}}/images/Untitled-1.png" alt="AdminLTE Logo" class="brand-image  elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">-GB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dashboard')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
                
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar <small>+ Custom Area</small></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/uplot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>uPlot</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/buttons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buttons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/sliders.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/modals.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modals & Alerts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/navbar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Navbar & Tabs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/timeline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Timeline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/ribbons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ribbons</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Advanced Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Editors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/validation.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Validation</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/kanban.html" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Kanban Board
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>--}}
                <li class="nav-item @if (request()->route()->getName()== 'dashboard.news.index' || request()->route()->getName()== 'dashboard.news.create'|| request()->route()->getName()== 'dashboard.comments'|| request()->route()->getName()== 'dashboard.comments.create')  menu-open @endif">
                    <a href="#" class="nav-link  @if (request()->route()->getName()== 'dashboard.news.index' || request()->route()->getName()== 'dashboard.news.create'|| request()->route()->getName()== 'dashboard.comments'|| request()->route()->getName()== 'dashboard.comments.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            News
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item  @if (request()->route()->getName()== 'dashboard.news.index' || request()->route()->getName()== 'dashboard.news.create')  menu-open @endif">
                            <a href="{{ route('dashboard.news.index') }}" class="nav-link  @if (request()->route()->getName()== 'dashboard.news.index' || request()->route()->getName()== 'dashboard.news.create')  active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add News</p>
                            </a>
                        </li>

                        <li class="nav-item  @if (request()->route()->getName()== 'dashboard.comments' || request()->route()->getName()== 'dashboard.comments')  menu-open @endif">
                            <a href="{{ route('dashboard.comments') }}" class="nav-link  @if (request()->route()->getName()== 'dashboard.comments' || request()->route()->getName()== 'dashboard.comments')  active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Comments</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item @if (request()->route()->getName()== 'dashboard.services.index' || request()->route()->getName()== 'dashboard.services.create'|| request()->route()->getName()== 'dashboard.servicesdetails.index'|| request()->route()->getName()== 'dashboard.servicesdetails.create')  menu-open @endif">
                    <a href="#" class="nav-link  @if (request()->route()->getName()== 'dashboard.services.index' || request()->route()->getName()== 'dashboard.services.create'|| request()->route()->getName()== 'dashboard.servicesdetails.index'|| request()->route()->getName()== 'dashboard.servicesdetails.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            services
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item  @if (request()->route()->getName()== 'dashboard.services.index' || request()->route()->getName()== 'dashboard.services.create')  menu-open @endif">
                            <a href="{{ route('dashboard.services.index') }}" class="nav-link  @if (request()->route()->getName()== 'dashboard.services.index' || request()->route()->getName()== 'dashboard.services.create')  active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add services</p>
                            </a>
                        </li>
                        <li class="nav-item  @if (request()->route()->getName()== 'dashboard.servicesdetails.index' || request()->route()->getName()== 'dashboard.servicesdetails.create')  menu-open @endif">
                            <a href="{{ route('dashboard.servicesdetails.index') }}" class="nav-link  @if (request()->route()->getName()== 'dashboard.servicesdetails.index' || request()->route()->getName()== 'dashboard.servicesdetails.create')  active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add service Details</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item @if (request()->route()->getName()== 'dashboard.projects.index' || request()->route()->getName()== 'dashboard.projects.create')  menu-open @endif">
                    <a href="#" class="nav-link @if (request()->route()->getName()== 'dashboard.projects.index' || request()->route()->getName()== 'dashboard.projects.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Projects
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('dashboard.projects.index') }}" class="nav-link @if (request()->route()->getName()== 'dashboard.projects.index') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('dashboard.projects.create') }}" class="nav-link @if (request()->route()->getName() == 'dashboard.projects.create') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Project</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item @if (request()->route()->getName()== 'dashboard.galleries.index' || request()->route()->getName()== 'dashboard.galleries.create')  menu-open @endif">
                    <a href="#" class="nav-link @if (request()->route()->getName()== 'dashboard.galleries.index' || request()->route()->getName()== 'dashboard.galleries.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            galleries
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('dashboard.galleries.index') }}" class="nav-link @if (request()->route()->getName()== 'dashboard.galleries.index') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>galleries</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('dashboard.galleries.create') }}" class="nav-link @if (request()->route()->getName() == 'dashboard.galleries.create') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add gallery</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item @if (request()->route()->getName()== 'dashboard.countries.index' || request()->route()->getName()== 'dashboard.countries.create')  menu-open @endif">
                    <a href="#" class="nav-link @if (request()->route()->getName()== 'dashboard.countries.index' || request()->route()->getName()== 'dashboard.countries.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            countries
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('dashboard.countries.index') }}" class="nav-link @if (request()->route()->getName()== 'dashboard.countries.index') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>countries</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('dashboard.countries.create') }}" class="nav-link @if (request()->route()->getName() == 'dashboard.countries.create') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add country</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item @if (request()->route()->getName()== 'dashboard.types.index' || request()->route()->getName()== 'dashboard.types.create')  menu-open @endif">
                    <a href="#" class="nav-link @if (request()->route()->getName()== 'dashboard.types.index' || request()->route()->getName()== 'dashboard.types.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            types
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('dashboard.types.index') }}" class="nav-link @if (request()->route()->getName()== 'dashboard.types.index') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>types</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('dashboard.types.create') }}" class="nav-link @if (request()->route()->getName() == 'dashboard.types.create') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add type</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item @if (request()->route()->getName()== 'dashboard.jops.index' || request()->route()->getName()== 'dashboard.jops.create')  menu-open @endif">
                    <a href="#" class="nav-link @if (request()->route()->getName()== 'dashboard.jops.index' || request()->route()->getName()== 'dashboard.jops.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            jobs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('dashboard.jops.index') }}" class="nav-link @if (request()->route()->getName()== 'dashboard.jops.index') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jobs</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('dashboard.jops.create') }}" class="nav-link @if (request()->route()->getName() == 'dashboard.jops.create') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add job</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item @if (request()->route()->getName()== 'dashboard.contactUs.index' || request()->route()->getName()== 'dashboard.contactUs.create')  menu-open @endif">
                    <a href="#" class="nav-link  @if (request()->route()->getName()== 'dashboard.contactUs.index' || request()->route()->getName()== 'dashboard.contactUs.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Contact Us
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item  @if (request()->route()->getName()== 'dashboard.contactUs.index' || request()->route()->getName()== 'dashboard.contactUs.create')  menu-open @endif">
                            <a href="{{ route('dashboard.contactUs.index') }}" class="nav-link  @if (request()->route()->getName()== 'dashboard.contactUs.index' || request()->route()->getName()== 'dashboard.contactUs.create')  active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Contact Us</p>
                            </a>
                        </li>



                    </ul>
                </li>




                <li class="nav-item @if (request()->route()->getName()== 'dashboard.faqs.index' || request()->route()->getName()== 'dashboard.faqs.create')  menu-open @endif">
                    <a href="#" class="nav-link  @if (request()->route()->getName()== 'dashboard.faqs.index' || request()->route()->getName()== 'dashboard.faqs.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Faqs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item  @if (request()->route()->getName()== 'dashboard.faqs.index' || request()->route()->getName()== 'dashboard.faqs.create')  menu-open @endif">
                            <a href="{{ route('dashboard.faqs.index') }}" class="nav-link  @if (request()->route()->getName()== 'dashboard.faqs.index' || request()->route()->getName()== 'dashboard.faqs.create')  active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add faqs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if (request()->route()->getName()== 'dashboard.settings.index' || request()->route()->getName()== 'dashboard.settings.create')  menu-open @endif">
                    <a href="#" class="nav-link  @if (request()->route()->getName()== 'dashboard.settings.index' || request()->route()->getName()== 'dashboard.settings.create')  active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item  @if (request()->route()->getName()== 'dashboard.settings.index' || request()->route()->getName()== 'dashboard.settings.create')  menu-open @endif">
                            <a href="{{ route('dashboard.settings.index') }}" class="nav-link  @if (request()->route()->getName()== 'dashboard.settings.index' || request()->route()->getName()== 'dashboard.settings.create')  active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>