<header id="page-topbar">
    <div class="navbar-header">

        <div class="d-flex align-items-left">



        </div>

        <div class="d-flex align-items-center">





            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="badge badge-danger badge-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small font-weight-bold"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-5.jpg"
                                     class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                    <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                    <p class="font-size-11 font-weight-bold mb-0 text-muted"><i
                                            class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle">
                                                <i class="mdi mdi-cloud-download-outline"></i>
                                            </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Download Available !</h6>
                                    <p class="font-size-11 mb-1">Latest version of admin is now available.
                                        Please download here.</p>
                                    <p class="font-size-11 font-weight-bold mb-0 text-muted"><i
                                            class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                @if(Auth::user()->image != null)
                                    <img src="{{asset(Auth::user()->image)}}" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                @else
                                    <img src="{{asset('admin/image/user_avatar.png')}}" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                @endif

                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">{{Auth::user()->name}}</h6>
                                    <p class="font-size-12 mb-1">@if(Auth::user()->isAdmin == 0) Süper Admin @elseif(Auth::user()->isAdmin == 1) Admin @else Editör @endif</p>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2">
                        <a class="btn btn-sm btn-link btn-block text-center font-size-14" href="javascript:void(0)">
                            Load More.. <i class="mdi mdi-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::user()->image != null)
                    <img class="rounded-circle header-profile-user" src="{{asset(Auth::user()->image)}}"
                         alt="Header Avatar">
                    @else
                        <img src="{{asset('admin/image/user_avatar.png')}}" class="rounded-circle header-profile-user" alt="user-pic">
                    @endif
                    <span class="d-none d-sm-inline-block ml-1">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">


                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                       href="{{route('settings.index')}}">
                        Site Ayarları
                    </a>

                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                       href="{{ route('logout') }}">
                        <span>Log Out</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>
