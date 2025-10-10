<!-- Footer -->
<footer class="footer style1 bg-image-2" style="background-image: url('/site/images/bg-5.png');">
    <div class="footer-top">
        <div class="container">
            <div class="footer--inner">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-5 mb-md-0">
                        <div class="footer-widget">
                            <div class="footer-nav" style="margin-bottom: 60px;">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('front.home-page') }}">Trang chủ</a></li>
                                    <li class="menu-item"><a href="{{ route('front.about-us') }}">Giới thiệu</a></li>
                                    <li class="menu-item"><a href="{{ route('front.blogs') }}">Tin tức và kinh
                                            nghiệm</a></li>
                                    <li class="menu-item"><a href="{{ route('front.contact') }}">Liên hệ</a></li>
                                </ul>
                            </div>
                            <div style="margin-top: 20px;" class="fb-page" data-href="{{$config->facebook}}" data-width="380"
                                data-hide-cover="false" data-show-facepile="false"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-5 mb-md-0 order-1 order-md-0">
                        <div class="footer-widget text-center">
                            <div class="logo">
                                <a href="{{ route('front.home-page') }}" class=""><img
                                        src="{{ $config->image ? $config->image->path : 'https://placehold.co/100x100' }}"
                                        alt="logo" loading="lazy"></a>
                            </div>
                            <h6 class="widget-title">Đăng kí nhận bản tin từ chúng tôi</h6>
                            <form class="newsletter-form" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Nhập email của bạn" required>
                                </div>
                                <button type="submit" class="btn btn-two">
                                    <span class="btn-wrap">
                                        <span class="text-first">Đăng ký</span>
                                        <span class="text-second"><i class="bi bi-arrow-up-right"></i> <i
                                                class="bi bi-arrow-up-right"></i></span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-5 mb-md-0">
                        <div class="footer-widget text-md-end">
                            <div class="footer-nav">
                                <ul>
                                    @foreach ($serviceCategories as $serviceCategory)
                                        <li class="menu-item"><a
                                                href="{{ route('front.services', $serviceCategory->slug) }}">{{ $serviceCategory->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="copyright">
                    <p>COPYRIGHT © 2022 By {{ $config->short_name_company }}</p>
                </div>
                <div class="social-box style-oval">
                    <ul>
                        <li><a href="{{ $config->facebook }}" class="bi bi-facebook"></a></li>
                        <li><a href="{{ $config->instagram }}" class="bi bi-instagram"></a></li>
                        <li><a href="{{ $config->linkedin }}" class="bi bi-linkedin"></a></li>
                        <li><a href="{{ $config->behance }}" class="bi bi-behance"></a></li>
                        <li><a href="{{ $config->youtube }}" class="bi bi-youtube"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="totop">
    <a href="#"><i class="bi bi-chevron-up"></i></a>
</div>
