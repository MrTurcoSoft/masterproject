<nav class="transition--fade">
    <div class="nav-bar nav--absolute nav--transparent" data-fixed-at="200">
        <div class="nav-module logo-module left">
            <a href="{{route('home')}}">
                <img class="logo logo-dark" alt="logo" src="{{asset(SiteHelpers::ayar("logo"))}}"/>
                <img class="logo logo-light" alt="logo" src="{{asset(SiteHelpers::ayar("logo_small"))}}"/>
            </a>
        </div>
        <div class="nav-module menu-module left">
            <ul class="menu">
                <li><a href="{{route('about')}}">About Us</a></li>

@foreach($_categories as $key => $category)
<li>
    <a href="{{route('category',$category->slug)}}">
        @if($category->must != 5)
        <div>{{$category->cat_name}}</div>
        @else
            <div><b class="carixe">{{$category->cat_name}}</b></div>
        @endif
    </a>
</li>
                @endforeach
                <li><a href="{{route('contact')}}">Contact</a></li>


            </ul>
        </div>
        <!--end nav module-->
        <div class="nav-module right">
            <ul class="menu">
                <li><a href="catalogue">
                        <div><b class="catalogue">CATALOGUE’S</b></div>
                    </a></li>
            </ul>
            <!-- Dil Kısmı -->
            <!--            <script src="/google-web-translate/translate.js"></script>-->
            <!-- Dil Kısmı -->

        </div>
        <div class="nav-module right">


        </div>
    </div>
    <!--end nav bar-->
    <div class="nav-mobile-toggle visible-sm visible-xs">
        <i class="icon-Align-Right icon icon--sm"></i>
    </div>
</nav>
