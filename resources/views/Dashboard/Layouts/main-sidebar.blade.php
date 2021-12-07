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


            <!-- Sub Menu -->
            <ul class="nav sub-menu">
                <li><a href="pages/ecommerce/ecommerce.html">Dashboard 1</a></li>
                <li><a href="pages/ecommerce/ecommerce2.html">dashboard 2</a></li>
                <li><a href="pages/ecommerce/orders.html">orders</a></li>
                <li><a href="pages/ecommerce/product-catelog.html">Products Catalog</a></li>
                <li><a href="pages/ecommerce/product-details.html">Product Details</a></li>
                <li><a href="pages/ecommerce/cartlist.html">cart list</a></li>
            </ul>
            <!-- End Sub Menu -->


            <li>
                <a href="#">
                    <i class="icon_document_alt"></i>
                    <span class="link-title">news</span>
                </a>

                <!-- Sub Menu -->
                <ul class="nav sub-menu">
                {{--
                      <li><a href="{{route('news.index')}}">latest news</a></li>
                    <li><a href="{{route('news.create')}}">add news</a></li>
 --}}

                </ul>


            <li>
                <a href="#">
                    <i class="icon_pencil"></i>
                    <span class="link-title">convention</span>
                </a>

                <li>
                    <a href="#">
                        <i class="icon_pencil"></i>
                        <span class="link-title">convention</span>
                    </a>

                    <!-- Sub Menu -->
                    <ul class="nav sub-menu">

                        <li><a href="{{route('convention.index')}}">conventions</a></li>
                        <li><a href="{{route('convention.create')}}">add convention</a></li>

                    </ul>


                <!-- Sub Menu -->
                <ul class="nav sub-menu">
                    <li><a href="{{route('convention.index')}}">conventions</a></li>
                    <li><a href="{{route('convention.create')}}">add convention</a></li>
                </ul>


                <!-- End Sub Menu -->

            <li class="nav-category">apps</li>
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

                    <i class="icofont-dollar-true"></i>
                    <span class="link-title">{{trans('Dashboard\trans_main_sidebar.prices')}}</span>
                </a>

            <li>
                <a href="#">
                    <i class="icofont-file-document"></i>
                    <span class="link-title">invoice</span>
                </a>
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
                       {{--najat urls--}}
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







            {{--<li>--}}
            {{--<a href="pages/ui-elements/widget.html">--}}
            {{--<i class="icofont-magic-alt"></i>--}}
            {{--<span class="link-title">widgets</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-brand-icofont"></i>--}}
            {{--<span class="link-title">Icons (Aniloan)</span>--}}
            {{--</a>--}}
            {{--</li>--}}
                {{--<!-- Sub Menu -->--}}
                {{--<ul class="nav sub-menu">--}}
                    {{--<li><a href="pages/apps/project-manager/project.html">project status</a></li>--}}
                    {{--<li><a href="pages/apps/project-manager/task-list.html">task list</a></li>--}}
                    {{--<li><a href="pages/apps/project-manager/create-new.html">create new Board</a></li>--}}
                {{--</ul>--}}
                {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<i class="icofont-files-stack"></i>--}}
                    {{--<span class="link-title">file manager</span>--}}
                {{--</a>--}}
            <li class="nav-category">UI Elements</li>
            <li>
                <a href="pages/ui-elements/widget.html">
                    <i class="icofont-magic-alt"></i>
                    <span class="link-title">widgets</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icofont-brand-icofont"></i>
                    <span class="link-title">Icons (Aniloan)</span>
                </a>
            </li>

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/apps/file-manager/file-info.html">file info</a></li>--}}
            {{--<li><a href="pages/apps/file-manager/share.html">share</a></li>--}}
            {{--<li><a href="pages/apps/file-manager/upload.html">upload new file</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li class="nav-category">UI Elements</li>--}}
            {{--<li>--}}
            {{--<a href="pages/ui-elements/widget.html">--}}
            {{--<i class="icofont-magic-alt"></i>--}}
            {{--<span class="link-title">widgets</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-brand-icofont"></i>--}}
            {{--<span class="link-title">Icons (Aniloan)</span>--}}
            {{--</a>--}}

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/ui-elements/icons/iconfont.html">ico font</a></li>--}}
            {{--<li><a href="pages/ui-elements/icons/materializeicon.html">Materialize Icons</a></li>--}}
            {{--<li><a href="pages/ui-elements/icons/et-lineicon.html">Et-Line Icons</a></li>--}}
            {{--<li><a href="pages/ui-elements/icons/eleganticon.html">Elegant Icons</a></li>--}}
            {{--<li><a href="pages/ui-elements/icons/pe-7strokeicon.html">Pe-7 Stroke Icons</a></li>--}}
            {{--<li><a href="pages/ui-elements/icons/themifyicon.html">Themify Icons</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/ui-elements/color.html">--}}
            {{--<i class="icofont-eye-dropper"></i>--}}
            {{--<span class="link-title">color</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/ui-elements/extra-component.html">--}}
            {{--<i class="icofont-plus"></i>--}}
            {{--<span class="link-title">extra Component</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-category">Form & Table</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-table"></i>--}}
            {{--<span class="link-title">Form Elements</span>--}}
            {{--</a>--}}

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/form&table/form-elements/base-input.html">Base Input</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/input-group.html">Input Groups</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/checkbox.html">Checkbox</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/radio.html">radio</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/switch.html">Switch</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/number-input.html">Number Input</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/textarea.html">Text Area</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/text-editor.html">Text Editor (Quill Editor)</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/file-uploader.html">File Uploader</a></li>--}}
            {{--<li><a href="pages/form&table/form-elements/datetime-picker.html">Date & Time Picker</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/form&table/form-layout.html">--}}
            {{--<i class="icofont-layout"></i>--}}
            {{--<span class="link-title">Form Layout</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/form&table/form-wizard.html">--}}
            {{--<i class="icofont-ui-file"></i>--}}
            {{--<span class="link-title">Form Wizard</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/form&table/form-validation.html">--}}
            {{--<i class="icofont-exclamation-circle"></i>--}}
            {{--<span class="link-title">Form Validation</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/form&table/form-repeater.html">--}}
            {{--<i class="icofont-meeting-add"></i>--}}
            {{--<span class="link-title">Form Repeater</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/form&table/table.html">--}}
            {{--<i class="icofont-table"></i>--}}
            {{--<span class="link-title">Table</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/form&table/table-extended.html">--}}
            {{--<i class="icofont-contact-add"></i>--}}
            {{--<span class="link-title">Table Extended</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-category">pages</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-ui-user"></i>--}}
            {{--<span class="link-title">User Profile</span>--}}
            {{--</a>--}}

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/pages/user-profile/news-feed.html">News Feed</a></li>--}}
            {{--<li><a href="pages/pages/user-profile/about.html">about</a></li>--}}
            {{--<li><a href="pages/pages/user-profile/gallery.html">gallery</a></li>--}}
            {{--<li><a href="pages/pages/user-profile/connection.html">Connections</a></li>--}}
            {{--<li><a href="pages/pages/user-profile/profile-chat.html">Chat</a></li>--}}
            {{--<li><a href="pages/pages/user-profile/edit-profile.html">Edit Profile</a></li>--}}
            {{--<li><a href="pages/pages/user-profile/user-dashboard.html">User Dashboard</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/pages/faq.html">--}}
            {{--<i class="icofont-support-faq"></i>--}}
            {{--<span class="link-title">FAQ</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/pages/price.html">--}}
            {{--<i class="icofont-price"></i>--}}
            {{--<span class="link-title">Pricing</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/pages/timeline.html">--}}
            {{--<i class="icofont-clock-time"></i>--}}
            {{--<span class="link-title">Timeline</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/pages/account-setting.html">--}}
            {{--<i class="icofont-settings-alt"></i>--}}
            {{--<span class="link-title">Account Settings</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-check-circled"></i>--}}
            {{--<span class="link-title">Authentication</span>--}}
            {{--</a>--}}

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/pages/authentication/login.html">Log In</a></li>--}}
            {{--<li><a href="pages/pages/authentication/register.html">Register</a></li>--}}
            {{--<li><a href="pages/pages/authentication/forget-pass.html">Forget Password</a></li>--}}
            {{--<li><a href="pages/pages/authentication/reset-pass.html">Reset Password</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-exclamation-tringle"></i>--}}
            {{--<span class="link-title">Miscellaneous</span>--}}
            {{--</a>--}}

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/pages/miscellaneous/comming-soon.html">Coming Soon</a></li>--}}
            {{--<li><a href="pages/pages/miscellaneous/404.html">404 Error</a></li>--}}
            {{--<li><a href="pages/pages/miscellaneous/500.html">500 Error</a></li>--}}
            {{--<li><a href="pages/pages/miscellaneous/page-not-authorized.html">Not Authorized</a></li>--}}
            {{--<li><a href="pages/pages/miscellaneous/maintenance.html">Maintenance</a></li>--}}
            {{--<li><a href="pages/pages/miscellaneous/session-timeout.html">Session Timeout</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li class="nav-category">Chart & Maps</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-chart-pie-alt"></i>--}}
            {{--<span class="link-title">charts</span>--}}
            {{--</a>--}}

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/charts/apex.html">Apex</a></li>--}}
            {{--<li><a href="pages/charts/chartjs.html">Chartjs</a></li>--}}
            {{--<li><a href="pages/charts/morrischart.html">Morris Chart</a></li>--}}
            {{--<li><a href="pages/charts/flotchart.html">Flot Chart</a></li>--}}
            {{--<li><a href="pages/charts/chartist.html">Chartist Chart</a></li>--}}
            {{--<li><a href="pages/charts/c3-chart.html">C3 Chart</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li class="nav-category">Extensions</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/sweet-alert.html">--}}
            {{--<i class="icofont-notification"></i>--}}
            {{--<span class="link-title">Sweet Alert</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/toastr.html">--}}
            {{--<i class="icofont-dice"></i>--}}
            {{--<span class="link-title">Toastr</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/noui-slider.html">--}}
            {{--<i class="icofont-filter"></i>--}}
            {{--<span class="link-title">NoUi Slider</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/dragdrop.html">--}}
            {{--<i class="icofont-drag"></i>--}}
            {{--<span class="link-title">Drag & Drop</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/tour.html">--}}
            {{--<i class="icofont-education"></i>--}}
            {{--<span class="link-title">Tour</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/swiper.html">--}}
            {{--<i class="icofont-swoosh-right"></i>--}}
            {{--<span class="link-title">Swiper</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/treeview.html">--}}
            {{--<i class="icofont-tree-alt"></i>--}}
            {{--<span class="link-title">Treeview</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/block-ui.html">--}}
            {{--<i class="icofont-card"></i>--}}
            {{--<span class="link-title">Block-UI</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/media-player.html">--}}
            {{--<i class="icofont-multimedia"></i>--}}
            {{--<span class="link-title">Media Player</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="pages/extensions/i18n.html">--}}
            {{--<i class="icofont-globe"></i>--}}
            {{--<span class="link-title">i18n</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-category">others</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-navigation-menu"></i>--}}
            {{--<span class="link-title">Menu Levels</span>--}}
            {{--</a>--}}

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="#">Second Level 01</a>--}}
            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="#">Third Level 01</a></li>--}}
            {{--<li><a href="#">Third Level 02</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li><a href="#">Second Level 02</a>--}}
            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="#">Third Level 01</a></li>--}}
            {{--<li><a href="#">Third Level 02</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-shopping-cart"></i>--}}
            {{--<span class="link-title">Ecommerce</span>--}}
            {{--</a>--}}

            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/ecommerce/ecommerce.html">Dashboard 1</a></li>--}}
            {{--<li><a href="pages/ecommerce/ecommerce2.html">dashboard 2</a></li>--}}
            {{--<li><a href="pages/ecommerce/orders.html">orders</a></li>--}}
            {{--<li><a href="pages/ecommerce/product-catelog.html">Products Catalog</a></li>--}}
            {{--<li><a href="pages/ecommerce/product-details.html">Product Details</a></li>--}}
            {{--<li><a href="pages/ecommerce/cartlist.html">cart list</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}

            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icofont-mail-box"></i>--}}
            {{--<span class="link-title">Email</span>--}}
            {{--</a>--}}
            {{--<!-- Sub Menu -->--}}
            {{--<ul class="nav sub-menu">--}}
            {{--<li><a href="pages/apps/email/inbox.html">Inbox</a></li>--}}
            {{--<li><a href="pages/apps/email/read.html">Read</a></li>--}}
            {{--<li><a href="pages/apps/email/compose.html">Compose</a></li>--}}
            {{--</ul>--}}
            {{--<!-- End Sub Menu -->--}}
            {{--</li>--}}

            {{--<li>--}}
            {{--<a href="#" class="disabled">--}}
            {{--<i class="icofont-not-allowed"></i>--}}
            {{--<span class="link-title">Disable Menu</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-category">Support</li>--}}

        </ul>
        <!-- End Nav -->

    </div>
    <!-- End Sidebar Body -->
</nav>
