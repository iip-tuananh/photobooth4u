@extends('site.layouts.master')

@section('title')
    {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$config->image->path ?? '' }}
@endsection

@section('css')
    <style>
        .limit-3-line {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .limit-2-line {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection


@section('content')
    <!-- Main Wrapper-->
    <main class="wrapper">
        <!-- Slider Section -->
        <section class="wptb-slider style3">
            <div class="swiper-container wptb-swiper-slider-three">
                <!-- swiper slides -->
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="wptb-slider--item">
                                <div class="wptb-slider--image"
                                    style="background-image: url('{{ $banner->image ? $banner->image->path : 'https://placehold.co/1920x1080' }}');">
                                </div>
                                {{-- <div class="wptb-slider--inner">
                                    <div class="wptb-item--inner">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="wptb-heading">
                                                        <h1 class="wptb-item--title">{{ $banner->title }}</h1>
                                                        <p class="wptb-item--description">{{ $banner->intro }}</p>
                                                        <div class="wptb-item--button">
                                                            <a class="btn btn-two white" href="{{ $banner->link }}">
                                                                <span class="btn-wrap">
                                                                    <span class="text-first">Tìm hiểu ngay</span>
                                                                    <span class="text-second"> <i
                                                                            class="bi bi-arrow-up-right"></i> <i
                                                                            class="bi bi-arrow-up-right"></i> </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Layer Image -->
                                <div class="wptb-item-layer wptb-item-layer-one">
                                    <img src="/site/images/layer-4.png" alt="img">
                                </div>
                                <!-- Layer Image -->
                                <div class="wptb-item-layer wptb-item-layer-two">
                                    <img src="/site/images/layer-5.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <!-- End Slide Item -->
                    @endforeach
                </div>
            </div>
            <!-- Bottom Pane -->
            <div class="wptb-bottom-pane justify-content-center">
                <!-- pagination dots -->
                <div class="wptb-swiper-dots style2">
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Swiper Navigation -->
                <div class="wptb-swiper-navigation style3">
                    <div class="wptb-swiper-arrow swiper-button-prev"></div>
                    <div class="wptb-swiper-arrow swiper-button-next"></div>
                </div>
            </div>
        </section>

        <!-- Albums -->
        <section class="wptb-album-one">
            {{-- <div class="wptb-item-layer wptb-item-layer-one both-version">
                <img src="/site/images/texture-2.png" alt="img">
                <img src="/site/images/texture-2-light.png" alt="img">
            </div> --}}
            <div class="container-full">
                <div class="wptb-heading mb-0">
                    <div class="wptb-item--inner text-center">
                        <h1 class="wptb-item--title lg"><span>Dịch vụ của chúng tôi</span>
                        </h1>
                    </div>
                </div>
                <div class="swiper-container swiper-gallery-two has-radius">
                    <div class="swiper-wrapper">
                        @foreach ($serviceCategories as $category)
                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="grid-item">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ $category->image ? $category->image->path : 'https://placehold.co/600x400' }}"
                                                alt="img" loading="lazy">
                                            <a class="wptb-item--link"
                                                href="{{ route('front.services', $category->slug) }}"><i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>
                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a style="font-size: 28px; font-weight: 600;"
                                                        href="{{ route('front.services', $category->slug) }}">{{ $category->name }}</a>
                                                </h4>
                                                {{-- <p>{{ $category->intro }}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Swiper Navigation -->
                    <div class="wptb-swiper-navigation style2">
                        <div class="wptb-swiper-arrow swiper-button-prev"></div>
                        <div class="wptb-swiper-arrow swiper-button-next"></div>
                    </div>
                </div>
                <div class="shadow-heading">
                    <h1 class="wptb-item--title">PhotoBooth</h1>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="wptb-services-one">
            <div class="wptb-item-layer wptb-item-layer-one both-version">
                <img src="/site/images/texture-2.png" alt="img">
                {{-- <img src="/site/images/texture-2-light.png" alt="img"> --}}
            </div>
            <div class="container">
                <div class="wptb-heading">
                    <div class="wptb-item--inner">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h1 class="wptb-item--title">
                                    <span>Tại sao nên chọn chúng tôi?</span>
                                </h1>
                            </div>
                            <div class="col-lg-6">
                                <p class="wptb-item--description">Chúng tôi rất đam mê <span>nhận lưu lại những kỷ niệm đẹp nhất của bạn</span>
                                    và truyền cảm hứng cho mọi thời điểm trong cuộc sống.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Iconbox -->
                    <div class="col-lg-3 col-md-6 col-sm-6 ps-0 wow fadeInLeft">
                        <div class="wptb-icon-box5 mb-3">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--icon">
                                    <img src="/site/images/Mask Group 94.svg" alt="img" class="default-icon"
                                        loading="lazy">
                                    {{-- <img src="site/images/Mask Group 94.svg" alt="img" class="hover-icon" loading="lazy"> --}}
                                </div>
                                <div class="wptb-item--holder">
                                    <h4 class="wptb-item--title mb-0">Nhiều tính năng hiện đại</h4>
                                    <p class="wptb-item--description">
                                        Có sẵn các màn hình tương tác lớn, in không giới hạn số lượng
                                        nhiều đạo cụ phụ kiện chụp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Iconbox -->
                    <div class="col-lg-3 col-md-6 col-sm-6 ps-0 wow fadeInLeft">
                        <div class="wptb-icon-box5 mb-3">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--icon">
                                    <img src="/site/images/Mask Group 95.svg" alt="img" class="default-icon"
                                        loading="lazy">
                                    {{-- <img src="site/images/Mask Group 95.svg" alt="img" class="hover-icon" loading="lazy"> --}}
                                </div>
                                <div class="wptb-item--holder">
                                    <h4 class="wptb-item--title mb-0">Kinh nghiệm</h4>
                                    <p class="wptb-item--description">
                                        Đã thực hiện hơn 1000+ sự kiện thành công tốt đẹp
                                        từ các thương hiệu đối tác lớn nhỏ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Iconbox -->
                    <div class="col-lg-3 col-md-6 col-sm-6 ps-0 wow fadeInLeft">
                        <div class="wptb-icon-box5 mb-3">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--icon">
                                    <img src="/site/images/Mask Group 96.svg" alt="img" class="default-icon"
                                        loading="lazy">
                                    {{-- <img src="site/images/Mask Group 96.svg" alt="img" class="hover-icon" loading="lazy"> --}}
                                </div>
                                <div class="wptb-item--holder">
                                    <h4 class="wptb-item--title mb-0">
                                        Hệ thống photobooth,và các chuyên gia nhiếp ảnh
                                    </h4>
                                    <p class="wptb-item--description">
                                        Chụp-in ảnh chuyên nghiệp nhất
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Iconbox -->
                    <div class="col-lg-3 col-md-6 col-sm-6 ps-0 wow fadeInLeft">
                        <div class="wptb-icon-box5 mb-3">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--icon">
                                    <img src="/site/images/Mask Group 97.svg" alt="img" class="default-icon"
                                        loading="lazy">
                                    {{-- <img src="site/images/Mask Group 97.svg" alt="img" class="hover-icon" loading="lazy"> --}}
                                </div>
                                <div class="wptb-item--holder">
                                    <h4 class="wptb-item--title mb-0">
                                        Chất lượng hình ảnh đẹp nhất
                                    </h4>
                                    <p class="wptb-item--description">
                                        Studio và hệ thống camera DSLR chất lượng cùng thiết bị tiên tiến
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Kimono -->
        <section class="wptb-about-two bg-transparent pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="wptb-image-single wow fadeInUp">
                            <div class="wptb-item--inner">
                                {{-- <div class="wptb-item--image position-relative">
                                    <img src="{{ $about->image ? $about->image->path : 'https://placehold.co/600x400' }}" alt="img">
                                </div> --}}
                                @php
                                    $youtubeId = $about->title_2;
                                    if (strpos($youtubeId, 'youtube.com') !== false) {
                                        $youtubeId = explode('v=', $youtubeId);
                                    } else {
                                        $youtubeId = explode('youtu.be/', $youtubeId);
                                    }
                                    $youtubeId = $youtubeId[1];
                                @endphp
                                <iframe style="border-radius: 10px;" width="100%" height="100%"
                                    src="https://www.youtube.com/embed/{{ $youtubeId }}"
                                    title="Dịch vụ Media check in độc đáo cho sự kiện,: Photo Booth, 360 Photo Booth, 360 Video Slow Motion."
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="wptb-item-layer wptb-item-layer-one both-version">
                                <img src="/site/images/light-2.png" alt="img">
                                <img src="/site/images/light-2-light.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 ps-md-5 mt-4 mt-md-0">
                        <div class="wptb-about--text wptb-heading">
                            <h1 class="wptb-item--title"><span>Về chúng tôi</span></h1>
                            {!! $about->intro_text !!}
                        </div>
                        <div class="wptb-item--button">
                            <a href="{{ route('front.about-us') }}" class="btn btn-two creative text-uppercase">
                                <span class="btn-wrap">
                                    <span class="text-first">Tìm hiểu thêm về chúng tôi</span>
                                    <span class="text-second"><i class="bi bi-arrow-up-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider Section -->
        <section class="wptb-slider style4">
            <div class="wptb-heading-two">
                <div class="wptb-item--inner text-center">
                    <h1 class="wptb-item--title"><span>Album ảnh nổi bật</span></h1>
                </div>
            </div>
            <div class="swiper-container wptb-swiper-slider-four">
                <!-- swiper slides -->
                <div class="swiper-wrapper">
                    @foreach ($amenities as $amenity)
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="wptb-slider--item">
                                <div class="wptb-slider--image">
                                    <img src="{{ $amenity->image ? $amenity->image->path : 'https://placehold.co/600x400' }}"
                                        alt="" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <!-- End Slide Item -->
                    @endforeach
                </div>
            </div>
            <!-- Layer Image -->
            <div class="wptb-item-layer wptb-item-layer-one both-version">
                <img src="/site/images/texture-1.png" alt="img" loading="lazy">
                <img src="/site/images/texture-1-light.png" alt="img" loading="lazy">
            </div>
            <!-- Layer Image -->
            <div class="wptb-item-layer wptb-item-layer-two both-version">
                <img src="/site/images/round.png" alt="img" loading="lazy">
                <img src="/site/images/round-light.png" alt="img" loading="lazy">
            </div>
            <!-- Layer Image -->
            <div class="wptb-item-layer wptb-item-layer-three both-version">
                <img src="/site/images/overlay.png" alt="img" loading="lazy">
                <img src="/site/images/overlay-light.png" alt="img" loading="lazy">
            </div>
        </section>

        <!-- Testimonial -->
        <section class="wptb-testimonial-one bg-image" style="background-image: url('/site/images/bg-2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="swiper-container swiper-testimonial">
                            <!-- swiper slides -->
                            <div class="swiper-wrapper">
                                @foreach ($reviews as $review)
                                    <div class="swiper-slide">
                                        <div class="wptb-testimonial1">
                                            <div class="wptb-item--inner">
                                                <div class="wptb-item--holder">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mr-bottom-25">
                                                        <div class="wptb-item--meta-rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <div class="wptb-item--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                                height="45" viewBox="0 0 57 45" fill="none">
                                                                <path
                                                                    d="M51.5137 38.5537C56.8209 32.7938 56.2866 25.3969 56.2697 25.3125V2.8125C56.2697 2.06658 55.9734 1.35121 55.4459 0.823763C54.9185 0.296317 54.2031 0 53.4572 0H36.5822C33.48 0 30.9572 2.52281 30.9572 5.625V25.3125C30.9572 26.0584 31.2535 26.7738 31.781 27.3012C32.3084 27.8287 33.0238 28.125 33.7697 28.125H42.4266C42.3671 29.5155 41.9517 30.8674 41.22 32.0513C39.7913 34.3041 37.0997 35.8425 33.2156 36.6188L30.9572 37.0688V45H33.7697C41.5969 45 47.5678 42.8316 51.5137 38.5537ZM20.5566 38.5537C25.8666 32.7938 25.3294 25.3969 25.3125 25.3125V2.8125C25.3125 2.06658 25.0162 1.35121 24.4887 0.823763C23.9613 0.296317 23.2459 0 22.5 0H5.625C2.52281 0 0 2.52281 0 5.625V25.3125C0 26.0584 0.296316 26.7738 0.823762 27.3012C1.35121 27.8287 2.06658 28.125 2.8125 28.125H11.4694C11.41 29.5155 10.9945 30.8674 10.2628 32.0513C8.83406 34.3041 6.1425 35.8425 2.25844 36.6188L0 37.0688V45H2.8125C10.6397 45 16.6106 42.8316 20.5566 38.5537Z"
                                                                    fill="#D70006" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="wptb-item--description"> {{ $review->message }}
                                                    </p>
                                                    <div class="wptb-item--meta">
                                                        <div class="wptb-item--image">
                                                            <img src="{{ $review->image ? $review->image->path : 'https://placehold.co/100x100' }}"
                                                                alt="img" loading="lazy">
                                                        </div>
                                                        <div class="wptb-item--meta-left">
                                                            <h4 class="wptb-item--title">{{ $review->name }}</h4>
                                                            <h6 class="wptb-item--designation">{{ $review->position }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Swiper Navigation -->
                            <div class="wptb-swiper-navigation style1">
                                <div class="wptb-swiper-arrow swiper-button-prev"></div>
                                <div class="wptb-swiper-arrow swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Grid -->
        <section class="wptb-blog-grid-one pb-0">
            <div class="container">
                <div class="wptb-heading">
                    <div class="wptb-item--inner">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h1 class="wptb-item--title mb-0">
                                    <span>Tin tức nổi bật</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wptb-blog--inner">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-sm-6">
                                <div class="wptb-blog-grid1 active highlight wow fadeInLeft">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <a href="{{ route('front.blogDetail', $post->slug) }}" class="wptb-item-link"><img
                                                    src="{{ $post->image ? $post->image->path : 'https://placehold.co/600x400' }}"
                                                    alt="img" loading="lazy"></a>
                                        </div>
                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--date">{{ $post->created_at->format('d M Y') }}</div>
                                            <h5 class="wptb-item--title "><a
                                                    href="{{ route('front.blogDetail', $post->slug) }}"
                                                    class="limit-2-line">{{ $post->name }}</a></h5>
                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--author limit-3-line">{!! $post->intro !!}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact -->
        <section class="wptb-contact-form style1" ng-controller="AboutPage" ng-cloak>
            <div class="wptb-item-layer both-version">
                <img src="/site/images/texture-2.png" alt="img" loading="lazy">
            </div>
            <div class="container">
                <div class="wptb-form--wrapper">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner text-center">
                            <h1 class="wptb-item--title"> <span>Hãy liên hệ với chúng tôi</span></h1>
                            <div class="wptb-item--description"> Chúng tôi sẽ liên hệ với bạn để được hỗ trợ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <form class="wptb-form" id="form-contact">
                                <div class="wptb-form--inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Họ tên*" required>

                                                <span class="invalid-feedback d-block" role="alert" ng-if="errors.name">
                                                    <strong><% errors.name[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email*" required>

                                                <span class="invalid-feedback d-block" role="alert" ng-if="errors.email">
                                                    <strong><% errors.email[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Số điện thoại">

                                                <span class="invalid-feedback d-block" role="alert" ng-if="errors.phone">
                                                    <strong><% errors.phone[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 mb-4">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Tin nhắn"></textarea>

                                                <span class="invalid-feedback d-block" role="alert" ng-if="errors.message">
                                                    <strong><% errors.message[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="wptb-item--button text-center">
                                                <button class="btn white-opacity creative" type="submit" ng-click="submitContact()">
                                                    <span class="btn-wrap">
                                                        <span class="text-first">Gửi liên hệ</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team -->
        <section class="wptb-team-one">
            <div class="container">
                <div class="wptb-heading">
                    <div class="wptb-item--inner">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="wptb-item--title mb-lg-0">
                                    <span>Đối tác của chúng tôi</span>
                                </h1>
                            </div>
                            <div class="col-lg-6">
                                <!-- Swiper Navigation -->
                                <div class="wptb-swiper-navigation style1">
                                    <div class="wptb-swiper-arrow swiper-button-prev"></div>
                                    <div class="wptb-swiper-arrow swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container swiper-team">
                    <div class="swiper-wrapper">
                        @foreach ($partners as $partner)
                            <!-- Team Block -->
                            <div class="swiper-slide">
                                <div class="wptb-team-grid1">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image">
                                            <img src="{{ $partner->image ? $partner->image->path : 'https://placehold.co/600x400' }}"
                                                alt="img" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <div class="divider-line-hr"></div>
    </main>
@endsection
@push('scripts')
<script>
    app.controller('AboutPage', function($rootScope, $scope, $sce, $interval) {
        $scope.errors = {};
        $scope.sendSuccess = false;

        $scope.submitContact = function() {
            var url = "{{ route('front.submitContact') }}";
            var data = jQuery('#form-contact').serialize();
            $scope.loading = true;
            jQuery.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        jQuery('#form-contact')[0].reset();
                        $scope.errors = {};
                        $scope.sendSuccess = true;
                        $scope.$apply();
                    } else {
                        $scope.errors = response.errors;
                        toastr.warning(response.message);
                    }
                },
                error: function() {
                    toastr.error('Đã có lỗi xảy ra');
                },
                complete: function() {
                    $scope.loading = false;
                    $scope.$apply();
                }
            });
        }
    })
</script>
@endpush
