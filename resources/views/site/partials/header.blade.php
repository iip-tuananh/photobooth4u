<!-- Main Header -->
<header class="header color-fixed">
    <!-- Lower Bar -->
    <div class="header-inner">
        <div class="container-fluid pe-0">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Left Part -->
                <div class="header_left_part d-flex align-items-center">
                    <div class="logo">
                        <a href="{{ route('front.home-page') }}" class="light_logo"><img src="{{ $config->image ? $config->image->path : 'https://placehold.co/100x100' }}"
                                alt="logo"></a>
                        <a href="{{ route('front.home-page') }}" class="dark_logo"><img src="{{ $config->image ? $config->image->path : 'https://placehold.co/100x100' }}"
                                alt="logo"></a>
                    </div>
                </div>
                <!-- Center Part -->
                <div class="header_center_part d-none d-xl-block">
                    <div class="mainnav">
                        <ul class="main-menu">
                            <li class="menu-item">
                                <a href="{{ route('front.home-page') }}">Trang chủ</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('front.about-us') }}">Giới thiệu</a></li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Dịch vụ</a>
                                <ul class="sub-menu" data-lenis-prevent>
                                    @foreach ($serviceCategories as $serviceCategory)
                                    <li class="menu-item {{ $serviceCategory->childs->count() > 0 ? 'menu-item-has-children' : '' }}">
                                        <a href="{{ route('front.services', $serviceCategory->slug) }}">{{ $serviceCategory->name }}</a>
                                        @if ($serviceCategory->childs->count() > 0)
                                        <ul class="sub-menu" data-lenis-prevent>
                                            @foreach ($serviceCategory->childs as $child)
                                            <li class="menu-item"><a href="{{ route('front.services', $child->slug) }}">{{ $child->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Dự án</a>
                                <ul class="sub-menu" data-lenis-prevent>
                                    @foreach ($projectCategories as $projectCategory)
                                    <li class="menu-item {{ $projectCategory->childs->count() > 0 ? 'menu-item-has-children' : '' }}">
                                        <a href="{{ route('front.projects', $projectCategory->slug) }}">{{ $projectCategory->name }}</a>
                                        @if ($projectCategory->childs->count() > 0)
                                        <ul class="sub-menu" data-lenis-prevent>
                                            @foreach ($projectCategory->childs as $child)
                                            <li class="menu-item"><a href="{{ route('front.projects', $child->slug) }}">{{ $child->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('front.blogs') }}">Tin tức và kinh nghiệm</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('front.contact') }}">Liên hệ</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Right Part -->
                <div class="header_right_part d-flex align-items-center">
                    <div class="aside_open wptb-element">
                        <div class="aside-open--inner">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="header_search wptb-element">
                        <a href="#" class="modal_search_icon" data-bs-toggle="modal"
                            data-bs-target="#modalSearch"><i class="bi bi-search"></i></a>
                    </div>
                    <button type="button" class="mr_menu_toggle wptb-element d-xl-none">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Main Header -->
<!-- Mobile Responsive Menu -->
<div class="mr_menu" data-lenis-prevent>
    <button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
    <div class="logo"></div>
    <!-- Keep this div empty. Logo will come here by JavaScript -->
    <h6>Menu</h6>
    <div class="mr_navmenu"></div>
    <!-- Keep this div empty. Menu will come here by JavaScript -->
    <h6>Liên hệ</h6>
    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="mailto:{{ $config->email }}">{{ $config->email }}</a></p>
            </div>
        </div>
    </div>
    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="contact-1.html">{{ $config->address_company }}</a></p>
            </div>
        </div>
    </div>
    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="tel:{{ str_replace(' ', '', $config->hotline) }}">{{ $config->hotline }}</a></p>
            </div>
        </div>
    </div>
    <h6>Tìm chúng tôi trên</h6>
    <div class="social-box">
        <ul>
            <li><a href="{{ $config->facebook }}"><i class="bi bi-facebook"></i></a></li>
            <li><a href="{{ $config->instagram }}"><i class="bi bi-instagram"></i></a></li>
            <li><a href="{{ $config->linkedin }}"><i class="bi bi-linkedin"></i></a></li>
            <li><a href="{{ $config->behance }}"><i class="bi bi-behance"></i></a></li>
            <li><a href="{{ $config->youtube }}"><i class="bi bi-youtube"></i></a></li>
        </ul>
    </div>
</div>
<div class="aside_info_wrapper" data-lenis-prevent>
    <button class="aside_close">Đóng <i class="bi bi-x-lg"></i></button>
    <div class="aside_logo logo">
        <a href="{{ route('front.home-page') }}" class="light_logo"><img src="{{ $config->image ? $config->image->path : 'https://placehold.co/100x100' }}" alt="logo"></a>
        <a href="{{ route('front.home-page') }}" class="dark_logo"><img src="{{ $config->image ? $config->image->path : 'https://placehold.co/100x100' }}" alt="logo"></a>
    </div>
    <div class="aside_info_inner">
        <h6>// Liên hệ</h6>
        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="mailto:{{ $config->email }}">{{ $config->email }}</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="#">{{ $config->address_company }}</a></p>
                </div>
            </div>
        </div>
        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="tel:{{ str_replace(' ', '', $config->hotline) }}">{{ $config->hotline }}</a></p>
                </div>
            </div>
        </div>
        <h6>// Tìm chúng tôi trên</h6>
        <div class="social-box style-square">
            <ul>
                <li><a href="{{ $config->facebook }}"><i class="bi bi-facebook"></i></a></li>
                <li><a href="{{ $config->instagram }}"><i class="bi bi-instagram"></i></a></li>
                <li><a href="{{ $config->linkedin }}"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="{{ $config->behance }}"><i class="bi bi-behance"></i></a></li>
                <li><a href="{{ $config->youtube }}"><i class="bi bi-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Modal Search -->
<div class="search-modal">
    <div class="modal fade" id="modalSearch">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="search_overlay">
                    <form class="credential-form" method="post" action="{{ route('front.search') }}">
                        <div class="form-group">
                            <input type="text" name="search" class="keyword form-control"
                                placeholder="Tìm kiếm">
                        </div>
                        <button type="submit" class="btn-search">
                            <span class="text-first"> <i class="bi bi-arrow-right"></i> </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
