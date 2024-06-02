<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{route('home')}}">
                                <img alt="DellaSoft" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="25" src="{{asset(config('settings.logo'))}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                    <a class="nav-link ps-0" href="{{route('about')}}"><i class="fas fa-angle-right"></i> {{SiteHelpers::GoogleTRS('About Us')}}</a>
                                </li>
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                    <a class="nav-link" href="{{route('contact')}}"><i class="fas fa-angle-right"></i> {{SiteHelpers::GoogleTRS('Contact Us')}}</a>
                                </li>
                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                    <span class="ws-nowrap"><i class="fas fa-phone"></i> {{config('settings.phoneGsm')}}</span>
                                </li>
                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show"><a href="?lang=en" title="English" >
                                    <img src="{{ asset('frontend/img/flag/US.webp') }}" height="24" width="24" alt="English"/>
                                </a></li>
                            </ul>
                        </nav>

                    </div>
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="menu-item ">
                                            <a class="dropdown-item dropdown-toggle @active('home')" href="{{route('home')}}">
                                                {{SiteHelpers::GoogleTRS(strtoupper('Home'))}}
                                            </a>
                                        </li>
                                        @foreach($_categories as $key => $category)
                                            @if($category->altkategoriler->count() > 0)
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle " href="javascript:void(0)">
                                                        {{SiteHelpers::GoogleTRS(strtoupper($category->cat_name))}}
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        @foreach($category->altkategoriler as $altkategoriler)
                                                        <li>
                                                            <a class="dropdown-item" href="{{route('category',$altkategoriler->slug)}}">
                                                                {{SiteHelpers::GoogleTRS(strtoupper($altkategoriler->cat_name))}}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @else
                                                <li class="menu-item">
                                                    <a class="dropdown-item dropdown-toggle" href="{{route('category',$category->slug)}}">
                                                        {{SiteHelpers::GoogleTRS(strtoupper($category->cat_name))}}
                                                    </a>
                                                </li>

                                            @endif
                                            @endforeach
                                        @mobile
                                        <li class="menu-item">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('about')}}">
                                                {{SiteHelpers::GoogleTRS('About Us')}}
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('contact')}}">
                                                {{SiteHelpers::GoogleTRS('Contact Us')}}
                                            </a>
                                        </li>
                                        @endmobile
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-sm-block">
                                <li class="social-icons-instagram"><a href="https://www.instgram.com/{{config('settings.instagram')}}" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/{{config('settings.facebook')}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-linkedin"><a href="https://www.linkedin.com/showcase/{{config('settings.linkedin')}}" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
