<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
            <a href="{{route('dashboard')}}" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>Dashboard</span></a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-photo-album"></i><span>Slider</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('slider-management.index')}}">Sliderlar</a></li>
                <li><a href="{{route('slider-management.create')}}">Yeni Slider Ekle</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-columns"></i><span>Ürün Kategorileri</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('categories.index')}}">Kategorileri Listele</a></li>
                <li><a href="{{route('categories.create')}}">Yeni Kategori Ekle</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-package"></i><span>Ürünler</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('products.index')}}">Ürünleri Listele</a></li>
                <li><a href="{{route('products.create')}}">Yeni Ürün Ekle</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-business"></i><span class="badge badge-pill badge-soft-danger float-right"></span><span>Kurumsal Sayfalar</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('about.index')}}">Hakkımızda Sayfası</a></li>
                <li><a href="{{route('certificates.index')}}">Sertifikalar/Belgeler</a></li>
                <li><a href="{{route('catalog.index')}}">Katalog</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-buildings"></i><span>Ana Sayfa Düzenle</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('homesections.index')}}">Bölüm 1-2-4</a></li>
                <li><a href="{{route('sectiontabs.index')}}">Bölüm 3(Tab Section)</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-comment"></i><span>Blog</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('posts.index')}}">Blog Yazıları</a></li>
                <li><a href="{{route('posts.create')}}">Yeni Blog Yazısı</a></li>
            </ul>
        </li>



    </ul>
</div>
