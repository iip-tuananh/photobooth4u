@extends('site.layouts.master')

@section('title')
    {{ $blog->name }} - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$blog->image->path ?? '' }}
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Georgia&family=Courier+Prime&display=swap"
        rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/site/css/editor-content.css">
@endsection

@section('content')
    <!-- Main Wrapper-->
    <main class="wrapper">
        <!-- Page Header -->
        <div class="wptb-page-heading">
            <div class="wptb-item--inner" style="background-image: url('{{ $blog->image ? $blog->image->path : '/site/images/page-header-bg-6.jpg' }}');">
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="/site/images/circle.png" alt="img">
                </div>
                <h2 class="wptb-item--title ">Tin tức và kinh nghiệm</h2>
            </div>
        </div>
        <!-- Details Content -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 pe-md-5">
                        <div class="blog-details-inner">
                            <div class="post-content">
                                <div class="post-header">
                                    <h2 class="post-title">{{ $blog->name }}</h2>
                                    <div class="wptb-item--meta d-flex align-items-center gap-4">
                                        <div class="wptb-item wptb-item--author"><a href="#"><i
                                                    class="bi bi-pencil-square"></i> <span>Admin</span></a></div>
                                        <div class="wptb-item wptb-item--date"><a href="#"><i
                                                    class="bi bi-calendar3"></i> <span>{{ $blog->created_at->format('d M Y') }}</span></a></div>
                                        <div class="wptb-item wptb-item--comments"><a href="#comments"><i
                                                    class="bi bi-chat-square-text"></i> <span>2k</span></a></div>
                                        <div class="wptb-item wptb-item--hits"><a href="#"><i class="bi bi-eye"></i>
                                                <span>1.38k</span></a></div>
                                    </div>
                                </div>
                                <div class="intro">
                                    {!! $blog->intro !!}
                                </div>
                                <div class="fulltext">
                                    {!! $blog->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar  -->
                    <div class="col-lg-3 col-md-4 p-md-0 mt-5 mt-md-0">
                        <div class="sidebar">
                            {{-- <div class="widget widget_block widget_search">
                                <form method="get" class="wp-block-search">
                                    <div class="wp-block-search__inside-wrapper ">
                                        <input type="search" class="wp-block-search__input" name="search"
                                            value="" placeholder="Search" required="">
                                        <button type="submit" class="wp-block-search__button"><i
                                                class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div> --}}
                            <!-- end widget -->
                            <div class="widget widget_block">
                                <div class="wp-block-group__inner-container">
                                    <h2 class="widget-title">Danh mục dịch vụ</h2>
                                    <ul class="wp-block-categories-list wp-block-categories">
                                        @foreach ($service_cates as $service_cate)
                                        <li class="cat-item"><a href="{{ route('front.services', $service_cate->slug) }}">{{ $service_cate->name }}</a> <i
                                                class="bi bi-chevron-right"></i></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- end widget -->
                            <div class="widget widget_block">
                                <div class="wp-block-group__inner-container">
                                    <h2 class="widget-title">Bài viết gần đây</h2>
                                    <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                                        @foreach ($otherBlogs as $otherBlog)
                                        <li>
                                            <div class="latest-posts-content">
                                                <h5><a href="{{ route('front.blogDetail', $otherBlog->slug) }}">{{ $otherBlog->name }}</a></h5>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- end widget -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Details Content -->
    </main>
@endsection

@push('scripts')
@endpush
