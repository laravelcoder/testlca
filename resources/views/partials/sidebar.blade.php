@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>

            @can('dashboard_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>@lang('global.dashboards.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('lca_dashboard_access')
                    <li>
                        <a href="{{ route('admin.lca_dashboards.index') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>@lang('global.lca-dashboard.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('analytical_dashboard_access')
                    <li>
                        <a href="{{ route('admin.analytical_dashboards.index') }}">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>@lang('global.analytical-dashboard.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('adwords_dashboard_access')
                    <li>
                        <a href="{{ route('admin.adwords_dashboards.index') }}">
                            <i class="fa fa-google"></i>
                            <span>@lang('global.adwords-dashboard.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('call_metric_access')
                    <li>
                        <a href="{{ route('admin.call_metrics.index') }}">
                            <i class="fa fa-phone-square"></i>
                            <span>@lang('global.call-metrics.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('bookings_dashboard_access')
                    <li>
                        <a href="{{ route('admin.bookings_dashboards.index') }}">
                            <i class="fa fa-calendar-check-o"></i>
                            <span>@lang('global.bookings-dashboard.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('clinic_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-medkit"></i>
                    <span>@lang('global.clinic-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('contact_company_access')
                    <li>
                        <a href="{{ route('admin.contact_companies.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span>@lang('global.contact-companies.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('clinic_access')
                    <li>
                        <a href="{{ route('admin.clinics.index') }}">
                            <i class="fa fa-map-marker"></i>
                            <span>@lang('global.clinics.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('contact_access')
                    <li>
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span>@lang('global.contacts.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('location_access')
                    <li>
                        <a href="{{ route('admin.locations.index') }}">
                            <i class="fa fa-sitemap"></i>
                            <span>@lang('global.locations.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('website_access')
                    <li>
                        <a href="{{ route('admin.websites.index') }}">
                            <i class="fa fa-internet-explorer"></i>
                            <span>@lang('global.website.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('analytic_access')
                    <li>
                        <a href="{{ route('admin.analytics.index') }}">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>@lang('global.analytics.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('adword_access')
                    <li>
                        <a href="{{ route('admin.adwords.index') }}">
                            <i class="fa fa-bookmark"></i>
                            <span>@lang('global.adwords.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('zipcode_access')
                    <li>
                        <a href="{{ route('admin.zipcodes.index') }}">
                            <i class="fa fa-code-fork"></i>
                            <span>@lang('global.zipcodes.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('tracking_number_access')
                    <li>
                        <a href="{{ route('admin.tracking_numbers.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.tracking-numbers.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('booking_access')
            <li>
                <a href="{{ route('admin.bookings.index') }}">
                    <i class="fa fa-calendar-plus-o"></i>
                    <span>@lang('global.bookings.title')</span>
                </a>
            </li>@endcan
            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('global.users.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('permission_access')
                    <li>
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.permissions.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('task_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>@lang('global.task-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('task_access')
                    <li>
                        <a href="{{ route('admin.tasks.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.tasks.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('task_status_access')
                    <li>
                        <a href="{{ route('admin.task_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span>@lang('global.task-statuses.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('task_tag_access')
                    <li>
                        <a href="{{ route('admin.task_tags.index') }}">
                            <i class="fa fa-server"></i>
                            <span>@lang('global.task-tags.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('task_calendar_access')
                    <li>
                        <a href="{{ route('admin.task_calendars.index') }}">
                            <i class="fa fa-calendar"></i>
                            <span>@lang('global.task-calendar.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('api_test_access')
            <li>
                <a href="{{ route('admin.api_tests.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.api-test.title')</span>
                </a>
            </li>@endcan
            

            

            
            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ route('admin.messenger.index') }}">
                    <i class="fa fa-envelope"></i>

                    <span>Messages</span>
                    @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('global.app_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

