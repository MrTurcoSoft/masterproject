<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="{{route('dashboard')}}"><img src="{{asset(SiteHelpers::ayar('logo_small'))}}" alt="Logo"></a>
            </div>
            <div class="header-top-right">

                <div class="dropdown">
                    <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2" >
                            @if(Auth::user()->image != null)
                            <img src="{{asset(Auth::user()->image)}}" alt="Avatar">
                                @else
                                <img src="{{asset('admin/image/user_avatar.png')}}" alt="Avatar">
                                @endif
                        </div>
                        <div class="text">
                            <h6 class="user-dropdown-name">{{Auth::user()->name}}</h6>
                            <p class="user-dropdown-status text-sm text-muted">@if(Auth::user()->isAdmin == 0) Süper Admin @elseif(Auth::user()->isAdmin == 1) Admin @else Editör @endif</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                        @if(Auth::user()->isAdmin == 0)
                       <li><a class="dropdown-item" href="{{route('route.list')}}">Route List</a></li>
                        @endif
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <ul>
                <li class="menu-item  ">
                    <a href="{{route('dashboard')}}" class='menu-link'>
                        <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                    </a>
                </li>
                <li class="menu-item  has-sub">
                    <a href="#" class='menu-link'>
                        <span><i class="bi bi-images"></i> Slider</span>
                    </a>
                    <div class="submenu ">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li
                                    class="submenu-item  ">
                                    <a href="{{route('slider-management.index')}}"
                                       class='submenu-link'>Sliderlar</a>
                                </li>
                                <li
                                    class="submenu-item  ">
                                    <a onclick="ByTurcoSoftModal(this.href,'Yeni Slider Ekle');return false"
                                       href="{{route('slider-management.create')}}"
                                       class='submenu-link'>
                                        Yeni Slider Ekle
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item  has-sub">
                    <a href="#" class='menu-link'>
                        <span><i class="bi bi-bag-dash-fill"></i> Ürün Kategorileri</span>
                    </a>
                    <div
                        class="submenu ">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li
                                    class="submenu-item  ">
                                    <a href="{{route('categories.index')}}"
                                       class='submenu-link'>Kategorileri Listele</a>
                                </li>
                                <li
                                    class="submenu-item  ">
                                    <a onclick="ByTurcoSoftModal(this.href,'Yeni Kategori Ekle');return false"
                                       href="{{route('categories.create')}}"
                                       class='submenu-link'>Yeni Kategori Ekle
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item  has-sub">
                    <a href="#" class='menu-link'>
                        <span><i class="bi bi-box-seam"></i> Ürünler</span>
                    </a>
                    <div
                        class="submenu ">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li
                                    class="submenu-item  ">
                                    <a href="{{route('products.index')}}"
                                       class='submenu-link'>Ürünleri Listele</a>
                                </li>
                                <li
                                    class="submenu-item  ">
                                    <a onclick="ByTurcoSoftModal(this.href,'Yeni Ürün Ekle');return false"
                                       href="{{route('products.create')}}"
                                       class='submenu-link'>Yeni Ürün Ekle
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item  has-sub">
                    <a href="#" class='menu-link'>
                        <span><i class="bi bi-building-fill"></i> Kurumsal Sayfalar</span>
                    </a>
                    <div
                        class="submenu ">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li
                                    class="submenu-item  ">
                                    <a href="{{route('about.index')}}"
                                       class='submenu-link'>Hakkımızda Sayfası</a>
                                </li>
                                <li
                                    class="submenu-item  ">
                                    <a href="{{route('certificates.index')}}"
                                       class='submenu-link'>Sertifikalar/Belgeler</a>
                                </li>
                                <li
                                    class="submenu-item  ">
                                    <a href="{{route('catalog.index')}}"
                                       class='submenu-link'>Katalog</a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item  has-sub">
                    <a href="#" class='menu-link'>
                        <span><i class="bi bi-house"></i> Ana Sayfa Düzenleme</span>
                    </a>
                    <div class="submenu ">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li
                                    class="submenu-item  ">
                                    <a href="{{route('homesections.index')}}"
                                       class='submenu-link'>Bölüm 1-2-4 </a>
                                </li>
                                <li
                                    class="submenu-item  ">
                                    <a href="{{route('sectiontabs.index')}}"
                                       class='submenu-link'>Bölüm 3(Tab Section)</a>
                                </li>
                               </ul>

                        </div>
                    </div>
                </li>
                <li class="menu-item"> </li>
                <li class="menu-item"> </li>
                <li class="menu-item"><a style="color: #ffffff; font-size: xx-large " href="{{route('settings.index')}}"  title="Site Ayarları"><i class="bi bi-database-gear"></i></a> </li>
                <li class="menu-item"> </li>
                <li class="menu-item"> </li>

                <li class="menu-item"><a style="color: #ffffff; font-size: xx-large " href="{{route('home')}}" target="_blank" title="Web Sitesine Git"><i class="bi bi-globe2"></i></a></li>

            </ul>
        </div>
    </nav>

</header>
