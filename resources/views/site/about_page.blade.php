@extends('site.layouts.master')

@section('title')
    Về chúng tôi - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$config->image->path ?? '' }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- Main Wrapper-->
    <main class="wrapper">
        <!-- Page Header -->
        <div class="wptb-page-heading">
            <div class="wptb-item--inner"
                style="background-image: url('{{ $about->image ? $about->image->path : '/site/images/page-header-bg-4.jpg' }}');">
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="/site/images/circle.png" alt="img">
                </div>
                <h2 class="wptb-item--title">Về chúng tôi</h2>
            </div>
        </div>
        <!-- About Kimono -->
        <section class="wptb-about-one bg-image-2" style="background-image: url('../assets/img/more/texture.png');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wptb-about--text">
                            <p class="wptb-about--text-one mb-4">{!! $about->body_text !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BG Video -->
        <div class="container">
            <div class="wptb-video-player1 wow zoomIn"
                style="background-image: url('/site/images/bg-7.jpg');">
                <div class="wptb-item--inner">
                    <div class="wptb-item--holder">
                        <div class="wptb-item--video-button">
                            <a class="btn" data-fancybox href="{{ $about->title_2 }}">
                                <span class="text-second"> <i class="bi bi-play-fill"></i> </span>
                                <span class="line-video-animation line-video-1"></span>
                                <span class="line-video-animation line-video-2"></span>
                                <span class="line-video-animation line-video-3"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-line-hr mr-top-100"></div>
    </main>
@endsection

@push('scripts')
@endpush
