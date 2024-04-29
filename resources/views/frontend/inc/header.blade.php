<nav class="transition--fade">
    <div class="nav-bar nav--absolute nav--transparent" data-fixed-at="200">
        <div class="nav-module logo-module left">
            <a href="{{route('home')}}">
                <img class="logo logo-dark" alt="logo" src="{{asset(config('settings.logo'))}}"/>
                <img class="logo logo-light" alt="logo" src="{{asset(config('settings.slogo'))}}"/>
            </a>
        </div>
        <div class="nav-module menu-module left">
            <ul class="menu">
                <li>
                    <a href="{{route('about')}}">{{SiteHelpers::GoogleTRS('About Us')}}</a>
                </li>

                @foreach($_categories as $key => $category)
                    <li>
                        <a href="{{route('category',$category->slug)}}">
                            @if($category->must != 5)
                                <div>{{SiteHelpers::GoogleTRS($category->cat_name)}}</div>
                            @else
                                <div>
                                    <b class="carixe">{{SiteHelpers::GoogleTRS($category->cat_name)}}</b>
                                </div>
                            @endif
                        </a>
                    </li>

                @endforeach
                <li>
                    <a href="{{route('contact')}}">{{SiteHelpers::GoogleTRS('Contact Us')}}</a>
                </li>
                <li class="mt-3 gflag-ml" >
                    <a href="lang/change?lang=en"
                       title="English" class="gflag"
                       style="background-position:-0px -0px;">
                        <img src="{{asset("frontend/img/main/blank.png")}}"
                             height="32" width="32" alt="English"/>
                    </a>
                    <a href="lang/change?lang=de"
                       title="{{$tr->trans('German','de')}}"
                       class="gflag"
                       style="background-position:-100px -0px;">
                        <img src="{{asset("frontend/img/main/blank.png")}}"
                             height="32" width="32" alt="German"/>
                    </a>
                    <a href="lang/change?lang=fr"
                       title="{{$tr->trans('French','fr')}}"
                       class="gflag"
                       style="background-position:-200px -0px;">
                        <img src="{{asset("frontend/img/main/blank.png")}}"
                             height="32" width="32" alt="French"/>
                    </a>

                    <a href="lang/change?lang=ar-IQ"
                       title="{{$tr->trans('Arabic','ar-IQ')}}"
                       class="gflag"
                       style="background-position:-300px -0px;">
                        <img src="{{asset("frontend/img/main/blank.png")}}"
                             height="32" width="32" alt="Arabic"/>
                    </a>
                    <a href="lang/change?lang=ru"
                       title="{{$tr->trans('Russian','ru')}}"
                       class="gflag"
                       style="background-position:-400px -0px;">
                        <img src="{{asset("frontend/img/main/blank.png")}}"
                             height="32" width="32" alt="Russian"/>
                    </a>
                    <a
                        href="lang/change?lang=ar-SA"
                        title="{{$tr->trans('Arabic','ar-SA')}}"
                        class="gflag"
                        style="background-position:-500px -0px;">
                        <img src="{{asset("frontend/img/main/blank.png")}}"
                             height="32" width="32" alt="Arabic"/>
                    </a>
                    <a
                        href="lang/change?lang=tr"
                        title="{{$tr->trans('Turkish','tr')}}"
                        class="gflag"
                        style="background-position:-600px -0px;">
                        <img src="{{asset("frontend/img/main/blank.png")}}"
                             height="32" width="32" alt="Turkish"/>
                    </a>
                </li>

            </ul>

        </div>



        <!--end nav module-->
        <div class="nav-module right">
            <ul class="menu">
                <li><a href="{{route('catalogue')}}">
                        <div>
                            <b class="catalogue">{{SiteHelpers::GoogleTRS('CATALOGUE’S')}}</b>
                        </div>
                    </a></li>
            </ul>


        </div>
        <div class="nav-module right">


        </div>
    </div>
    <!--end nav bar-->
    <div class="nav-mobile-toggle visible-sm visible-xs">
        <i class="icon-Align-Right icon icon--sm"></i>
    </div>
</nav>

