<nav class="sidebar" data-trigger="scrollbar">
    <!-- Sidebar Header -->
    <div class="sidebar-header d-none d-lg-block">
        <!-- Sidebar Toggle Pin Button -->
        <div class="sidebar-toogle-pin">
            <i class="icofont-tack-pin"></i>
        </div>
        <!-- End Sidebar Toggle Pin Button -->
    </div>
    <!-- End Sidebar Header -->

    <!-- Sidebar Body -->
    <div class="sidebar-body">
        <!-- Nav -->
        <ul class="nav">
            <li class="nav-category">{{trans('Dashboard\trans_main_sidebar.Main')}}</li>
            <li class="active">
                <a href="{{route('admin.index')}}">
                    <i class="icofont-pie-chart"></i>
                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.Main')}}</span>
                </a>
            </li>
            <li class="nav-category">Main</li>
            <li>
                <a href="#">
                    <i class="icon_document_alt"></i>
                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.news')}}</span>
                </a>

                <!-- Sub Menu -->
                <ul class="nav sub-menu">
                    <li><a href="{{route('news.index')}}">{{trans('Dashboard\trans_main_sidebar.news')}}</a></li>
                    <li><a href="{{route('news.create')}}">{{trans('Dashboard\trans_main_sidebar.add news')}}</a></li>


                </ul>

            <li>
                <a href="#">
                    <i class="icon_pencil"></i>
                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.convention')}}</span>
                </a>

                <!-- Sub Menu -->
                <ul class="nav sub-menu">
                    <li><a href="{{route('convention.index')}}">{{trans('Dashboard\trans_main_sidebar.convention')}}</a></li>
                    <li><a href="{{route('convention.create')}}">{{trans('Dashboard\trans_main_sidebar.add convention')}}</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('contact.index')}}">
                    <i class="icofont-wechat"></i>
                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.message')}}</span>
                </a>

            <li>
                <a href="{{route('admin.delivery.index')}}">
                    <i class="icofont-mail-box"></i>
                    <span class="link-title">{{trans('Dashboard\delivery.logisticeServices')}}</span>
                </a>

            </li>
            <li>
                <a href="{{route('admin.employe.index')}}">
                    <i class="icofont-mail-box"></i>
                    <span class="link-title">{{trans('Dashboard\employe.linkTitle')}}</span>
                </a>

            </li>
            <li>
                <a href="{{route('admin.welcome.index')}}">
                    <i class="icofont-mail-box"></i>
                    <span class="link-title">{{trans('Dashboard\WelcomeSection.linkTitle')}}</span>
                </a>

            </li>

            <li>
                <a href="">
                    <i class="icofont-wechat"></i>
                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.Price Order')}}</span>
                </a>
                <!-- Sub Menu -->
                <ul class="nav sub-menu">
                    <li>
                        <a href="{{route('admin.priceOrder.index')}}">{{trans('Dashboard\trans_main_sidebar.Show All Messages')}}</a>
                    </li>
                    <li><a href="">{{trans('Dashboard\trans_main_sidebar.New Messages')}}</a></li>
                </ul>
                <!-- End Sub Menu -->
            </li>

            <li>

                <a href="#">
                    <i class="icofont-contact-add"></i>

                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.InfoSite')}}</span>
                </a>
                <!-- Sub Menu -->
                <ul class="nav sub-menu">
                    <li>
                        <a href="{{route('admin.info-site.index')}}">{{trans('Dashboard\trans_main_sidebar.Show All InfoSite')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.info-site.create')}}">{{trans('Dashboard\trans_main_sidebar.Create InfoSite')}}</a>
                    </li>
                </ul>
                <!-- End Sub Menu -->
            </li>

            <li>
                <a href="#">
                    <i class="icofont-contact-add"></i>
                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.Testimonials')}}</span>
                </a>

                <!-- Sub Menu -->
                <ul class="nav sub-menu">

                    <li>
                        <a href="{{route('admin.testimonial.index')}}">{{trans('Dashboard\trans_main_sidebar.Show All Testimonials')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.testimonial.unread')}}">{{trans('Dashboard\trans_main_sidebar.UnRead Testimonials')}}</a>
                    </li>

                    <li><a href="{{route('admin.testimonial.index')}}">{{trans('Dashboard\trans_main_sidebar.Show All Testimonials')}}</a></li>
                    <li><a href="{{route('admin.testimonial.unread')}}">{{trans('Dashboard\trans_main_sidebar.UnRead Testimonials')}}</a></li>

                </ul>
                <!-- End Sub Menu -->
            </li>

            <li>
                <a href="#">
                    <i class="icofont-contact-add"></i>
                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.Partners')}}</span>
                </a>
                <!-- Sub Menu -->
                <ul class="nav sub-menu">

                    <li><a href="{{route('admin.partner.index')}}">{{trans('Dashboard\trans_main_sidebar.Show All Partners')}}</a></li>
                    <li><a href="{{route('admin.partner.create')}}">{{trans('Dashboard\trans_main_sidebar.Add New Partner')}}</a></li>

                </ul>
                <!-- End Sub Menu -->
            </li>







            @if(Auth::guard('web')->check())
                <li class="nav-category">{{trans('Dashboard\trans_main_sidebar.users_main')}}</li>
                <li>
                    <a href="#">
                        <i class="icofont-users-alt-5"></i>
                        <span class="link-title">{{trans('Shipments')}}</span>
                    </a>

                    <!-- Sub Menu -->
                    <ul class="nav sub-menu">
                        <li><a href="{{url('Add_shipment')}}">{{trans('Dashboard\trans_main_sidebar.Shipping_list')}}</a></li>



                        <li><a href="{{url('show_tracking')}}">{{trans('Dashboard\trans_main_sidebar.shipping_track')}}</a>
                        </li>

                    </ul>
                    <!-- End Sub Menu -->
                </li>

            @elseif(Auth::guard('admin')->check())
                <li class="nav-category">Admin Main</li>
                <li>
                    <a href="#">
                        <i class="icofont-contact-add"></i>
                        <span class="link-title">Admin Shipment</span>
                    </a>

                    <!-- Sub Menu -->
                    <ul class="nav sub-menu">
                        <li><a href="{{route('admins_tracks.index')}}">list Adding shipment</a></li>
                    </ul>
                    <!-- End Sub Menu -->
                </li>

                <li>
                    <a href="#">
                        <i class="icofont-price"></i>
                        <span class="link-title">Admin Prices</span>
                    </a>

                    <!-- Sub Menu -->
                    <ul class="nav sub-menu">
                        <li><a href="{{route('prices.index')}}">List Prices</a></li>
                        <li><a href="{{route('prices.create')}}">Add Price Shipment</a></li>
                    </ul>
                    <!-- End Sub Menu -->
                </li>




            @elseif(Auth::guard('scanner')->check())

                <li class="nav-category">{{trans('Dashboard\trans_main_sidebar.scanner_main')}}</li>
                <li>
                    <a href="#">
                        <i class="icofont-picture"></i>
                        <span class="link-title">{{trans('Dashboard\trans_main_sidebar.Scanning')}}</span>
                    </a>

                    <!-- Sub Menu -->
                    <ul class="nav sub-menu">

                        <li><a href="{{url('scanner_tracks')}}">{{trans('Dashboard\trans_main_sidebar.scanner_track')}}</a>
                        </li>

                    </ul>
                    <!-- End Sub Menu -->
                </li>

            @elseif(Auth::guard('driver')->check())
                <li class="nav-category">{{trans('Dashboard\trans_main_sidebar.driver_main')}}</li>

                <li>
                    <a href="#">
                        <i class="icofont-taxi"></i>
                        <span class="link-title">{{trans('Dashboard\trans_main_sidebar.driver_stage')}}</span>
                    </a>

                    <!-- Sub Menu -->
                    <ul class="nav sub-menu">
                        <li><a href="{{route('drivers_tracks.index')}}">{{trans('Dashboard\trans_main_sidebar.driver_track')}}</a>
                        </li>

                    </ul>
                    <!-- End Sub Menu -->
                </li>





            @elseif(Auth::guard('warehousing_officer')->check())
                <li class="nav-category">{{trans('Dashboard\trans_main_sidebar.warehouse_main')}}</li>

                <li>
                    <a href="#">
                        <i class="icofont-brand-appstore"></i>
                        <span class="link-title">{{trans('Dashboard\trans_main_sidebar.warehouse_stage')}}</span>
                    </a>

                    <!-- Sub Menu -->
                    <ul class="nav sub-menu">
                        <li><a href="{{url('warehouse_tracks')}}">{{trans('Dashboard\trans_main_sidebar.warehouse_track')}}</a>
                        </li>

                    </ul>
                    <!-- End Sub Menu -->
                </li>

            @endif















        </ul>
        <!-- End Nav -->
        </ul>
    </div>
    <!-- End Sidebar Body -->
</nav>
