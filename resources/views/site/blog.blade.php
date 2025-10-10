@extends('site.layouts.master')
@section('title')
    {{ $categoryBlog->name ?? 'Tin tức và hoạt động' }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$categoryBlog->image->path ?? '' }}
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
        <!-- Page Header -->
        <div class="wptb-page-heading">
            <div class="wptb-item--inner" style="background-image: url('/site/images/page-header-bg-6.jpg');">
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="/site/images/circle.png" alt="img">
                </div>
                <h2 class="wptb-item--title ">Tin tức và kinh nghiệm</h2>
            </div>
        </div>
        <!-- Blog Grid -->
        <section class="wptb-blog-grid-one">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-blog-grid1 active highlight wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="{{ route('front.blogDetail', $blog->slug) }}" class="wptb-item-link"><img
                                            src="{{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }}"
                                            alt="img" loading="lazy"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--date">{{ $blog->created_at->format('d M Y') }}</div>
                                    <h5 class="wptb-item--title "><a
                                            href="{{ route('front.blogDetail', $blog->slug) }}"
                                            class="limit-2-line">{{ $blog->name }}</a></h5>
                                    <div class="wptb-item--meta">
                                        <div class="wptb-item--author limit-3-line">{!! $blog->intro !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="wptb-pagination-wrap text-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
@endpush
