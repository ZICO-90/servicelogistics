<div id="header-top-wrap" class="is-clearfix">
    <div id="header-top" class="site-header-top">
        <div id="header-top-inner" class="site-header-top-inner container">
            <div class="level">
                <div class="level-left">
                    <ul class="topbar-info ">
                        @isset($infos)
                            @foreach($infos as $info)
                        <li>
                            <a href="#">
                      <span class="icon">
                        <i class="icon-clock"></i>
                      </span> {{$info['day']}} | {{$info['open_time']}} - {{$info['close_time']}} </a>
                        </li>
                        <li>
                            <a href="mailto:{{$info['email']}}">
                      <span class="icon">
                        <i class="icon-envelope"></i>
                      </span> {{$info['email']}} </a>
                        </li>
                        <li>
                            <a href="tel:{{$info['phone']}}">
                      <span class="icon">
                        <i class="icon-phone"></i>
                      </span> {{$info['phone']}} </a>
                        </li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
                <!-- .level-left -->
                <div class="level-right">
                    <ul class="header-menu-icons social">
                        @isset($infos)
                            @foreach($infos as $info)
                        <li>
                            <a href="{{$info['facebook_url']}}" target="_blank">
                      <span class="icon">
                        <i class="fab fa-facebook-f"></i>
                      </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$info['twitter_url']}}" target="_blank">
                      <span class="icon">
                        <i class="fab fa-twitter"></i>
                      </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$info['linkedin_url']}}" target="_blank">
                      <span class="icon">
                        <i class="fab fa-linkedin-in"></i>
                      </span>
                            </a>
                        </li>
                            @endforeach
                        @endisset
                    </ul>
                    <!-- .header-menu-icons -->
                    <!--- Start DropMenu Language --->
                    <div class="nav-menu-dropdown style-2 on-click">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                            <a rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                @if($properties['native']=="English")
                                    <span class="flag-icon flag-icon-gb"></span>
                                @elseif($properties['native']=="العربية")
                                    <span class="flag-icon flag-icon-eg"></span>
                                @endif
                            </a>
                        @endforeach
                    </div>

                </div>
                <!-- .level-right -->
            </div>
            <!-- .level -->
        </div>
        <!-- #header-top-inner -->
    </div>
    <!-- #header-top -->
</div>
<!-- #header-top-wrap -->
<div id="header-wrap" class="is-clearfix">
    <header id="header" class="site-header">
        <div id="header-inner" class="site-header-inner container">
            <div class="level">
                <div class="level-left">
                    <div id="header-logo" class="site-logo ">
                        <div id="logo-inner" class="site-logo-inner">
                            @isset($infos)
                                @foreach($infos as $info)
                            <a href="{{route('endUser.index')}}">
                                <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('images/info-site/'.$info['logo'])}}">
                                <span class="logo-text">{{$info['title']}}</span>
                            </a>
                                @endforeach
                            @endisset
                        </div>
                        <!-- #logo-inner -->
                    </div>
                    <!-- #header-logo -->
                </div>
                <!-- .level-left -->
                <div class="level-right">
                    <div class="nav-wrap">
                        <nav class="main-navigation right">
                            <ul class="menu">
                                <li class="mega-menu niche-templates active">
                                    <a href="{{route('endUser.index')}}">{{trans('front/home.home')}}</a>
                                </li>
                                <li>
                                    <a href="./features/index.html">{{trans('Dashboard\delivery.logisticeServices')}}</a>
                                    @isset($All_delivery)

                                    <ul>
                                        @foreach($All_delivery as $logistic)
                                        <li>
                                            <a href="javascript:void(0);">{{$logistic->name}}
                                                <span class="tag menu-mark is-secondary">wow</span>
                                            </a>

                                        </li>
                                        @endforeach

                                    </ul>


                                    @endisset
                                </li>
                                <li>
                                    <a href="{{route('login')}}">{{trans('Dashboard\trans_login.LogIn')}}</a>

                                </li>
                                <li>
                                    <a href="{{route('register.user')}}">{{trans('Dashboard\trans_register.Register')}}</a>

                                </li>

                                <li class="mega-menu">
                                    <a href="{{route('endUser.contact.create')}}">{{trans('front/home.contact')}}</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                    <!-- #nav-wrap -->
                    <ul class="header-menu-icons default ">
                        <li class="dropdown-search-form search-style-2">
                            <a href="javascript:void(0);">
                      <span class="icon">
                        <i class="icon-magnifier"></i>
                      </span>
                            </a>
                            <ul>
                                <li class="header widget-form">
                                    <form>
                                        <div class="field">
                                            <div class="control is-expanded">
                                                <input class="input" type="text" placeholder="Search...">
                                                <button type="submit" class="button">
                                <span class="icon">
                                  <i class="icon-magnifier"></i>
                                </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- .header-menu-icons -->
                    <a href="#quote" class="button is-white">{{trans('Dashboard\delivery.get_a_quote')}}</a>
                    <div class="modal search-form-overlay">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <form class="widget-form">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" placeholder="Search...">
                                        <button type="submit" class="button">
                            <span class="icon">
                              <i class="icon-magnifier"></i>
                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button class="modal-close is-large" aria-label="close"></button>
                    </div>
                    <!-- .modal.search-form-overlay -->
                </div>
                <!-- .level-right -->
            </div>
            <!-- .level -->
        </div>
        <!-- #header-inner -->
    </header>
    <!-- #header -->
</div>
